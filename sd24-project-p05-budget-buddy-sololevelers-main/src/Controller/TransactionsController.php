<?php
// src/Controller/TransactionsController.php

namespace App\Controller;

use App\Entity\Transactions;
use App\Entity\Category;
use App\Form\TransactionType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TransactionsController extends AbstractController
{
    #[Route('/transactions', name: 'app_transactions')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();

        return $this->render('transactions/index.html.twig', [
            'transactions' => $user->getTransactions(),
            'categories' => $entityManager->getRepository(Category::class)->findAll(),
            'totalIncome' => $user->getTotalIncome(),
            'totalExpenses' => $user->getTotalExpenses(),
            'netBalance' => $user->getNetBalance(),
        ]);
    }

    #[Route('/transactions/new', name: 'app_transactions_new', methods: ['POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $transaction = new Transactions();
        $transaction->setUser($this->getUser());

        $type = $request->request->get('type');
        $amount = (float)$request->request->get('amount');

        // Zorg dat uitgaven negatief worden opgeslagen
        if ($type === 'expense') {
            $amount = -abs($amount);
        } else {
            $amount = abs($amount);
        }

        $transaction->setAmount((string)$amount);
        $transaction->setDate(new \DateTime($request->request->get('date')));
        $transaction->setDescription($request->request->get('description'));

        $category = $entityManager->getRepository(Category::class)->find($request->request->get('category'));
        $transaction->setCategory($category);

        $entityManager->persist($transaction);
        $entityManager->flush();

        $this->addFlash('success', 'Transactie succesvol toegevoegd!');
        return $this->redirectToRoute('app_transactions');
    }

    #[Route('/transactions/{id}/delete', name: 'app_transactions_delete', methods: ['POST'])]
    public function delete(Transactions $transaction, EntityManagerInterface $entityManager): Response
    {
        // Security check: alleen eigen transacties kunnen worden verwijderd
        if ($transaction->getUser() !== $this->getUser()) {
            throw $this->createAccessDeniedException('Je mag alleen je eigen transacties verwijderen.');
        }

        $entityManager->remove($transaction);
        $entityManager->flush();

        $this->addFlash('success', 'Transactie succesvol verwijderd!');
        return $this->redirectToRoute('app_transactions');

    }

    #[Route('/transactions/{id}/update', name: 'app_transactions_update', methods: ['POST'])]
    public function updateTransactions(EntityManagerInterface $entityManager, int $id, Request $request): Response
    {
        $transaction = $entityManager->getRepository(Transactions::class)->find($id);
        $form = $this->createForm(TransactionType::class, $transaction);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $transaction = $form->getData();
            $entityManager->presist($transaction);
            $entityManager->flush();


            $this->addFlash('success', 'Transactie is bijgewerkt');
            return $this->redirectToRoute('app_transactions');

       }
            return $this->render('transactions/update.html.twig', [
                'updateForm'=> $form,
            ]);
        }
    }



