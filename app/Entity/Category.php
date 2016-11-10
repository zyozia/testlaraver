<?php

namespace OSA\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Category")
 */
class Category
{
	/**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
	
	/**
     * @var integer
     * @ORM\Column(name="parent_id",type="integer",nullable=false)
     */
    private $parent_id;
	
	/**
     * @var string
     * @ORM\Column(type="string",nullable=false)
     */
    private $name;
	
	/**
     * @var int
     * @ORM\Column(type="integer",nullable=false)
     */
    private $tecdoc_id; // TD ART_CAT - + method(type):type
	
	
	/**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
	
	/**
     * @return int
     */
    public function getParentId()
    {
        return $this->parent_id;
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
    public function getTecdocId() : string
    {
        return $this->tecdoc_id;
    }

    /**
     * @param integer $parent_id
     */
    public function setParentId(integer $parent_id)
    {
        $this->parent_id = $parent_id;
    }
	
    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }
	
    /**
     * @param ineger $tecdoc_id
     */
    public function setTecdocId(integer $tecdoc_id)
    {
        $this->tecdoc_id = $tecdoc_id;
    }
		
}