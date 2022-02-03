<?php

namespace App\Entity;

use App\Repository\AsesorRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=Asesor::class)
 */
class Asesor extends User
{  
     /**
     * @ORM\Column(type="string", length=100)
     */
    private $nombre;

   /**
     * @ORM\Column(type="string", length=100)
     */
    private $telefono;

   /**
    * @ORM\Column(name="id", type="integer")
    * @ORM\Id
    */
    protected $id;

    public function getId(): ?int
    {
        return parent::getId();
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(string $telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }
}
