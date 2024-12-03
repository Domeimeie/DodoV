<?php

namespace App\Entity;

use Nette\Utils\ArrayList;

class Player
{
    /** The ID of this Player. */
    private ?int $id = null;

    /** The villages this player owns. */
    public ArrayList<Village> villages = null;



}
