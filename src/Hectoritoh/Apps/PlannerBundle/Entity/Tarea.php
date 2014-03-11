<?php

namespace Hectoritoh\Apps\PlannerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tarea
 */
class Tarea
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var \DateTime
     */
    private $fecha_asignacion;

    /**
     * @var string
     */
    private $detalle;

    /**
     * @var \DateTime
     */
    private $entrega;

    /**
     * @var integer
     */
    private $estado;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $subtareas;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $revisiones;

    /**
     * @var \Hectoritoh\Apps\PlannerBundle\Entity\Cliente
     */
    private $cliente;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $adjuntos;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $verificadores;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $responsables;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->subtareas = new \Doctrine\Common\Collections\ArrayCollection();
        $this->revisiones = new \Doctrine\Common\Collections\ArrayCollection();
        $this->adjuntos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->verificadores = new \Doctrine\Common\Collections\ArrayCollection();
        $this->responsables = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * @return Tarea
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
     * Set fecha_asignacion
     *
     * @param \DateTime $fechaAsignacion
     * @return Tarea
     */
    public function setFechaAsignacion($fechaAsignacion)
    {
        $this->fecha_asignacion = $fechaAsignacion;
    
        return $this;
    }

    /**
     * Get fecha_asignacion
     *
     * @return \DateTime 
     */
    public function getFechaAsignacion()
    {
        return $this->fecha_asignacion;
    }

    /**
     * Set detalle
     *
     * @param string $detalle
     * @return Tarea
     */
    public function setDetalle($detalle)
    {
        $this->detalle = $detalle;
    
        return $this;
    }

    /**
     * Get detalle
     *
     * @return string 
     */
    public function getDetalle()
    {
        return $this->detalle;
    }

    /**
     * Set entrega
     *
     * @param \DateTime $entrega
     * @return Tarea
     */
    public function setEntrega($entrega)
    {
        $this->entrega = $entrega;
    
        return $this;
    }

    /**
     * Get entrega
     *
     * @return \DateTime 
     */
    public function getEntrega()
    {
        return $this->entrega;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return Tarea
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return integer 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Add subtareas
     *
     * @param \Hectoritoh\Apps\PlannerBundle\Entity\Subtarea $subtareas
     * @return Tarea
     */
    public function addSubtarea(\Hectoritoh\Apps\PlannerBundle\Entity\Subtarea $subtareas)
    {
        $this->subtareas[] = $subtareas;
    
        return $this;
    }

    /**
     * Remove subtareas
     *
     * @param \Hectoritoh\Apps\PlannerBundle\Entity\Subtarea $subtareas
     */
    public function removeSubtarea(\Hectoritoh\Apps\PlannerBundle\Entity\Subtarea $subtareas)
    {
        $this->subtareas->removeElement($subtareas);
    }

    /**
     * Get subtareas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSubtareas()
    {
        return $this->subtareas;
    }

    /**
     * Add revisiones
     *
     * @param \Hectoritoh\Apps\PlannerBundle\Entity\Revision $revisiones
     * @return Tarea
     */
    public function addRevisione(\Hectoritoh\Apps\PlannerBundle\Entity\Revision $revisiones)
    {
        $this->revisiones[] = $revisiones;
    
        return $this;
    }

    /**
     * Remove revisiones
     *
     * @param \Hectoritoh\Apps\PlannerBundle\Entity\Revision $revisiones
     */
    public function removeRevisione(\Hectoritoh\Apps\PlannerBundle\Entity\Revision $revisiones)
    {
        $this->revisiones->removeElement($revisiones);
    }

    /**
     * Get revisiones
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRevisiones()
    {
        return $this->revisiones;
    }

    /**
     * Set cliente
     *
     * @param \Hectoritoh\Apps\PlannerBundle\Entity\Cliente $cliente
     * @return Tarea
     */
    public function setCliente(\Hectoritoh\Apps\PlannerBundle\Entity\Cliente $cliente = null)
    {
        $this->cliente = $cliente;
    
        return $this;
    }

    /**
     * Get cliente
     *
     * @return \Hectoritoh\Apps\PlannerBundle\Entity\Cliente 
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Add adjuntos
     *
     * @param \Hectoritoh\Apps\PlannerBundle\Entity\Documento $adjuntos
     * @return Tarea
     */
    public function addAdjunto(\Hectoritoh\Apps\PlannerBundle\Entity\Documento $adjuntos)
    {
        $this->adjuntos[] = $adjuntos;
    
        return $this;
    }

    /**
     * Remove adjuntos
     *
     * @param \Hectoritoh\Apps\PlannerBundle\Entity\Documento $adjuntos
     */
    public function removeAdjunto(\Hectoritoh\Apps\PlannerBundle\Entity\Documento $adjuntos)
    {
        $this->adjuntos->removeElement($adjuntos);
    }

    /**
     * Get adjuntos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAdjuntos()
    {
        return $this->adjuntos;
    }

    /**
     * Add verificadores
     *
     * @param \Hectoritoh\Apps\PlannerBundle\Entity\Usuario $verificadores
     * @return Tarea
     */
    public function addVerificadore(\Hectoritoh\Apps\PlannerBundle\Entity\Usuario $verificadores)
    {
        $this->verificadores[] = $verificadores;
    
        return $this;
    }

    /**
     * Remove verificadores
     *
     * @param \Hectoritoh\Apps\PlannerBundle\Entity\Usuario $verificadores
     */
    public function removeVerificadore(\Hectoritoh\Apps\PlannerBundle\Entity\Usuario $verificadores)
    {
        $this->verificadores->removeElement($verificadores);
    }

    /**
     * Get verificadores
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVerificadores()
    {
        return $this->verificadores;
    }

    /**
     * Add responsables
     *
     * @param \Hectoritoh\Apps\PlannerBundle\Entity\Usuario $responsables
     * @return Tarea
     */
    public function addResponsable(\Hectoritoh\Apps\PlannerBundle\Entity\Usuario $responsables)
    {
        $this->responsables[] = $responsables;
    
        return $this;
    }

    /**
     * Remove responsables
     *
     * @param \Hectoritoh\Apps\PlannerBundle\Entity\Usuario $responsables
     */
    public function removeResponsable(\Hectoritoh\Apps\PlannerBundle\Entity\Usuario $responsables)
    {
        $this->responsables->removeElement($responsables);
    }

    /**
     * Get responsables
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getResponsables()
    {
        return $this->responsables;
    }
    /**
     * @ORM\PrePersist
     */
    public function preInsert()
    {
        // Add your code here
    }

    /**
     * @ORM\PreUpdate
     */
    public function preUpdate()
    {
        // Add your code here
    }
}
