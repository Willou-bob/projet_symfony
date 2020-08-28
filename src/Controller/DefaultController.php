<?php
// src/Controller/DefaultController
namespace App\Controller;

use App\Entity\Actor;
use App\Repository\ActorRepository;
use App\Repository\CategoryRepository;
use App\Repository\ProgramRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="app_index")
     * @param ProgramRepository $programRepository
     * @param CategoryRepository $categoryRepository
     * @param ActorRepository $actorRepository
     * @return Response
     */

    public function index (ProgramRepository $programRepository, CategoryRepository $categoryRepository, ActorRepository $actorRepository) :Response
    {
        $programs = $programRepository->findBy([], ['id' => 'DESC'], 5);
        $categories = $categoryRepository->findBy([], ['id' => 'DESC'], 5);
        $actors = $actorRepository->findAll();
        $program = $programRepository->findAll();

        return $this->render('home.html.twig', [
            'websitehome' => 'Welcome',
            'programs' => $programs,
            'program' => $program,
            'categories'=> $categories,
            'actors' => $actors
        ]);
    }
}