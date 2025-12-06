<?php
// src/Controller/AdminController.php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Transactions;
use App\Entity\Category;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $users = User::getAllUsersSummary($entityManager);
        $allTransactions = $entityManager->getRepository(Transactions::class)->findAll();
        $categories = $entityManager->getRepository(Category::class)->findAll();

        $categoryStats = [];
        foreach ($categories as $category) {
            $transactions = $category->getTransactions();
            $totalAmount = 0;
            $transactionCount = $transactions->count();

            foreach ($transactions as $transaction) {
                $totalAmount += abs((float) $transaction->getAmount());
            }

            $categoryStats[] = [
                'category' => $category,
                'transactionCount' => $transactionCount,
                'totalAmount' => $totalAmount
            ];
        }

        $platformStats = [
            'totalUsers' => count($users),
            'totalTransactions' => count($allTransactions),
            'totalIncome' => array_sum(array_column($users, 'totalIncome')),
            'totalExpenses' => array_sum(array_column($users, 'totalExpenses')),
            'adminUsers' => count(array_filter($users, function($user) {
                return $user['isAdmin'];
            })),
            'totalCategories' => count($categories)
        ];

        return $this->render('admin/index.html.twig', [
            'users' => $users,
            'platformStats' => $platformStats,
            'categories' => $categories,
            'categoryStats' => $categoryStats,
            'allTransactions' => $allTransactions
        ]);
    }

    #[Route('/admin/user/{id}/toggle-admin', name: 'app_admin_toggle_admin', methods: ['POST'])]
    public function toggleAdmin(User $user, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $user->setAdmin(!$user->isAdmin());
        $entityManager->flush();

        $this->addFlash('success', sprintf(
            'Gebruiker %s is nu %s',
            $user->getFullName(),
            $user->isAdmin() ? 'admin' : 'geen admin'
        ));

        return $this->redirectToRoute('app_admin');
    }

    #[Route('/admin/user/new', name: 'app_admin_user_new', methods: ['POST'])]
    public function newUser(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $user = new User();
        $user->setEmail($request->request->get('email'));
        $user->setFullName($request->request->get('fullName'));

        $hashedPassword = $passwordHasher->hashPassword(
            $user,
            $request->request->get('password')
        );
        $user->setPassword($hashedPassword);

        if ($request->request->get('isAdmin')) {
            $user->setAdmin(true);
        }

        $entityManager->persist($user);
        $entityManager->flush();

        $this->addFlash('success', 'Gebruiker succesvol aangemaakt!');
        return $this->redirectToRoute('app_admin');
    }

    #[Route('/admin/user/{id}/edit', name: 'app_admin_user_edit', methods: ['POST'])]
    public function editUser(User $user, Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $user->setEmail($request->request->get('email'));
        $user->setFullName($request->request->get('fullName'));

        if ($request->request->get('password')) {
            $hashedPassword = $passwordHasher->hashPassword(
                $user,
                $request->request->get('password')
            );
            $user->setPassword($hashedPassword);
        }

        $user->setAdmin((bool)$request->request->get('isAdmin'));

        $entityManager->flush();

        $this->addFlash('success', 'Gebruiker succesvol bijgewerkt!');
        return $this->redirectToRoute('app_admin');
    }

    #[Route('/admin/user/{id}/delete', name: 'app_admin_user_delete', methods: ['POST'])]
    public function deleteUser(User $user, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        if ($user->getId() === $this->getUser()->getId()) {
            $this->addFlash('error', 'Je kunt je eigen account niet verwijderen!');
            return $this->redirectToRoute('app_admin');
        }

        $entityManager->remove($user);
        $entityManager->flush();

        $this->addFlash('success', 'Gebruiker succesvol verwijderd!');
        return $this->redirectToRoute('app_admin');
    }

    #[Route('/admin/category/new', name: 'app_admin_category_new', methods: ['POST'])]
    public function newCategory(Request $request, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $category = new Category();
        $category->setName($request->request->get('name'));

        $entityManager->persist($category);
        $entityManager->flush();

        $this->addFlash('success', 'Categorie succesvol aangemaakt!');
        return $this->redirectToRoute('app_admin');
    }

    #[Route('/admin/category/{id}/edit', name: 'app_admin_category_edit', methods: ['POST'])]
    public function editCategory(Category $category, Request $request, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $category->setName($request->request->get('name'));
        $entityManager->flush();

        $this->addFlash('success', 'Categorie succesvol bijgewerkt!');
        return $this->redirectToRoute('app_admin');
    }

    #[Route('/admin/category/{id}/delete', name: 'app_admin_category_delete', methods: ['POST'])]
    public function deleteCategory(Category $category, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        if ($category->getTransactions()->count() > 0) {
            $this->addFlash('error', 'Kan categorie niet verwijderen omdat er nog transacties aan gekoppeld zijn!');
            return $this->redirectToRoute('app_admin');
        }

        $entityManager->remove($category);
        $entityManager->flush();

        $this->addFlash('success', 'Categorie succesvol verwijderd!');
        return $this->redirectToRoute('app_admin');
    }

    #[Route('/admin/transactions', name: 'app_admin_transactions')]
    public function transactions(EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $transactions = $entityManager->getRepository(Transactions::class)
            ->createQueryBuilder('t')
            ->leftJoin('t.user', 'u')
            ->leftJoin('t.category', 'c')
            ->orderBy('t.date', 'DESC')
            ->getQuery()
            ->getResult();

        return $this->render('admin/transactions.html.twig', [
            'transactions' => $transactions
        ]);
    }

    #[Route('/admin/transaction/{id}/delete', name: 'app_admin_transaction_delete', methods: ['POST'])]
    public function deleteTransaction(Transactions $transaction, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $entityManager->remove($transaction);
        $entityManager->flush();

        $this->addFlash('success', 'Transactie succesvol verwijderd!');
        return $this->redirectToRoute('app_admin_transactions');
    }
}