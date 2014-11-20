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
    
   
}
