<?php

namespace Hectoritoh\Apps\PlannerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Revision
 */
class Revision
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $accion;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \DateTime
     */
    private $updated_at;

    /**
     * @var \Hectoritoh\Apps\PlannerBundle\Entity\Tarea
     */
    private $tarea;

    /**
     * @var \Hectoritoh\Apps\PlannerBundle\Entity\Subtarea
     */
    private $subtarea;


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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Revision
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set accion
     *
     * @param string $accion
     * @return Revision
     */
    public function setAccion($accion)
    {
        $this->accion = $accion;
    
        return $this;
    }

    /**
     * Get accion
     *
     * @return string 
     */
    public function getAccion()
    {
        return $this->accion;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Revision
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;
    
        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return Revision
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;
    
        return $this;
    }

    /**
     * Get updated_at
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set tarea
     *
     * @param \Hectoritoh\Apps\PlannerBundle\Entity\Tarea $tarea
     * @return Revision
     */
    public function setTarea(\Hectoritoh\Apps\PlannerBundle\Entity\Tarea $tarea = null)
    {
        $this->tarea = $tarea;
    
        return $this;
    }

    /**
     * Get tarea
     *
     * @return \Hectoritoh\Apps\PlannerBundle\Entity\Tarea 
     */
    public function getTarea()
    {
        return $this->tarea;
    }

    /**
     * Set subtarea
     *
     * @param \Hectoritoh\Apps\PlannerBundle\Entity\Subtarea $subtarea
     * @return Revision
     */
    public function setSubtarea(\Hectoritoh\Apps\PlannerBundle\Entity\Subtarea $subtarea = null)
    {
        $this->subtarea = $subtarea;
    
        return $this;
    }

    /**
     * Get subtarea
     *
     * @return \Hectoritoh\Apps\PlannerBundle\Entity\Subtarea 
     */
    public function getSubtarea()
    {
        return $this->subtarea;
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
