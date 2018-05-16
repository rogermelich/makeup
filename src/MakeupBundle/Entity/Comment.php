<?php

namespace MakeupBundle\Entity;

/**
 * Comment
 */
class Comment
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var \MakeupBundle\Entity\Users
     */
    private $user;
    
    protected $commentProduct;

    public function __construct() {
        $this->commentProduct = new ArrayCollecion();
    }

    public function addCommentProduct(\MakeupBundle\Entity\Product $product) {
        $this->commentProduct = $product;
        return $this;
    }

    public function getCommentProduct() {
        return $this->commentProduct;
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
     * Set comment
     *
     * @param string $comment
     *
     * @return Comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set user
     *
     * @param \MakeupBundle\Entity\Users $user
     *
     * @return Comment
     */
    public function setUser(\MakeupBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \MakeupBundle\Entity\Users
     */
    public function getUser()
    {
        return $this->user;
    }
}

