<?php

namespace App\Entity;

use App\Repository\RatingsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RatingsRepository::class)]
class Ratings
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $joke_origin_id;

    #[ORM\Column(type: 'integer')]
    private $rating;

    #[ORM\Column(type: 'integer')]
    private $joke_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJokeOriginId(): ?string
    {
        return $this->joke_origin_id;
    }

    public function setJokeOriginId(string $joke_origin_id): self
    {
        $this->joke_origin_id = $joke_origin_id;

        return $this;
    }

    public function getRating(): ?int
    {
        return $this->rating;
    }

    public function setRating(int $rating): self
    {
        $this->rating = $rating;

        return $this;
    }

    public function getJokeId(): ?int
    {
        return $this->joke_id;
    }

    public function setJokeId(int $joke_id): self
    {
        $this->joke_id = $joke_id;

        return $this;
    }
}
