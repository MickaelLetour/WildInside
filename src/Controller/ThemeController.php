<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Image;
use App\Entity\Theme;
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
        $theme = $this->entityManager->getRepository(Theme::class)->find($id);
        $articles = $this->entityManager->getRepository(Article::class)->findByTheme($id);
        $fullArticle = [];
        if ($articles != null){
            foreach ($articles as $article){
                $fullArticle [] = $this->entityManager->getRepository(Image::class)->findByDESCArticle($article);
            }
        }

        return $this->render('theme/index.html.twig',[
            'articles' => $fullArticle,
            'theme' => $theme
        ]);
    }
}
