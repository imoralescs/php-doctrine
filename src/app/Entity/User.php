<?php 

namespace NamespacesName\Models;

use NamespacesName\Models\Model;

/**
 * @Entity @Table(name="users")
 */
class User extends Model
{
    /**
     * @GeneratedValue(strategy="AUTO")
     * @Id @Column(name="id", type="integer", nullable=false)
     */
    protected $id;

    /**
     * @name @Column(type="string")
     */
    protected $name;

    /**
     * @email @Column(type="string")
     */
    protected $email;

    /**
     * @password @Column(type="string")
     */
    protected $password;

    /**
     * @remember_token @Column(type="string")
     */
    protected $remember_token;

    /**
     * @remember_identifier @Column(type="string")
     */
    protected $remember_identifier;

    public function getId()
    {
        return $this->id;
    }

    public function setId($Id)
    {
        $this->id = $Id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}