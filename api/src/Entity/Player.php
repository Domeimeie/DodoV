<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;

#[ApiResource]
class Player
{
    /** The ID of this Player. */
    private ?int $id = null;

    /** @var Village[] Villages owned by player */
    public iterable $villages;

    public function __construct()
    {
        $this->villages = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

}
