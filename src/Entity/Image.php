<?php

namespace App\Entity;

use App\Repository\ImageRepository;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass=ImageRepository::class)
 */
class Image
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;
    
    /**
     * @ORM\ManyToOne(targetEntity=Article::class, inversedBy="image")
     */
    private $article;

    /**
     * @ORM\ManyToOne(targetEntity=Position::class, inversedBy="images")
     */
    private $moodboard;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getArticle(): ?Article
    {
        return $this->article;
    }

    public function setArticle(?Article $article): self
    {
        $this->article = $article;

        return $this;
    }

    public function getMoodboard(): ?Position
    {
        return $this->moodboard;
    }

    public function setMoodboard(?Position $moodboard): self
    {
        $this->moodboard = $moodboard;

        return $this;
    }

}
