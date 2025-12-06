<?php
// src/Entity/User.php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\UniqueConstraint(name: 'UNIQ_IDENTIFIER_EMAIL', fields: ['email'])]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180)]
    private ?string $email = null;

    /**
     * @var list<string> The user roles
     */
    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    private ?string $fullName = null;

    /**
     * @var Collection<int, Transactions>
     */
    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Transactions::class)]
    private Collection $transactions;

    public function __construct()
    {
        $this->transactions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    /**
     * @param list<string> $roles
     */
    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    #[\Deprecated]
    public function eraseCredentials(): void
    {
        // @deprecated, to be removed when upgrading to Symfony 8
    }

    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    public function setFullName(string $fullName): static
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * @return Collection<int, Transactions>
     */
    public function getTransactions(): Collection
    {
        return $this->transactions;
    }

    public function addTransaction(Transactions $transaction): static
    {
        if (!$this->transactions->contains($transaction)) {
            $this->transactions->add($transaction);
            $transaction->setUser($this);
        }

        return $this;
    }

    public function removeTransaction(Transactions $transaction): static
    {
        if ($this->transactions->removeElement($transaction)) {
            // set the owning side to null (unless already changed)
            if ($transaction->getUser() === $this) {
                $transaction->setUser(null);
            }
        }

        return $this;
    }

    // ==================== HELPER METHODS ====================

    /**
     * Get total income (alle positieve bedragen)
     */
    public function getTotalIncome(): float
    {
        $total = 0;
        foreach ($this->transactions as $transaction) {
            $amount = (float) $transaction->getAmount();
            if ($amount > 0) {
                $total += $amount;
            }
        }
        return $total;
    }

    /**
     * Get total expenses (alle negatieve bedragen als positief geteld)
     */
    public function getTotalExpenses(): float
    {
        $total = 0;
        foreach ($this->transactions as $transaction) {
            $amount = (float) $transaction->getAmount();
            if ($amount < 0) {
                $total += abs($amount);
            }
        }
        return $total;
    }

    /**
     * Get net balance (income - expenses)
     */
    public function getNetBalance(): float
    {
        $total = 0;
        foreach ($this->transactions as $transaction) {
            $total += (float) $transaction->getAmount();
        }
        return $total;
    }

    /**
     * Get total number of transactions
     */
    public function getTransactionCount(): int
    {
        return $this->transactions->count();
    }

    /**
     * Get savings rate percentage
     */
    public function getSavingsRate(): float
    {
        $income = $this->getTotalIncome();
        if ($income === 0.0) {
            return 0.0;
        }
        return (($income - $this->getTotalExpenses()) / $income) * 100;
    }

    /**
     * Get expense ratio percentage
     */
    public function getExpenseRatio(): float
    {
        $income = $this->getTotalIncome();
        if ($income === 0.0) {
            return 0.0;
        }
        return ($this->getTotalExpenses() / $income) * 100;
    }

    /**
     * Get average transaction amount
     */
    public function getAverageTransaction(): float
    {
        $count = $this->getTransactionCount();
        if ($count === 0) {
            return 0.0;
        }
        return ($this->getTotalIncome() + $this->getTotalExpenses()) / $count;
    }

    /**
     * Get transactions sorted by date (newest first)
     */
    public function getTransactionsSortedByDate(): array
    {
        $transactions = $this->transactions->toArray();
        usort($transactions, function($a, $b) {
            return $b->getDate() <=> $a->getDate();
        });
        return $transactions;
    }

    /**
     * Get recent transactions (last 10)
     */
    public function getRecentTransactions(int $limit = 10): array
    {
        $transactions = $this->getTransactionsSortedByDate();
        return array_slice($transactions, 0, $limit);
    }

    /**
     * Get transactions by type
     */
    public function getTransactionsByType(string $type): array
    {
        return array_filter($this->transactions->toArray(), function($transaction) use ($type) {
            if ($type === 'income') {
                return $transaction->isIncome();
            } else {
                return $transaction->isExpense();
            }
        });
    }

    /**
     * Get transactions by category
     */
    public function getTransactionsByCategory(Category $category): array
    {
        return array_filter($this->transactions->toArray(), function($transaction) use ($category) {
            return $transaction->getCategory() === $category;
        });
    }

    /**
     * Get category breakdown for dashboard
     */
    public function getCategoryBreakdown(): array
    {
        $breakdown = [];
        foreach ($this->transactions as $transaction) {
            $categoryName = $transaction->getCategory()->getName();
            $amount = (float) $transaction->getAmount();
            $isIncome = $amount >= 0;

            if (!isset($breakdown[$categoryName])) {
                $breakdown[$categoryName] = [
                    'total' => 0,
                    'count' => 0,
                    'type' => $isIncome ? 'income' : 'expense'
                ];
            }

            $breakdown[$categoryName]['total'] += abs($amount);
            $breakdown[$categoryName]['count']++;
        }

        return $breakdown;
    }

    /**
     * Get monthly summary
     */
    public function getMonthlySummary(): array
    {
        $summary = [];
        foreach ($this->transactions as $transaction) {
            $month = $transaction->getDate()->format('Y-m');

            if (!isset($summary[$month])) {
                $summary[$month] = [
                    'income' => 0,
                    'expenses' => 0,
                    'transactions' => 0
                ];
            }

            if ($transaction->isIncome()) {
                $summary[$month]['income'] += (float) $transaction->getAmount();
            } else {
                $summary[$month]['expenses'] += abs((float) $transaction->getAmount());
            }

            $summary[$month]['transactions']++;
        }

        // Sort by month descending
        krsort($summary);

        return $summary;
    }

    // ==================== FINANCIAL FEEDBACK METHODS ====================

    /**
     * Get financial health status with more detailed analysis
     */
    public function getFinancialHealth(): string
    {
        $savingsRate = $this->getSavingsRate();
        $expenseRatio = $this->getExpenseRatio();
        $netBalance = $this->getNetBalance();
        $transactionCount = $this->getTransactionCount();

        // HOOGSTE PRIORITEIT: Negatief saldo (onmiddellijke waarschuwing)
        if ($netBalance < 0 && $transactionCount > 0) {
            return 'negative_balance';
        }

        // Check for new users with few transactions
        if ($transactionCount < 5) {
            return 'new_user';
        }

        // Check for consistent income pattern
        if ($this->hasConsistentIncome()) {
            if ($savingsRate >= 25) {
                return 'excellent_saver';
            } elseif ($savingsRate >= 15) {
                return 'good_saver';
            } elseif ($savingsRate >= 5) {
                return 'stable';
            }
        }

        // Check for expense issues
        if ($expenseRatio >= 95) {
            return 'high_spending';
        } elseif ($expenseRatio >= 85) {
            return 'moderate_spending';
        }

        // Check for income consistency
        if (!$this->hasRecentIncome()) {
            return 'low_income';
        }

        return 'stable';
    }

    /**
     * Check if user has consistent income pattern
     */
    public function hasConsistentIncome(): bool
    {
        $incomeTransactions = $this->getTransactionsByType('income');
        $incomeCount = count($incomeTransactions);

        if ($incomeCount < 3) {
            return false;
        }

        // Check if there's regular income in the last 60 days
        $recentIncome = array_filter($incomeTransactions, function($transaction) {
            return $transaction->getDate() >= new \DateTime('-60 days');
        });

        return count($recentIncome) >= 2;
    }

    /**
     * Check if user has recent income (last 30 days)
     */
    public function hasRecentIncome(): bool
    {
        $incomeTransactions = $this->getTransactionsByType('income');
        $recentIncome = array_filter($incomeTransactions, function($transaction) {
            return $transaction->getDate() >= new \DateTime('-30 days');
        });

        return count($recentIncome) > 0;
    }

    /**
     * Get monthly spending trend
     */
    public function getSpendingTrend(): string
    {
        $monthlySummary = $this->getMonthlySummary();
        if (count($monthlySummary) < 2) {
            return 'stable';
        }

        $months = array_keys($monthlySummary);
        $currentMonth = $months[0];
        $previousMonth = $months[1];

        $currentExpenses = $monthlySummary[$currentMonth]['expenses'] ?? 0;
        $previousExpenses = $monthlySummary[$previousMonth]['expenses'] ?? 0;

        if ($currentExpenses == 0 || $previousExpenses == 0) {
            return 'stable';
        }

        $change = (($currentExpenses - $previousExpenses) / $previousExpenses) * 100;

        if ($change > 20) {
            return 'increasing';
        } elseif ($change < -20) {
            return 'decreasing';
        } else {
            return 'stable';
        }
    }

    /**
     * Get personalized financial message
     */
    public function getFinancialMessage(): string
    {
        $health = $this->getFinancialHealth();
        $savingsRate = $this->getSavingsRate();
        $netBalance = $this->getNetBalance();
        $spendingTrend = $this->getSpendingTrend();

        $messages = [
            'new_user' => [
                "Welkom! Begin met het toevoegen van je transacties om persoonlijk advies te krijgen. 💰",
                "Leuk dat je er bent! Voeg je eerste inkomsten en uitgaven toe voor inzicht. 📊",
                "Start je financiële reis! Track je uitgaven om slimme gewoonten te ontwikkelen. 🚀"
            ],
            'excellent_saver' => [
                "Wauw! Je spaart meer dan 25% van je inkomen - fantastisch werk! 🌟",
                "Je bent een spaarkampioen! Met dit tempo bouw je een mooie buffer op. 💪",
                "Uitstekend! Je financiële discipline is bewonderenswaardig. 🏆"
            ],
            'good_saver' => [
                "Goed bezig! Je spaart tussen 15-25% - een gezond percentage! 👍",
                "Je houdt goed overzicht over je uitgaven. Ga zo door! 📈",
                "Sterke financiële gewoonten! Je bent op de goede weg. 💰"
            ],
            'stable' => [
                "Je financiën zien er stabiel uit. Blijf je transacties bijhouden! ✅",
                "Goed balans tussen inkomsten en uitgaven. Consistentie is key! ⚖️",
                "Je houdt je uitgaven onder controle. Dat is een solide basis! 🏗️"
            ],
            'moderate_spending' => [
                "Let op: je geeft 85-95% van je inkomen uit. Kun je ergens op besparen? 🤔",
                "Tip: probeer wat meer te sparen voor onverwachte uitgaven. 💡",
                "Je komt rond, maar wat meer sparen zou je financiën versterken. 🔍"
            ],
            'high_spending' => [
                "Waarschuwing: je geeft bijna al je inkomen uit. Tijd om uitgaven te herzien! ⚠️",
                "Je zit krap bij kas. Bekijk waar je kunt besparen. 📉",
                "Dringend advies: creëer een spaarbuffer voor financiële zekerheid. 🚨"
            ],
            'negative_balance' => [
                "Je saldo is negatief. Focus op het aflossen van schulden eerst! 💸",
                "Je geeft meer uit dan je binnenkrijgt. Tijd voor actie! 🛑",
                "Let op rood staan! Probeer deze maand minder uit te geven. 🔴",
                "Waarschuwing: je zit in de schulden. Neem direct maatregelen! ⚠️",
                "Negatief saldo gespot. Tijd om je uitgaven onder de loep te nemen! 📊"
            ],
            'low_income' => [
                "Geen recente inkomsten geregistreerd. Alles goed? 📅",
                "Zijn er inkomsten die je nog moet toevoegen? 📝",
                "Check of alle inkomsten zijn bijgewerkt voor compleet overzicht. 🔄"
            ]
        ];

        // Add trend-based variations
        $trendMessages = [
            'increasing' => [
                "Je uitgaven stijgen deze maand. Even checken waar dat vandaan komt? 📊",
                "Meer uitgaven dan vorige maand. Alles onder controle? 🤨",
                "Stijgende uitgaven gespot. Misschien tijd voor een budget check? 💰"
            ],
            'decreasing' => [
                "Mooi! Je geeft minder uit dan vorige maand. 💪",
                "Je uitgaven dalen - goed bezig met besparen! 📉",
                "Minder uitgegeven deze maand? Dat is positief nieuws! 🎉"
            ]
        ];

        $baseMessages = $messages[$health] ?? ['Je financiën zien er goed uit! ✅'];

        // Combine base message with trend message if applicable
        if ($spendingTrend !== 'stable' && $health !== 'new_user' && $health !== 'negative_balance') {
            $trendMessage = $trendMessages[$spendingTrend][array_rand($trendMessages[$spendingTrend])];
            return $trendMessage;
        }

        return $baseMessages[array_rand($baseMessages)];
    }

    /**
     * Get financial health icon
     */
    public function getFinancialHealthIcon(): string
    {
        $health = $this->getFinancialHealth();

        $icons = [
            'new_user' => '👋',
            'excellent_saver' => '🌟',
            'good_saver' => '💪',
            'stable' => '✅',
            'moderate_spending' => '🤔',
            'high_spending' => '⚠️',
            'negative_balance' => '🔴',
            'low_income' => '📅'
        ];

        return $icons[$health] ?? '💰';
    }

    /**
     * Get financial health color for display
     */
    public function getFinancialHealthColor(): string
    {
        $health = $this->getFinancialHealth();

        $colors = [
            'new_user' => 'info',
            'excellent_saver' => 'success',
            'good_saver' => 'success',
            'stable' => 'primary',
            'moderate_spending' => 'warning',
            'high_spending' => 'danger',
            'negative_balance' => 'danger',
            'low_income' => 'warning'
        ];

        return $colors[$health] ?? 'primary';
    }

    // ==================== ADMIN METHODS ====================

    /**
     * Check if user is admin
     */
    public function isAdmin(): bool
    {
        return in_array('ROLE_ADMIN', $this->getRoles());
    }

    /**
     * Make user an admin
     */
    public function setAdmin(bool $isAdmin): static
    {
        $roles = $this->roles;

        if ($isAdmin && !in_array('ROLE_ADMIN', $roles)) {
            $roles[] = 'ROLE_ADMIN';
        } elseif (!$isAdmin) {
            $roles = array_filter($roles, function($role) {
                return $role !== 'ROLE_ADMIN';
            });
        }

        $this->roles = array_values($roles);
        return $this;
    }

    /**
     * Get all users (for admin only)
     */
    public static function getAllUsersSummary($entityManager): array
    {
        $users = $entityManager->getRepository(User::class)->findAll();
        $summary = [];

        foreach ($users as $user) {
            $summary[] = [
                'id' => $user->getId(),
                'fullName' => $user->getFullName(),
                'email' => $user->getEmail(),
                'transactionCount' => $user->getTransactionCount(),
                'totalIncome' => $user->getTotalIncome(),
                'totalExpenses' => $user->getTotalExpenses(),
                'netBalance' => $user->getNetBalance(),
                'isAdmin' => $user->isAdmin()
            ];
        }

        return $summary;
    }

    /**
     * String representation
     */
    public function __toString(): string
    {
        return $this->fullName . ' (' . $this->email . ')';
    }
}