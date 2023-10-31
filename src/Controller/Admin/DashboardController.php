<?php

namespace App\Controller\Admin;

use App\Entity\Complaint;
use App\Entity\InboundFreight;
use App\Entity\ShippingLog;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
//        return parent::index();

        $routeBuilder = $this->container->get(AdminUrlGenerator::class);
        $url = $routeBuilder->setController(ComplaintCrudController::class)->generateUrl();

        return $this->redirect($url);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('SQF');
    }

    public function configureMenuItems(): iterable
    {
        //yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Complaints', 'fas fa-message', Complaint::class);
        yield MenuItem::linkToCrud('Shipping Logs', 'fas fa-ship', ShippingLog::class);
        yield MenuItem::linkToCrud('Inbound Freight', 'fas fa-truck', InboundFreight::class);
        yield MenuItem::linkToRoute('Back to Website', 'fas fa-home', 'app_shipping');
    }
}
