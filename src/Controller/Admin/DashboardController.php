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
        return $this->render('admin/dashboard/index.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('<img src="images/apprentis-auteuil-logo.jpg" decoding="async" width="75">CFP Sainte Barbe');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');

        yield MenuItem::linkToRoute('Retour sur le site', 'fa fa-undo', 'app_home');

        yield MenuItem::linkToLogout('Déconnexion', 'fas fa-right-from-bracket');
            
        if($this->isGranted('ROLE_AUTHOR')) {
            yield MenuItem::section('Articles');
            yield MenuItem::subMenu('Articles', 'fas fa-newspaper')->setSubItems([
                MenuItem::linkToCrud('Tous les articles', 'fas fa-list', Article::class),
                MenuItem::linkToCrud('Ajout article', 'fas fa-plus', Article::class)->setAction(Crud::PAGE_NEW),
                ]);
            yield MenuItem::subMenu('Médias', 'fas fa-image')->setSubItems([
                MenuItem::linkToCrud('Tous les médias', 'fas fa-list', Media::class),
                MenuItem::linkToCrud('Ajout média', 'fas fa-plus', Media::class)->setAction(Crud::PAGE_NEW),
            ]);
        }
        
        if ($this->isGranted('ROLE_ADMIN')) {
            yield MenuItem::section('Pages');
            yield MenuItem::subMenu('Pages', 'fas fa-pen-nib')->setSubItems([
                MenuItem::linkToCrud('Toutes les pages', 'fas fa-list', Page::class),
                MenuItem::linkToCrud('Ajout page', 'fas fa-plus', Page::class)->setAction(Crud::PAGE_NEW),
            ]);
            yield MenuItem::subMenu('Miniatures', 'fas fa-image')->setSubItems([
                MenuItem::linkToCrud('Toutes les miniatures', 'fas fa-list', Miniature::class),
                MenuItem::linkToCrud('Ajouter', 'fas fa-plus', Miniature::class)->setAction(Crud::PAGE_NEW),
            ]);
        }

        if ($this->isGranted('ROLE_ADMIN')) {
            yield MenuItem::section('Users');
            yield MenuItem::subMenu('Users', 'fas fa-user')->setSubItems([
                MenuItem::linkToCrud('Tous les users', 'fas fa-list', User::class),
                MenuItem::linkToCrud('Ajouter', 'fas fa-plus', User::class)->setAction(Crud::PAGE_NEW),
            ]);
        };
    }
}
