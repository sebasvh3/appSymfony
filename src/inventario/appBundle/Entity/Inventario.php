<?php

namespace inventario\appBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empleado
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Inventario
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
     * @ORM\ManyToOne(targetEntity="Producto")
     * @ORM\JoinColumn(name="idproducto", referencedColumnName="id")
     */
    private $idproducto;

    /**
     * @var string
     *
     * @ORM\Column(name="cantidad", type="string", length=64)
     */
    private $cantidad;

    

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set cantidad
     *
     * @param string $cantidad
     * @return Inventario
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return string 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set idproducto
     *
     * @param \inventario\appBundle\Entity\Producto $idproducto
     * @return Inventario
     */
    public function setIdproducto(\inventario\appBundle\Entity\Producto $idproducto = null)
    {
        $this->idproducto = $idproducto;

        return $this;
    }

    /**
     * Get idproducto
     *
     * @return \inventario\appBundle\Entity\Producto 
     */
    public function getIdproducto()
    {
        return $this->idproducto;
    }
}
