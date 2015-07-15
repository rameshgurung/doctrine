<?php

namespace frontend\models;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="tbl_products")
 */

class product
{
    /**
     * @var integer
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string",columnDefinition="CHAR(20) NOT NULL")
     */
    private $name;

    /**
    * @ORM\OneToOne(targetEntity="frontend\models\shipping")
    * @ORM\JoinColumn(nullable=false)
    */
    private $shipping;

    /**
    * @ORM\OneToMany(targetEntity="frontend\models\feature",mappedBy="product")
    */
    private $features;



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
     * @return product
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
     * Set shipping
     *
     * @param \frontend\models\shipping $shipping
     * @return product
     */
    public function setShipping(\frontend\models\shipping $shipping = null)
    {
        $this->shipping = $shipping;

        return $this;
    }

    /**
     * Get shipping
     *
     * @return \frontend\models\shipping 
     */
    public function getShipping()
    {
        return $this->shipping;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->features = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Add features
     *
     * @param \frontend\models\feature $features
     * @return product
     */
    public function addFeature(\frontend\models\feature $features)
    {
        $this->features[] = $features;

        return $this;
    }

    /**
     * Remove features
     *
     * @param \frontend\models\feature $features
     */
    public function removeFeature(\frontend\models\feature $features)
    {
        $this->features->removeElement($features);
    }

    /**
     * Get features
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFeatures()
    {
        return $this->features;
    }
}
