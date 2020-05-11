<?php
// src/Controller/WildController.php
namespace App\Controller;

use App\Entity\Category;
use App\Form\CategoryType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    /**
     * @param Request $request
     * @return Response
     * @Route("/category/add", name="show_categoryAdd")
     */
    public function categoryForm(Request $request) : Response
    {
        $category = new Category();
        // ...

        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $category = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($category);
            $entityManager->flush();

            return $this->redirectToRoute('show_categoryAdd');
        }

        return $this->render('wild/categoryForm.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}