<?php
// api/src/Entity/Village.php
namespace App\Entity;
use ApiPlatform\Metadata\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/** A village. */
#[ORM\Entity]
#[ApiResource]
class Village
{
    /** The ID of this village. */
    #[ORM\Id, ORM\Column, ORM\GeneratedValue]
    private ?int $id = null;

    /** The player that owns the village */
    public Player $owner;

    /** The name of this village. */
    public string $name = '';

    /** The level of this villages town center */
    public int $townCenterLvl;

    /** The level of this villages farm */
    public int $farmLvl;

    /** The level of this villages stone mine */
    public int $stoneMineLvl;

    /** The level of this villages iron mine */
    public int $ironMineLvl;

    /** The level of this villages barrack */
    public int $barrack;

    /** The level of this villages Training Ground */
    public int $trainingGround;


    public function __construct()
    {
        $this->attack = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}
