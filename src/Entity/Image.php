<?php

namespace App\Entity;

use App\Repository\ImageRepository;
use Doctrine\ORM\Mapping as ORM;


use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass=ImageRepository::class)
 * @UniqueEntity(fields="image", message="Cet image existe déja")
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
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $image;

    /**
     * @ORM\Column(type="boolean")
     */
    private $banner;

    /**
     * @ORM\Column(type="boolean")
     */
    private $thumbnail;

    /**
     * @ORM\ManyToOne(targetEntity=Article::class, inversedBy="image")
     */
    private $article;


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

    public function getBanner(): ?bool
    {
        return $this->banner;
    }

    public function setBanner(bool $banner): self
    {
        $this->banner = $banner;

        return $this;
    }

    public function getThumbnail(): ?bool
    {
        return $this->thumbnail;
    }

    public function setThumbnail(bool $thumbnail): self
    {
        $this->thumbnail = $thumbnail;

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

}
