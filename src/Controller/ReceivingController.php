<?php

namespace App\Controller;

use App\Entity\InboundFreight;
use App\Entity\ReceivingTempLog;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ReceivingController extends AbstractController
{

    #[Route('/receiving', name: 'app_receiving')]
    public function receiving(): Response
    {
        return $this->render('sqf/receiving.html.twig');
    }
    // Receiving -> Inbound Visitor Log
    #[Route('/freight-log/inbound', name: 'app_inbound_freight_log')]
    public function inboundVisitorLog(EntityManagerInterface $entityManager): Response
    {
        $inboundFreightRepository = $entityManager->getRepository(InboundFreight::class);
        $inboundFreights = $inboundFreightRepository->findBy(array(),array('_id' => 'DESC'),15);

        return $this->render('sqf/freight_log_inbound.html.twig',['inboundfreights' => $inboundFreights]);
    }
   // Receiving -> Inbound Trailer Temp Log
    #[Route('/temperature-log/inbound', name: 'app_inbound_trailer_temp_log')]
    public function inboundTrailerTempLog(EntityManagerInterface $entityManager): Response
    {
        $receivingTempRepository = $entityManager->getRepository(ReceivingTempLog::class);
        $receivingTemps = $receivingTempRepository->findBy(array(), array('_id' => 'DESC'), 25);


        return $this->render('sqf/temperature_log_inbound.html.twig', ['receivingtemps' => $receivingTemps]);
    }
}