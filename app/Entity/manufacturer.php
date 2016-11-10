<?php

namespace OSA\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="manufacturer")
 */
class Manufacturer
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
    private $article;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $tecdoc_id; // BRAND - SUP_ID
	
	/**
     * @var string
     * @ORM\Column(type="string")
     */
    private $name;

	/**
     * @var string
     * @ORM\Column(type="string")
     */
    private $site_url;
	
	/**
     * @var string
     * @ORM\Column(type="string")
     */
    private $email;
	
	/**
     * @var string
     * @ORM\Column(type="string")
     */
    private $phone;

	/**
     * @var string
     * @ORM\Column(type="string")
     */
    private $country;
	
	/**
     * @var int
     * @ORM\Column(type="integer")
     */
    private $is_original;
	
}