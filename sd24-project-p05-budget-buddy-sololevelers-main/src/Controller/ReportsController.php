<?php
// src/Controller/ReportsController.php

namespace App\Controller;

use App\Repository\TransactionsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class ReportsController extends AbstractController
{
    private $transactionsRepository;
    private $security;

    public function __construct(TransactionsRepository $transactionsRepository, Security $security)
    {
        $this->transactionsRepository = $transactionsRepository;
        $this->security = $security;
    }

    #[Route('/reports', name: 'app_reports')]
    public function index(): Response
    {
        return $this->render('reports/index.html.twig');
    }

    #[Route('/api/reports/chart-data', name: 'api_reports_chart_data')]
    public function getChartData(Request $request): JsonResponse
    {
        $user = $this->security->getUser();
        $period = $request->query->get('period', 'month');

        $data = [
            'incomeExpense' => $this->getIncomeExpenseData($user->getId(), $period),
            'expenseCategories' => $this->getExpenseCategoriesData($user->getId(), $period),
            'incomeCategories' => $this->getIncomeCategoriesData($user->getId(), $period),
            'monthlyTrend' => $this->getMonthlyTrendData($user->getId(), $period)
        ];

        return $this->json($data);
    }

    private function getIncomeExpenseData(int $userId, string $period): array
    {
        return $this->transactionsRepository->getIncomeExpenseData($userId, $period);
    }

    private function getExpenseCategoriesData(int $userId, string $period): array
    {
        return $this->transactionsRepository->getCategoryData($userId, $period, 'expense');
    }

    private function getIncomeCategoriesData(int $userId, string $period): array
    {
        return $this->transactionsRepository->getCategoryData($userId, $period, 'income');
    }

    private function getMonthlyTrendData(int $userId, string $period): array
    {
        return $this->transactionsRepository->getMonthlyTrendData($userId, $period);
    }
}