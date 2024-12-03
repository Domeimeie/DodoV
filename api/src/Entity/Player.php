<?php

namespace App\Entity;

use Nette\Utils\ArrayList;

class Player
{
    /** The ID of this Player. */
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    private ?int $id = null;

    /** The villages this player owns. */
    public iterable $villages;

    public function __construct()
    {
        $this->villages = new ArrayCollection();
    }


}
