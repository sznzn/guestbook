<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
/////Ajoute quelques choses pour twig



class ConferenceController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {
        return new Response(<<<EOF
            <html>
                <body>
                    <img src="/images/under-construction.gif" alt="under-construction">
                </body>
            </html>

        EOF
    );
    }
}
