<?php

namespace App\Entity;
use ApiPlatform\Metadata\ApiResource;

/** An attack from one village to another. */
#[ApiResource]
class Attack
{
    /** The ID of this attack. */
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    private ?int $id = null;

    /** Origin of Attack */
    public Village $origin;

    /** Destination of Attack */
    public Village $destination;

    /** Datetime of arrival */
    public \DateTimeImmutable $arrivalTime;


}
