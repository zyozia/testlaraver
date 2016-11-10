<?php

namespace OSA\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="shipper")
 */
class Shipper
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
    private $city;
	
	/**
     * @var string
     * @ORM\Column(type="string",nullable=true)
     */
    private $phone;
	
	/**
     * @var string
     * @ORM\Column(name="contactPerson",type="string",nullable=false)
     */
    private $contactPerson;
	
	/**
     * @var string
     * @ORM\Column(name="site_url",type="string",nullable=true)
     */
    private $site_url;
	
	/**
     * @var string
     * @ORM\Column(name="email",type="string",nullable=true)
     */
    private $email;
	
	/**
     * @var string
     * @ORM\Column(name="payment_method",type="string",nullable=true)
     */
    private $payment_method;
	
	/**
     * @var string
     * @ORM\Column(name="access_into",type="string")
     */
    private $access_into;
	
	/**
     * @var string
     * @ORM\Column(name="currency",type="string")
     */
    private $currency;
	
	/**
     * @var string
     * @ORM\Column(name="is_cooperate",type="string")
     */
    private $is_cooperate;
	
    /**
     * Shipper constructor.
     * @param $article
     */
    public function __construct(string $article = '', string $city = '', integer $phone = null, string $contactPerson = '', string $site_url = '', string $email = '', string $access_into = '', string $currency = '', string $is_cooperate = '')
    {
        $this->setArticle($article);
		$this->setCity($city);
		$this->setPhone($phone);
		$this->setContactPerson($contactPerson);
		$this->setSiteUrl($site_url);
		$this->setEmail($email);
		$this->setAccessInto($access_into);
		$this->setCurrency($currency);
		$this->setIsCooperate($is_cooperate);
    }

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
    public function getArticle() : string
    {
        return $this->article;
    }

    /**
     * @param string $article
     */
    public function setArticle(string $article)
    {
        $this->article = $article;
    }
	
    /**
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city)
    {
        $this->city = $city;
    }
		
    /**
     * @return string
     */
    public function getPhone() : string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone)
    {
        $this->phone = $phone;
    }
	
    /**
     * @return string
     */
    public function getContactPerson() : string
    {
        return $this->contactPerson;
    }

    /**
     * @param string $contactPerson
     */
    public function setContactPerson(string $contactPerson)
    {
        $this->contactPerson = $contactPerson;
    }
	
    /**
     * @return string
     */
    public function getSiteUrl() : string
    {
        return $this->site_url;
    }

    /**
     * @param string $site_url
     */
    public function setSiteUrl(string $site_url)
    {
        $this->site_url = $site_url;
    }
	
    /**
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }
	
    /**
     * @return string
     */
    public function getAccessInto() : string
    {
        return $this->access_into;
    }

    /**
     * @param string $access_into
     */
    public function setAccessInto(string $access_into)
    {
        $this->access_into = $access_into;
    }
	
	/**
     * @return string
     */
    public function getCurrency() : string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency(string $currency)
    {
        $this->currency = $currency;
    }
	
	/**
     * @return string
     */
    public function getIsCooperate() : string
    {
        return $this->is_cooperate;
    }

    /**
     * @param string $is_cooperate
     */
    public function setIsCooperate(string $is_cooperate)
    {
        $this->is_cooperate = $is_cooperate;
    }
}