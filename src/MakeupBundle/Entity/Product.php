<?php

namespace MakeupBundle\Entity;

/**
 * Product
 */
class Product
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

    /**
     * @var string
     */
    private $image;

    /**
     * @var \MakeupBundle\Entity\Comments
     */
    private $comment;
    
    protected $productTreatment;

    public function _construct(){
        $this->productTreatment = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    public function addProductTreatment(\MakeupBundle\Entity\Treatment $treatment){
        $this->productTreatment[] = $treatment;
        return $this;
    }
    
    public function getProductTreatment(){
        return $this->productTreatment;
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
     * @return Product
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
     * @return Product
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

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Product
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set comment
     *
     * @param \MakeupBundle\Entity\Comments $comment
     *
     * @return Product
     */
    public function setComment(\MakeupBundle\Entity\Comment $comment = null)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return \MakeupBundle\Entity\Comments
     */
    public function getComment()
    {
        return $this->comment;
    }
}

