<?php
// src/Controller/DashboardController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard')]
    public function index(): Response
    {
        $user = $this->getUser();

        $financialData = [
            'totalIncome' => $user->getTotalIncome(),
            'totalExpenses' => $user->getTotalExpenses(),
            'netBalance' => $user->getNetBalance(),
            'expenseRatio' => $user->getExpenseRatio(),
            'savingsRate' => $user->getSavingsRate(),
            'transactionCount' => $user->getTransactionCount(),
            'averageTransaction' => $user->getAverageTransaction(),
            'categoryBreakdown' => $user->getCategoryBreakdown()
        ];

        return $this->render('dashboard/index.html.twig', [
            'financialData' => $financialData,
        ]);
    }
}