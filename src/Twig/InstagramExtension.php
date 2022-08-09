<?php

namespace App\Twig;

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class InstagramExtension extends  AbstractExtension {

    /**
     * @var Environment
     */
    private Environment $twig;

    /**
     * @param Environment $twig
     */
    public function __construct(Environment $twig) {
        $this->twig = $twig;
    }

    public function getFunctions(): array {
        return [
          new TwigFunction('instagram', [$this, 'getInstagram'], ['is_safe' => ['html']])
        ];
    }

    /**
     * @throws SyntaxError
     * @throws RuntimeError
     * @throws LoaderError
     */
    public function getInstagram(): string {
        return $this->twig->render('partials/instagram.html.twig');
    }

}