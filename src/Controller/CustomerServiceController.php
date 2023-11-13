<?php

namespace App\Controller;

use App\Entity\Complaint;
use App\Form\ComplaintType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class CustomerServiceController extends AbstractController
{
    // Customer Service -- Main Template
    #[Route('/customer-service', name: 'app_customer_service')]
    public function customerService(): Response
    {
        return $this->render('sqf/customer_service.html.twig');
    }

    /* Complaint Controller */
    // Customer Service -> Complaints
    #[Route('/customer-complaints', name: 'app_customer_complaints')]
    public function customerComplaints(EntityManagerInterface $entityManager): Response
    {
        $complaintRepository = $entityManager->getRepository(Complaint::class);
        $complaints = $complaintRepository->findAll();

        return $this->render('sqf/customer_complaints.html.twig', ['complaints' => $complaints]);
    }
    //Render New Complaint Form
    #[Route('/customer-complaints/new-complaint', name:'app_new_complaint')]
    public function new(): Response
    {
        $complaint = new Complaint();

//        return $this->render('complaint/new.html.twig');

        $form = $this->createForm(ComplaintType::class, $complaint);

        return $this->render('complaint/new.html.twig', [
            'form' => $form,
        ]);
    }






















}