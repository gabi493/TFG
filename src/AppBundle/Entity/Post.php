<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 */
class Post
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $date;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $userId;


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
     * Set date
     *
     * @param integer $date
     * @return Post
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return integer 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Post
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
     * Set userId
     *
     * @param integer $userId
     * @return Post
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }
    /**
     * @var string
     */
    private $manyToOne;


    /**
     * Set manyToOne
     *
     * @param string $manyToOne
     * @return Post
     */
    public function setManyToOne($manyToOne)
    {
        $this->manyToOne = $manyToOne;

        return $this;
    }

    /**
     * Get manyToOne
     *
     * @return string 
     */
    public function getManyToOne()
    {
        return $this->manyToOne;
    }
}
