<?php

namespace App\Controller\Admin;

use App\Entity\Article;
use App\Entity\Media;
use App\Entity\Page;
use App\Entity\Miniature;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        // return parent::index();
        return $this->render('admin/dashboard/index.html.twig');
        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('CFP Sainte Barbe');
    }

    public function configureMenuItems(): iterable
    {
        return [
            MenuItem::linkToDashboard('Dashboard', 'fa fa-home'),
            
            MenuItem::section('Articles'),
            MenuItem::subMenu('Articles', 'fas fa-newspaper')->setSubItems([
                MenuItem::linkToCrud('Tous les articles', 'fas fa-list', Article::class),
                MenuItem::linkToCrud('Ajout article', 'fas fa-plus', Article::class)->setAction(Crud::PAGE_NEW),
            ]),
            MenuItem::subMenu('Médias', 'fas fa-image')->setSubItems([
                MenuItem::linkToCrud('Tous les médias', 'fas fa-list', Media::class),
                MenuItem::linkToCrud('Ajout média', 'fas fa-plus', Media::class)->setAction(Crud::PAGE_NEW),
            ]),

            MenuItem::section('Pages'),
            MenuItem::subMenu('Pages', 'fas fa-pen-nib')->setSubItems([
                MenuItem::linkToCrud('Toutes les pages', 'fas fa-list', Page::class),
                MenuItem::linkToCrud('Ajout page', 'fas fa-plus', Page::class)->setAction(Crud::PAGE_NEW),
            ]),
            MenuItem::subMenu('Miniatures', 'fas fa-image')->setSubItems([
                MenuItem::linkToCrud('Toutes les miniatures', 'fas fa-list', Miniature::class),
                MenuItem::linkToCrud('Ajouter', 'fas fa-plus', Miniature::class)->setAction(Crud::PAGE_NEW),
            ]),

            MenuItem::section('Users'),
            MenuItem::linkToCrud('Users', 'fas fa-user', User::class),
        ];
    }
}
