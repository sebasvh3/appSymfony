<?php

namespace inventario\appBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empleado
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Cliente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=64)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Apellido", type="string", length=64)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefono", type="string", length=32)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="Direccion", type="string", length=100)
     */
    private $direccion;
    
    /**
     * @var string
     *
     * @ORM\Column(name="Direccion", type="string", length=100)
     */
    private $afiliado;

    
}
