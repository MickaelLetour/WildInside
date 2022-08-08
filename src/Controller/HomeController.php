<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Image;
use App\Entity\Theme;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    /**
     * HomeController constructor.
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        $banner = $this->entityManager->getRepository(Image::class)->findOneByPosition('banner');
        $lastArticles = [];
        $themes = $this->entityManager->getRepository(Theme::class)->findAll();
        $themesId = [];
        $i = 1;
        foreach ($themes as $theme) {
            $themesId[] = $theme->getId();
        }
        foreach ($themesId as $id) {
            $articles = $this->entityManager->getRepository(Article::class)->findLastOfTheme($id);
            if ($articles != null){
                foreach($articles as $art){
                    $article = $art;
                }
                $lastArticles[$i] = [
                    $moodBoard = [
                        'thumbnail' => $this->entityManager->getRepository(Image::class)->findThumbnailByArticle($article->getId()),
                    ],
                    $article,
                ];
                $i++;
            }
        }

        return $this->render('home/index.html.twig', [
            'lastArticles' => $lastArticles,
            'banner' => $banner
        ]);
    }
}
