<?php

namespace App\Entity;

use App\Repository\JokesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: JokesRepository::class)]
class Jokes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $origin_id;

    #[ORM\Column(type: 'text')]
    private $joke;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOriginId(): ?string
    {
        return $this->origin_id;
    }

    public function setOriginId(string $origin_id): self
    {
        $this->origin_id = $origin_id;

        return $this;
    }

    public function getJoke(): ?string
    {
        return $this->joke;
    }

    public function setJoke(string $joke): self
    {
        $this->joke = $joke;

        return $this;
    }
}
