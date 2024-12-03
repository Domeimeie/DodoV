<?php

namespace App\Entity;
use ApiPlatform\Metadata\ApiResource;

/** An attack from one village to another. */
#[ApiResource]
class Attack
{
    /** The ID of this attack. */
    private ?int $id = null;

    /** Origin of Attack */
    public Village $origin;

    /** Destination of Attack */
    public Village $destination;

    /** Datetime of arrival */
    public \DateTimeImmutable $arrivalTime;

    public function getId(): ?int
    {
        return $this->id;
    }

}
