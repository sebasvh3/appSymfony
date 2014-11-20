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
     * Set nombre
     *
     * @param string $nombre
     * @return Proveedor
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     * @return Proveedor
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Proveedor
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Proveedor
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set garantia
     *
     * @param integer $garantia
     * @return Proveedor
     */
    public function setGarantia($garantia)
    {
        $this->garantia = $garantia;

        return $this;
    }

    /**
     * Get garantia
     *
     * @return integer 
     */
    public function getGarantia()
    {
        return $this->garantia;
    }

    /**
     * Set tiempoEntrega
     *
     * @param integer $tiempoEntrega
     * @return Proveedor
     */
    public function setTiempoEntrega($tiempoEntrega)
    {
        $this->tiempoEntrega = $tiempoEntrega;

        return $this;
    }

    /**
     * Get tiempoEntrega
     *
     * @return integer 
     */
    public function getTiempoEntrega()
    {
        return $this->tiempoEntrega;
    }

    /**
     * Set precio
     *
     * @param integer $precio
     * @return Proveedor
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return integer 
     */
    public function getPrecio()
    {
        return $this->precio;
    }
}
