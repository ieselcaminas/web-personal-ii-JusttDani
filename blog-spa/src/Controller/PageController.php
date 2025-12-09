<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PageController extends AbstractController
{
    #[Route('/inicio', name: 'inicio')]
    public function index(): Response
    {
        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
        #[Route('/about', name: 'acerca')]
    public function about(): Response
    {
        return $this->render('page/about.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
        #[Route('/appointment', name: 'cita')]
    public function appointment(): Response
    {
        return $this->render('page/appointment.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
        #[Route('/contact', name: 'contacto')]
    public function contact(): Response
    {
        return $this->render('page/contact.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
        #[Route('/opening', name: 'apertura')]
    public function opening(): Response
    {
        return $this->render('page/opening.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
        #[Route('/price', name: 'precio')]
    public function price(): Response
    {
        return $this->render('page/price.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
        #[Route('/service', name: 'servicio')]
    public function service(): Response
    {
        return $this->render('page/service.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
        #[Route('/team', name: 'equipo')]
    public function team(): Response
    {
        return $this->render('page/team.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
        #[Route('/testimonio', name: 'testimonio')]
    public function testimonio(): Response
    {
        return $this->render('page/testimonio.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
}
