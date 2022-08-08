<?php

namespace App\Entity;


/**
 * @ORM\Entity(repositoryClass=PostInstagramRepository::class)
 */
class PostInstagram {

    private $id;

    private $mediaType;

    private $mediaUrl;

    private $username;

    private $timestamp;

    /**
     * @param $id
     * @param $mediaType
     * @param $mediaUrl
     * @param $username
     * @param $timestamp
     */
    public function __construct($id, $mediaType, $mediaUrl, $username, $timestamp)
    {
        $this->id = $id;
        $this->mediaType = $mediaType;
        $this->mediaUrl = $mediaUrl;
        $this->username = $username;
        $this->timestamp = $timestamp;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getMediaType()
    {
        return $this->mediaType;
    }

    /**
     * @param mixed $mediaType
     */
    public function setMediaType($mediaType): void
    {
        $this->mediaType = $mediaType;
    }

    /**
     * @return mixed
     */
    public function getMediaUrl()
    {
        return $this->mediaUrl;
    }

    /**
     * @param mixed $mediaUrl
     */
    public function setMediaUrl($mediaUrl): void
    {
        $this->mediaUrl = $mediaUrl;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param mixed $timestamp
     */
    public function setTimestamp($timestamp): void
    {
        $this->timestamp = $timestamp;
    }



}
