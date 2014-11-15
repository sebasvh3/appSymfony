<?php

namespace inventario\appBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empleado
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Producto
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
     * @ORM\Column(name="Garantia", type="string", length=64)
     */
    private $garantia;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefono", type="string", length=32)
     */
    private $fabricante;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio", type="string", length=100)
     */
    private $precio;
    
    /**
     * @var string
     *
     * @ORM\Column(name="Iva", type="string", length=100)
     */
    private $iva;
    
    

    
}
