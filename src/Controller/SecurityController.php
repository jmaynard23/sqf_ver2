<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Config\Doctrine\Dbal\ConnectionConfig\ReplicaConfig;

class SecurityController extends AbstractController
{
    /************
     **Security**
     ************/

    #[Route('/security', name: 'app_security')]
    public function security(): Response{
        return $this->render('sqf/security.html.twig');
    }
    // Security -> Freezer Cooler Temp
    #[Route('/temperature-log/freezer-cooler', name: 'app_temperature_log_freezer_cooler')]
    public function freezerCoolerTemp(): Response
    {
        return $this->render('sqf/temperature_log_freezer_cooler.html.twig');
    }
    // Security -> Security Walk
    #[Route('/security/security-walk', name: 'app_security_walk')]
    public function securityWalk(): Response
    {
        return $this->render('sqf/security_walk.html.twig');
    }


    //Security -> Security Walk -> Edit Security Walk Checkpoints
    #[Route('/security/security-walk/checkpoints', name: 'app_security_checkpoints')]
    public function securityWalkCheckpoints(): Response
    {
        return $this->render('sqf/security_walk_checkpoint.html.twig');
    }

    #[Route('//security/security-walk/checkpoints/new-checkpoint')]
    public function newCheckpoint(Request $request): Response
    {
    }


    // Security -> Pest Control Walk
    #[Route('/security/pest-walk', name: 'app_pest_control_walk')]
    public function pestControlWalk(): Response
    {
        return $this->render('sqf/pest_control_walk.html.twig');
    }

    // Security -> Security Seal Log
    #[Route('/security/seal-log', name: 'app_security_seal_log')]
    public function securitySealLog(): Response
    {
        $routes = $this->routeRepository->getRoutes();

        return $this->render('sqf/security_seal_log.html.twig', ['routes' => $routes]);
    }


    #[Route('/temperature-log/freezer-cooler/report', name: 'app_report_freezer_cooler')]
    public function freezerCoolerReport() : Response
    {
        $coolers = $this->routeRepository->getCoolers();

        return $this->render('sqf/report_freezer_cooler.html.twig', ['coolers' => $coolers]);
    }
}