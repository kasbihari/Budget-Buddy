<?php
// src/Entity/Transactions.php

namespace App\Entity;

use App\Repository\TransactionsRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: TransactionsRepository::class)]
class Transactions
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: 'decimal', precision: 6, scale: 2)]
    private ?string $amount = null;

    #[ORM\ManyToOne(targetEntity: Category::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?Category $category = null;

    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    public function __construct()
    {
        $this->date = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function setAmount(string $amount): static
    {
        $this->amount = $amount;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): static
    {
        $this->category = $category;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    // ==================== HELPER METHODS ====================

    /**
     * Check if transaction is income
     */
    public function isIncome(): bool
    {
        return (float) $this->amount >= 0;
    }

    /**
     * Check if transaction is expense
     */
    public function isExpense(): bool
    {
        return (float) $this->amount < 0;
    }

    /**
     * Get absolute amount (always positive)
     */
    public function getAbsoluteAmount(): float
    {
        return abs((float) $this->amount);
    }

    /**
     * Get formatted amount with + or - sign
     */
    public function getDisplayAmount(): string
    {
        $amount = (float) $this->amount;
        if ($this->isIncome()) {
            return '+€' . number_format($amount, 2, ',', '.');
        } else {
            return '-€' . number_format(abs($amount), 2, ',', '.');
        }
    }

    /**
     * Get formatted amount (alias for getDisplayAmount)
     */
    public function getFormattedAmount(): string
    {
        return $this->getDisplayAmount();
    }

    /**
     * Get formatted date
     */
    public function getFormattedDate(): string
    {
        return $this->date ? $this->date->format('d-m-Y') : 'Onbekend';
    }

    /**
     * Get category type based on category name
     */
    public function getCategoryType(): string
    {
        $incomeCategories = ['Salaris', 'Zorgtoeslag', 'Kleedgeld', 'Zakgeld', 'Huurtoeslag', 'studiefinanciering'];
        $expenseCategories = ['Telefoon abonnement'];

        $categoryName = $this->category?->getName();

        if (in_array($categoryName, $incomeCategories)) {
            return 'income';
        }

        if (in_array($categoryName, $expenseCategories)) {
            return 'expense';
        }

        return $this->isIncome() ? 'income' : 'expense';
    }

    /**
     * String representation
     */
    public function __toString(): string
    {
        return $this->getFormattedAmount() . ' - ' . ($this->category ? $this->category->getName() : 'Onbekend');
    }
}