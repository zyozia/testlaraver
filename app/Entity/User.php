<?php

namespace OSA\Entities;

use Doctrine\ORM\Mapping AS ORM;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use LaravelDoctrine\ORM\Auth\Authenticatable;

/**
 * Class User
 * @package OSA\Entities
 *
 * @ORM\Entity()
 */
class User implements AuthenticatableContract
{
    use Authenticatable;

    const ROLE_MANAGER = 0;
    const ROLE_GOODS_EXPERT = 5;
    const ROLE_ADMINISTRATOR = 10;

    /**
     * @var integer
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column()
     */
    private $email;

    /**
     * @var integer
     * @ORM\Column(type="smallint")
     */
    private $role;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getEmail(): string
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
     * @return int
     */
    public function getRole(): int
    {
        return $this->role;
    }

    /**
     * @param int $role
     */
    public function setRole(int $role)
    {
        $this->role = $role;
    }
}