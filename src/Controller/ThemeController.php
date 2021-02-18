<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Photo;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ThemeController extends AbstractController
{

    private EntityManagerInterface $entityManager;

    /**
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/theme/{id}", name="theme")
     * @param $id
     * @return Response
     */
    public function index($id): Response
    {
        $articles = $this->entityManager->getRepository(Article::class)->findByTheme($id);
        $photos = [];
        foreach ($articles as $article){
            $photos [] = $this->entityManager->getRepository(Photo::class)->findByArticle($article);
        }

        return $this->render('theme/index.html.twig',[
            'theme' => $photos
        ]);
    }
}
