<?php

namespace App\Repository;

use App\Entity\Transactions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Transactions>
 */
class TransactionsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Transactions::class);
    }

    public function getIncomeExpenseData(int $userId, string $period): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $dateCondition = $this->getDateCondition($period);

        $sql = "
            SELECT 
                DATE_FORMAT(t.date, '%b') as month,
                MONTH(t.date) as month_num,
                SUM(CASE WHEN t.amount > 0 THEN t.amount ELSE 0 END) as income,
                SUM(CASE WHEN t.amount < 0 THEN ABS(t.amount) ELSE 0 END) as expenses
            FROM transactions t
            WHERE t.user_id = :userId {$dateCondition}
            GROUP BY MONTH(t.date), DATE_FORMAT(t.date, '%b')
            ORDER BY MONTH(t.date)
        ";

        $stmt = $conn->prepare($sql);
        $params = ['userId' => $userId];

        if ($period !== 'all') {
            $params['startDate'] = $this->getStartDate($period);
        }

        $result = $stmt->executeQuery($params);
        $data = $result->fetchAllAssociative();

        // Vul ontbrekende maanden op
        return $this->fillMissingMonths($data);
    }

    public function getCategoryData(int $userId, string $period, string $type): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $dateCondition = $this->getDateCondition($period);
        $amountCondition = $type === 'income' ? 't.amount > 0' : 't.amount < 0';

        $sql = "
            SELECT 
                c.name as category,
                SUM(ABS(t.amount)) as amount,
                COUNT(t.id) as count
            FROM transactions t
            INNER JOIN category c ON t.category_id = c.id
            WHERE t.user_id = :userId 
                AND {$amountCondition}
                {$dateCondition}
            GROUP BY c.id, c.name
            ORDER BY amount DESC
        ";

        $stmt = $conn->prepare($sql);
        $params = ['userId' => $userId];

        if ($period !== 'all') {
            $params['startDate'] = $this->getStartDate($period);
        }

        $result = $stmt->executeQuery($params);
        return $result->fetchAllAssociative();
    }

    public function getMonthlyTrendData(int $userId, string $period): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $dateCondition = $this->getDateCondition($period);

        $sql = "
            SELECT 
                DATE_FORMAT(t.date, '%b') as month,
                MONTH(t.date) as month_num,
                SUM(CASE WHEN t.amount > 0 THEN t.amount ELSE 0 END) as income,
                SUM(CASE WHEN t.amount < 0 THEN ABS(t.amount) ELSE 0 END) as expenses,
                (SUM(CASE WHEN t.amount > 0 THEN t.amount ELSE 0 END) - 
                 SUM(CASE WHEN t.amount < 0 THEN ABS(t.amount) ELSE 0 END)) as net
            FROM transactions t
            WHERE t.user_id = :userId {$dateCondition}
            GROUP BY MONTH(t.date), DATE_FORMAT(t.date, '%b')
            ORDER BY MONTH(t.date)
        ";

        $stmt = $conn->prepare($sql);
        $params = ['userId' => $userId];

        if ($period !== 'all') {
            $params['startDate'] = $this->getStartDate($period);
        }

        $result = $stmt->executeQuery($params);
        $data = $result->fetchAllAssociative();

        return $this->fillMissingMonths($data);
    }

    public function getMonthlySummary(int $userId, int $year): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            SELECT 
                MONTH(t.date) as month,
                SUM(CASE WHEN t.amount > 0 THEN t.amount ELSE 0 END) as income,
                SUM(CASE WHEN t.amount < 0 THEN ABS(t.amount) ELSE 0 END) as expenses
            FROM transactions t
            WHERE t.user_id = :userId AND YEAR(t.date) = :year
            GROUP BY MONTH(t.date)
            ORDER BY month
        ';

        $stmt = $conn->prepare($sql);
        $result = $stmt->executeQuery([
            'userId' => $userId,
            'year' => $year
        ]);

        $data = $result->fetchAllAssociative();

        // Vul alle maanden in (zelfs als er geen data is)
        $monthlyData = [];
        for ($i = 1; $i <= 12; $i++) {
            $monthlyData[$i] = [
                'month' => $i,
                'income' => 0,
                'expenses' => 0
            ];
        }

        foreach ($data as $row) {
            $monthlyData[$row['month']] = $row;
        }

        return array_values($monthlyData);
    }

    public function getCategorySummary(int $userId, int $year, int $month): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            SELECT 
                c.name as category,
                SUM(ABS(t.amount)) as amount,
                COUNT(t.id) as transaction_count
            FROM transactions t
            INNER JOIN category c ON t.category_id = c.id
            WHERE t.user_id = :userId 
                AND YEAR(t.date) = :year 
                AND MONTH(t.date) = :month
                AND t.amount < 0
            GROUP BY c.id, c.name
            ORDER BY amount DESC
        ';

        $stmt = $conn->prepare($sql);
        $result = $stmt->executeQuery([
            'userId' => $userId,
            'year' => $year,
            'month' => $month
        ]);

        return $result->fetchAllAssociative();
    }

    public function getYearlySummary(int $userId): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            SELECT 
                YEAR(t.date) as year,
                SUM(CASE WHEN t.amount > 0 THEN t.amount ELSE 0 END) as total_income,
                SUM(CASE WHEN t.amount < 0 THEN ABS(t.amount) ELSE 0 END) as total_expenses,
                (SUM(CASE WHEN t.amount > 0 THEN t.amount ELSE 0 END) - 
                 SUM(CASE WHEN t.amount < 0 THEN ABS(t.amount) ELSE 0 END)) as net_income
            FROM transactions t
            WHERE t.user_id = :userId
            GROUP BY YEAR(t.date)
            ORDER BY year DESC
        ';

        $stmt = $conn->prepare($sql);
        $result = $stmt->executeQuery(['userId' => $userId]);

        return $result->fetchAllAssociative();
    }

    public function getRecentTransactions(int $userId, int $limit = 10): array
    {
        return $this->createQueryBuilder('t')
            ->select('t.id', 't.amount', 't.date', 't.description', 'c.name as category')
            ->leftJoin('t.category', 'c')
            ->where('t.user = :userId')
            ->setParameter('userId', $userId)
            ->orderBy('t.date', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function getTotalBalance(int $userId): float
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            SELECT COALESCE(SUM(amount), 0) as balance
            FROM transactions 
            WHERE user_id = :userId
        ';

        $stmt = $conn->prepare($sql);
        $result = $stmt->executeQuery(['userId' => $userId]);
        $data = $result->fetchAssociative();

        return (float) $data['balance'];
    }

    public function getMonthlyBalance(int $userId, int $year, int $month): float
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            SELECT COALESCE(SUM(amount), 0) as balance
            FROM transactions 
            WHERE user_id = :userId 
            AND YEAR(date) = :year 
            AND MONTH(date) = :month
        ';

        $stmt = $conn->prepare($sql);
        $result = $stmt->executeQuery([
            'userId' => $userId,
            'year' => $year,
            'month' => $month
        ]);
        $data = $result->fetchAssociative();

        return (float) $data['balance'];
    }

    public function getTopExpenseCategories(int $userId, string $period = 'month', int $limit = 5): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $dateCondition = $this->getDateCondition($period);

        $sql = "
            SELECT 
                c.name as category,
                SUM(ABS(t.amount)) as total_amount,
                COUNT(t.id) as transaction_count
            FROM transactions t
            INNER JOIN category c ON t.category_id = c.id
            WHERE t.user_id = :userId 
                AND t.amount < 0
                {$dateCondition}
            GROUP BY c.id, c.name
            ORDER BY total_amount DESC
            LIMIT :limit
        ";

        $stmt = $conn->prepare($sql);
        $params = [
            'userId' => $userId,
            'limit' => $limit
        ];

        if ($period !== 'all') {
            $params['startDate'] = $this->getStartDate($period);
        }

        $result = $stmt->executeQuery($params);
        return $result->fetchAllAssociative();
    }

    public function getTopIncomeCategories(int $userId, string $period = 'month', int $limit = 5): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $dateCondition = $this->getDateCondition($period);

        $sql = "
            SELECT 
                c.name as category,
                SUM(t.amount) as total_amount,
                COUNT(t.id) as transaction_count
            FROM transactions t
            INNER JOIN category c ON t.category_id = c.id
            WHERE t.user_id = :userId 
                AND t.amount > 0
                {$dateCondition}
            GROUP BY c.id, c.name
            ORDER BY total_amount DESC
            LIMIT :limit
        ";

        $stmt = $conn->prepare($sql);
        $params = [
            'userId' => $userId,
            'limit' => $limit
        ];

        if ($period !== 'all') {
            $params['startDate'] = $this->getStartDate($period);
        }

        $result = $stmt->executeQuery($params);
        return $result->fetchAllAssociative();
    }

    public function getFinancialStats(int $userId, string $period = 'all'): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $dateCondition = $this->getDateCondition($period);

        $sql = "
            SELECT 
                COUNT(t.id) as total_transactions,
                SUM(CASE WHEN t.amount > 0 THEN t.amount ELSE 0 END) as total_income,
                SUM(CASE WHEN t.amount < 0 THEN ABS(t.amount) ELSE 0 END) as total_expenses,
                SUM(t.amount) as net_balance,
                AVG(CASE WHEN t.amount > 0 THEN t.amount ELSE NULL END) as avg_income,
                AVG(CASE WHEN t.amount < 0 THEN ABS(t.amount) ELSE NULL END) as avg_expense
            FROM transactions t
            WHERE t.user_id = :userId {$dateCondition}
        ";

        $stmt = $conn->prepare($sql);
        $params = ['userId' => $userId];

        if ($period !== 'all') {
            $params['startDate'] = $this->getStartDate($period);
        }

        $result = $stmt->executeQuery($params);
        $data = $result->fetchAssociative();

        return [
            'total_transactions' => (int) $data['total_transactions'],
            'total_income' => (float) $data['total_income'],
            'total_expenses' => (float) $data['total_expenses'],
            'net_balance' => (float) $data['net_balance'],
            'avg_income' => (float) $data['avg_income'],
            'avg_expense' => (float) $data['avg_expense']
        ];
    }

    private function getDateCondition(string $period): string
    {
        if ($period === 'all') {
            return '';
        }

        return "AND t.date >= :startDate";
    }

    private function getStartDate(string $period): string
    {
        $now = new \DateTime();

        return match($period) {
            'month' => $now->modify('-1 month')->format('Y-m-d'),
            'quarter' => $now->modify('-3 months')->format('Y-m-d'),
            'year' => $now->modify('-1 year')->format('Y-m-d'),
            default => $now->modify('-1 month')->format('Y-m-d')
        };
    }

    private function fillMissingMonths(array $data): array
    {
        $months = [];
        $currentMonth = (int)date('n');

        // Toon laatste 6 maanden
        for ($i = 5; $i >= 0; $i--) {
            $monthNum = $currentMonth - $i;
            if ($monthNum <= 0) {
                $monthNum += 12;
            }

            $monthName = date('M', mktime(0, 0, 0, $monthNum, 1));

            $months[$monthNum] = [
                'month' => $monthName,
                'month_num' => $monthNum,
                'income' => 0,
                'expenses' => 0,
                'net' => 0
            ];
        }

        // Vul echte data in
        foreach ($data as $row) {
            $monthNum = $row['month_num'];
            if (isset($months[$monthNum])) {
                $months[$monthNum] = array_merge($months[$monthNum], $row);
            }
        }

        // Zorg voor juiste volgorde
        ksort($months);
        return array_values($months);
    }

    public function findByUserAndDateRange(int $userId, \DateTime $startDate, \DateTime $endDate): array
    {
        return $this->createQueryBuilder('t')
            ->select('t', 'c')
            ->leftJoin('t.category', 'c')
            ->where('t.user = :userId')
            ->andWhere('t.date BETWEEN :startDate AND :endDate')
            ->setParameter('userId', $userId)
            ->setParameter('startDate', $startDate)
            ->setParameter('endDate', $endDate)
            ->orderBy('t.date', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findByCategoryAndPeriod(int $userId, int $categoryId, string $period): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $dateCondition = $this->getDateCondition($period);

        $sql = "
            SELECT 
                t.amount,
                t.date,
                t.description
            FROM transactions t
            WHERE t.user_id = :userId 
                AND t.category_id = :categoryId
                {$dateCondition}
            ORDER BY t.date DESC
        ";

        $stmt = $conn->prepare($sql);
        $params = [
            'userId' => $userId,
            'categoryId' => $categoryId
        ];

        if ($period !== 'all') {
            $params['startDate'] = $this->getStartDate($period);
        }

        $result = $stmt->executeQuery($params);
        return $result->fetchAllAssociative();
    }

    //    /**
    //     * @return Transactions[] Returns an array of Transactions objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('t')
    //            ->andWhere('t.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('t.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Transactions
    //    {
    //        return $this->createQueryBuilder('t')
    //            ->andWhere('t.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}