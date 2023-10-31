<?php

namespace App\Controller;

use App\Entity\ShippingLog;
use App\Entity\TrailerTempLog;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShippingController extends AbstractController
{
    //Routes to Main Shipping Page
    #[Route('/shipping', name: 'app_shipping')]
    public function shipping(): Response{
        return $this->render('sqf/shipping.html.twig');
    }
    // Shipping -> Shipping Log
    #[Route('/shipping/freight-log/outbound', name: 'app_shipping_log')]
    public function shippingLog(EntityManagerInterface $entityManager): Response
    {
        $shippingLogRepository = $entityManager->getRepository(ShippingLog::class);
        $shippinglogs = $shippingLogRepository->findAllOrderById();

        return $this->render('sqf/shipping_log.html.twig',['shippinglogs' => $shippinglogs]);
    }

    // Shipping -> Outbound Trailer Temp Log
    #[Route('/shipping/temperature-log/outbound', name:  'app_outbound_trailer_temp_log')]
    public function outboundTrailerTempLog(EntityManagerInterface $entityManager): Response
    {
        $trailerTempLogRepository = $entityManager->getRepository(TrailerTempLog::class);
        $trailerTempLogs = $trailerTempLogRepository->findBy(array(),array('_id' => 'DESC'),25);

        return $this->render('sqf/temperature_log_outbound.html.twig',['trailertemplogs' => $trailerTempLogs]);
    }
}
