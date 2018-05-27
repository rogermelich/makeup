<?php

namespace MakeupBundle\Entity;

/**
 * Treatment
 */
class Treatment
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;
    
    protected $treatmentProductTreatment;

    public function _construct(){
        $this->treatmentProductTreatment = new ArrayCollecion();
    }
    
    public function addTreatmentProductTreatment(\MakeupBundle\Entity\ProductTreatment $treatment){
        $this->treatmentProductTreatment[] = $treatment;
        return $this;
    }
    
    public function getTreatmentProductTreatment(){
        return $this->treatmentProductTreatment;
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
     * Set name
     *
     * @param string $name
     *
     * @return Treatment
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Treatment
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    public function __toString() {
        return $this->name;
    }
}

