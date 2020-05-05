<?php
// src/Controller/DefaultController
namespace App\Controller;

use App\Repository\ProgramRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="app_index")
     * @param $programRepository
     * @return Response
     */

    public function index (ProgramRepository $programRepository) :Response
    {
        $programs = $programRepository->findBy([], ['id' => 'DESC'], 5);

        return $this->render('home.html.twig', [
            'websitehome' => 'Welcome',
            'programs' => $programs
        ]);
    }
}