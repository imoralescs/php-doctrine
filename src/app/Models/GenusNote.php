<?php 

namespace NamespacesName\Models;

use NamespacesName\Models\Model;
use NamespacesName\Models\Genus;

/**
 * @Entity @Table(name="genusnotes")
 */
class GenusNote extends Model
{
    /**
     * @GeneratedValue(strategy="AUTO")
     * @Id @Column(name="id", type="integer", nullable=false)
     */
    protected $id;

    /**
     * @username @Column(type="string")
     */
    protected $username;

    /**
     * @userAvatarFilename @Column(type="string")
     */
    protected $userAvatarFilename;

    /**
     * @note @Column(type="text")
     */
    protected $note;

    /**
     * @createdAt @Column(type="datetime")
     */
    protected $createdAt;

    /**
     * @genus @ManyToOne(targetEntity="Genus")
     */
    protected $genus;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getUserAvatarFilename()
    {
        return $this->userAvatarFilename;
    }

    public function setUserAvatarFilename($userAvatarFilename)
    {
        $this->userAvatarFilename = $userAvatarFilename;
    }

    public function getNote()
    {
        return $this->note;
    }

    public function setNote($note)
    {
        $this->note = $note;
    }

    public function getcreatedAt()
    {
        return $this->createdAt;
    }

    public function setcreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    public function getGenus()
    {
        return $this->genus;
    }

    public function setGenus(Genus $genus)
    {
        $this->genus = $genus;
    }
}