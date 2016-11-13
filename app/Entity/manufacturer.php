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
     * @ORM\Column(type="datetime", options={"default"="CURRENT_TIMESTAMP"})
     */
    private $created;

    /**
     * @var string
     * @ORM\Column(type="string",nullable=true)
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(type="string",nullable=true)
     */
    private $alternative_name;

    /**
     * @var string
     * @ORM\Column(type="string",nullable=true)
     */
    private $article;

	/**
     * @var string
     * @ORM\Column(type="string",nullable=true)
     */
    private $site_url;

	/**
     * @var string
     * @ORM\Column(type="string",nullable=true)
     */
    private $email;

	/**
     * @var string
     * @ORM\Column(type="string",nullable=true)
     */
    private $phone;

	/**
     * @var string
     * @ORM\Column(type="string",nullable=true)
     */
    private $country;

	/**
     * @var int
     * @ORM\Column(type="integer")
     */
    private $is_original;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    private $tecdoc_id; // BRAND - SUP_ID

}