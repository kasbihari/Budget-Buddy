<?php
// src/Entity/Category.php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     * @var Collection<int, Transactions>
     */
    #[ORM\OneToMany(mappedBy: 'category', targetEntity: Transactions::class)]
    private Collection $transactions;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    public function __construct()
    {
        $this->transactions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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
            $transaction->setCategory($this);
        }

        return $this;
    }

    public function removeTransaction(Transactions $transaction): static
    {
        if ($this->transactions->removeElement($transaction)) {
            if ($transaction->getCategory() === $this) {
                $transaction->setCategory(null);
            }
        }

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    // Helper methods
    public function isIncomeCategory(): bool
    {
        $incomeCategories = ['Salaris', 'Zorgtoeslag', 'Kleedgeld', 'Zakgeld', 'Huurtoeslag', 'studiefinanciering'];
        return in_array($this->name, $incomeCategories);
    }

    public function isExpenseCategory(): bool
    {
        return !$this->isIncomeCategory();
    }

    public function getTotalAmount(): float
    {
        $total = 0;
        foreach ($this->transactions as $transaction) {
            $total += (float) $transaction->getAmount();
        }
        return $total;
    }

    public function getTransactionCount(): int
    {
        return $this->transactions->count();
    }

    public function __toString(): string
    {
        return $this->name ?? '';
    }
}