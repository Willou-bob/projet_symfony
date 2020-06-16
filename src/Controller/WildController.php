<?php
// src/Controller/WildController.php
namespace App\Controller;

use App\Entity\Actor;
use App\Entity\Category;
use App\Entity\Episode;
use App\Entity\Program;
use App\Entity\Season;
use App\Form\CategoryType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WildController extends AbstractController
{
    /**
     * @Route("/wild", name="wild_index")
     * @return Response A response instance
     */
    public function index() :Response
    {
        $programs = $this->getDoctrine()
            ->getRepository(Program::class)
            ->findAll();

        if (!$programs) {
            throw $this->createNotFoundException('No program found in program\'s table.'
            );
        }

        return $this->render('wild/index.html.twig', [
            'programs' => $programs
        ]);
    }
/*
    /**
     * Getting a program with a formatted slug for title
     *
     * @param string $slug The slugger
     * @Route("/show/{slug<^[a-z0-9-]+$>}", defaults={"slug" = null}, name="wild_show")
     * @return Response
     */
 /*   public function show(?string $slug) :Response
    {
        if (!$slug) {
            throw $this->createNotFoundException(
                'No program with '.$slug.' title, found in program\'s table.'
            );
        }
        $slug = preg_replace(
            '/-/',
            ' ', ucwords(trim(strip_tags($slug)), "-")
        );
        $program = $this->getDoctrine()
            ->getRepository(Program::class)
            ->findOneBy(['title' => mb_strtolower($slug)]);
        if (!$program) {
            throw $this->createNotFoundException('No program with '.$slug.' title, found in program\'s table.'
            );
        }

        return $this->render('wild/show.html.twig', [
            'program' => $program,
            'slug'  => $slug,
        ]);
    }
*/
    /**
     * @param string $categoryName
     * @Route("/category/{categoryName}", name="show_category")
     * @return Response
     */
    public function show_Category(string $categoryName) :Response
    {
        $category = $this->getDoctrine()
            ->getRepository(Category::class)
            ->findOneBy(['name' => ($categoryName)]);

        $programs = $this->getDoctrine()
            ->getRepository(Program::class)
            ->findBy(['category' => ($category)]);

        return $this->render('wild/category.html.twig', [
            'programs' => $programs,
            '$category' => $category,
        ]);

    }

    /**
     * @param string $programTitle
     * @return Response
     * @Route("/wild/{programTitle}", name="show_program")
     */
    public function show_Program(string $programTitle) :Response
    {
        if (!$programTitle) {
            throw $this->createNotFoundException(
                'No programs for this category.'
            );
        }

        $programTitle = preg_replace(
            '/-/',
            ' ', ucwords(trim(strip_tags($programTitle)), "-")
        );

        $program = $this->getDoctrine()
            ->getRepository(Program::class)
            ->findOneBy(['title' => mb_strtolower($programTitle)]);

        $seasons = $this->getDoctrine()
            ->getRepository(Season::class)
            ->findBy(
                ['program' => $program]
            );

        return $this->render('wild/show.html.twig', [
            'websitehome' => 'Welcome',
            'slug' => $programTitle,
            'program' => $program,
            'seasons' => $seasons,
        ]);
    }

    /**
     * @param Season $season
     * @return Response
     * @Route("/season/{id<^[0-9-]+$>}", name="show_season")
     */
    public function show_Season(Season $season) :Response
    {
        $program = $season->getProgram();

        $episodes = $season->getEpisodes();

        return $this->render('wild/season.html.twig', [
            'season' => $season,
            'program' => $program,
            'episodes' => $episodes
        ]);
    }

    /**
     * @param Episode $episode
     * @return Response
     * @Route("/episode/{id<^[0-9-]+$>}", name="show_episode")
     */
    public function show_episode(Episode $episode) :Response
    {
        $season = $episode->getSeason();
        $program = $season->getProgram();
        return $this->render('wild/episode.html.twig', [
            'episode'=>$episode,
            'season'=>$season,
            'program'=>$program
        ]) ;
    }

    /**
     * @param Actor $actor
     * @return Response
     * @Route("/wild/actor/{id}", name="show_actor")
     */
    public function show_actor(Actor $actor) :Response
    {

        $programs = $actor->getPrograms();

        return $this->render('wild/actor.html.twig', [
            'actor'=>$actor,
            'programs'=>$programs
        ]) ;
    }
}
