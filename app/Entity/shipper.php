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
     * @ORM\Column(type="datetime", options={"default"="CURRENT_TIMESTAMP"})
     */
    private $created_at;

    /**
     * @var string
     * @ORM\Column(type="string",nullable=true)
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(type="string",nullable=true)
     */
    private $article;

    /**
     * @var string
     * @ORM\Column(type="string",nullable=true)
     */
    private $city;

    /**
     * @var string
     * @ORM\Column(type="string",nullable=true)
     */
    private $phone;

    /**
     * @var string
     * @ORM\Column(name="contactPerson",type="string",nullable=true)
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
     * @ORM\Column(name="access_into",type="string",nullable=true)
     */
    private $access_into;

    /**
     * @var string
     * @ORM\Column(name="currency",type="string",nullable=true)
     */
    private $currency;

    /**
     * @var string
     * @ORM\Column(name="date_last_import",type="datetime",nullable=true)
     */
    private $date_last_import;
	/**
     * @var string
     * @ORM\Column(name="updated_at",type="datetime",nullable=true)
     */
    private $updated_at;
	
    /**
     * @var int
     * @ORM\Column(name="status",type="integer",nullable=false, options={"default"= 1})
     */
    private $status;

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
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
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
    public function getPhone() : integer
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
    public function getDateLastImport() : string
    {
        return $this->date_last_import;
    }

    /**
     * @param string $is_cooperate
     */
    public function setDateLastImport(string $date_last_import)
    {
        $this->date_last_import = $date_last_import;
    }

    /**
     * @return int
     */
    public function getStatus() : string
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(integer $status)
    {
        $this->status = $status;
    }
}