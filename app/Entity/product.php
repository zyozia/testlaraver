<?php

namespace OSA\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="product")
 */
class Product
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @var int
     * @ORM\Column(type="decimal", scale=2,nullable=true)
     */
    private $price;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    private $status; // ok-ognore-archive

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    private $is_used;

    /**
     * @var string
     * @ORM\Column(name="OEM_id",type="string")
     */
    private $OEM_id; // tecdoc ARTICLE - ART_ARTICLE_NR

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    private $manufacturer_id; // fk manufacturer - id

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    private $shipper_id; // fk shipper - id

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    private $category_id; // fk Categiry - id
}