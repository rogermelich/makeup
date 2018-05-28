<?php

namespace MakeupBundle\Entity;

/**
 * ProductTreatment
 */
class ProductTreatment {

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \MakeupBundle\Entity\Products
     */
    private $product;

    /**
     * @var \MakeupBundle\Entity\Treatments
     */
    private $treatment;

        /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set product
     *
     * @param \MakeupBundle\Entity\Products $product
     *
     * @return ProductTreatment
     */
    public function setProduct(\MakeupBundle\Entity\Products $product = null) {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \MakeupBundle\Entity\Products
     */
    public function getProduct() {
        return $this->product;
    }

    /**
     * Set treatment
     *
     * @param \MakeupBundle\Entity\Treatments $treatment
     *
     * @return ProductTreatment
     */
    public function setTreatment(\MakeupBundle\Entity\Treatments $treatment = null) {
        $this->treatment = $treatment;

        return $this;
    }

    /**
     * Get treatment
     *
     * @return \MakeupBundle\Entity\Treatments
     */
    public function getTreatment() {
        return $this->treatment;
    }
    
    public function __toString() {
        return  $this->getProduct()->getName();
    }
}
