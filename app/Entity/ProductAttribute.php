<?php

namespace OSA\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="product_attribute")
 */
class ProductAttribute
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

	/**
     * @var int
     * @ORM\Column(type="integer")
     */
    private $product_id;// fk product - id

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $value;

	/**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

	/**
     * @return string
     */
    public function getProductId() : string
    {
        return $this->product_id;
    }

	/**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

	/**
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }

    /**
     * @param string $product_id
     */
    public function setProductId(string $product_id)
    {
        $this->product_id = $product_id;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param string $value
     */
    public function setValue(string $value)
    {
        $this->value = $value;
    }
}