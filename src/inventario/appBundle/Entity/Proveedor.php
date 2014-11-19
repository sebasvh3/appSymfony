<?php

namespace inventario\appBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empleado
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Proveedor
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
     * @ORM\Column(name="nombre", type="string", length=64)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=64)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=32)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=100)
     */
    private $direccion;
    
    /**
     * @var string
     *
     * @ORM\Column(name="garantia", type="integer")
     */
    private $garantia;
    
    /**
     * @var string
     *
     * @ORM\Column(name="tiempoEntrega", type="integer")
     */
    private $tiempoEntrega;

        
    /**
     * @var integer
     *
     * @ORM\Column(name="precio", type="integer")
     */
    private $precio;
   
}
