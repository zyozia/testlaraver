<?php

namespace OSA\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="product_img")
 */
class ProductImg
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
    private $product_id; // FK product - id

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $tecdoc_img_id;// tecdoc table ARTICLE_IMG - ART_ARTICLE_NR
}