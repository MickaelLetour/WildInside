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

        $moodboard = [
            'colori' => $this->entityManager->getRepository(Image::class)->findMoodboard($id,'colori',6),
            'paysageDroite' => $this->entityManager->getRepository(Image::class)->findMoodboard($id,'paysageDroite',2),
            'paysageBas' => $this->entityManager->getRepository(Image::class)->findMoodboard($id,'paysageBas',2),
            'portraitGauche' => $this->entityManager->getRepository(Image::class)->findMoodboard($id,'portraitGauche',1),
            'nuancier' => $this->entityManager->getRepository(Image::class)->findMoodboard($id,'nuancier',1)
        ]; 

        //$moodboard = $this->entityManager->getRepository(Image::class)->findAllImageByArticle($id);

        return $this->render('article/index.html.twig',[
            'article' => $article,
            'moodboard' => $moodboard
        ]);
    }
}

