<?php

namespace App\Controller;

use App\Entity\Complaint;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class CustomerServiceController extends AbstractController
{
    #[Route('/customer-service', name: 'app_customer_service')]
    public function customerService(): Response{
        return $this->render('sqf/customer_service.html.twig');
    }
    // Customer Service -> Customer Complaints
    #[Route('/customer-complaints', name: 'app_customer_complaints')]
    public function customerComplaints(EntityManagerInterface $entityManager): Response
    {
        $complaintRepository = $entityManager->getRepository(Complaint::class);
        $complaints = $complaintRepository->findAll();

//        dd($complaints);
        return $this->render('sqf/customer_complaints.html.twig', ['complaints' => $complaints]);
    }
}