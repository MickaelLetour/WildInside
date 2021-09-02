<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Image;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
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
     * @Route("/article/{id}", name="article")
     * @param $id
     * @return Response
     */
    public function index($id): Response
    {
        $article = $this->entityManager->getRepository(Article::class)->find($id);
        $moodboard = $this->entityManager->getRepository(Image::class)->findMoodboard($id, 'moodboard');

        return $this->render('article/index.html.twig',[
            'article' => $article,
            'moodboard' => $moodboard
        ]);
    }
}

