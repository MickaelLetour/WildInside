<?php

namespace App\Services;

use App\Entity\Theme;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NavTheme extends AbstractController{

    private EntityManagerInterface $entityManager;

    /**
     * HomeController constructor.
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function getTheme(): array
    {
        return $theme = $this->entityManager->getRepository(Theme::class)->findAll();
    }
}