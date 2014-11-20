<?php

namespace inventario\appBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empleado
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Movimiento
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
     * @ORM\ManyToOne(targetEntity="Cliente")
     * @ORM\JoinColumn(name="idcliente", referencedColumnName="id")
     */
    private $idcliente;

    /**
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumn(name="idusuario", referencedColumnName="id")
     */
    private $idusuario;

    /**
     * @ORM\ManyToOne(targetEntity="Producto")
     * @ORM\JoinColumn(name="idproducto", referencedColumnName="id")
     */
    private $idproducto;

    /**
     * @ORM\ManyToOne(targetEntity="Transaccion")
     * @ORM\JoinColumn(name="idtransaccion", referencedColumnName="id")
     */
    private $idtransaccion;
    
    /**
     * @var string
     *
     * @ORM\Column(name="garantia", type="integer")
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
     * @param integer $cantidad
     * @return Movimiento
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set idcliente
     *
     * @param \inventario\appBundle\Entity\Cliente $idcliente
     * @return Movimiento
     */
    public function setIdcliente(\inventario\appBundle\Entity\Cliente $idcliente = null)
    {
        $this->idcliente = $idcliente;

        return $this;
    }

    /**
     * Get idcliente
     *
     * @return \inventario\appBundle\Entity\Cliente 
     */
    public function getIdcliente()
    {
        return $this->idcliente;
    }

    /**
     * Set idusuario
     *
     * @param \inventario\appBundle\Entity\Usuario $idusuario
     * @return Movimiento
     */
    public function setIdusuario(\inventario\appBundle\Entity\Usuario $idusuario = null)
    {
        $this->idusuario = $idusuario;

        return $this;
    }

    /**
     * Get idusuario
     *
     * @return \inventario\appBundle\Entity\Usuario 
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * Set idproducto
     *
     * @param \inventario\appBundle\Entity\Producto $idproducto
     * @return Movimiento
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

    /**
     * Set idtransaccion
     *
     * @param \inventario\appBundle\Entity\Transaccion $idtransaccion
     * @return Movimiento
     */
    public function setIdtransaccion(\inventario\appBundle\Entity\Transaccion $idtransaccion = null)
    {
        $this->idtransaccion = $idtransaccion;

        return $this;
    }

    /**
     * Get idtransaccion
     *
     * @return \inventario\appBundle\Entity\Transaccion 
     */
    public function getIdtransaccion()
    {
        return $this->idtransaccion;
    }
}
