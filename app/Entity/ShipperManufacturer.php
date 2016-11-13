<?php

namespace OSA\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="shipper_manufacturer")
 */
class ShipperManufacturer
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
     * @ORM\Column(type="integer",nullable=false)
     */
    private $shipper_id;

	/**
     * @var int
     * @ORM\Column(type="integer",nullable=false)
     */
    private $manufacturer_id;


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
    public function getShipperId()
    {
        return $this->shipper_id;
    }

	/**
     * @return int
     */
    public function getManufacturerId()
    {
        return $this->manufacturer_id;
    }

    /**
     * @param int $shipper_id
     */
    public function setShipperId(integer $shipper_id)
    {
        $this->shipper_id = $shipper_id;
    }

    /**
     * @param int $manufacturer_id
     */
    public function setManufacturerId(integer $manufacturer_id)
    {
        $this->manufacturer_id = $manufacturer_id;
    }
}