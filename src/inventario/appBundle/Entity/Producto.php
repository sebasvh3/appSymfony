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
     * @ORM\Column(name="nombre", type="string", length=64)
     */
    private $nombre;

    /**
     * @ORM\ManyToOne(targetEntity="Proveedor")
     * @ORM\JoinColumn(name="idproveedor", referencedColumnName="id")
     */
    private $idproveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="precio", type="string", length=100)
     */
    private $precio;
    
    /**
     * @var string
     *
     * @ORM\Column(name="iva", type="string", length=100)
     */
    private $iva;
    
    

    
}
