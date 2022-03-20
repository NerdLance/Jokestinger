<?php

namespace App\Entity;

use App\Repository\CommentsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentsRepository::class)]
class Comments
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $joke_origin_id;

    #[ORM\Column(type: 'text')]
    private $comment;

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

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }
}
