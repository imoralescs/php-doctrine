<?php 

namespace NamespacesName\Models;

use NamespacesName\Models\Model;

/**
 * @Entity @Table(name="friendships")
 */
class Friendships extends Model
{
    /**
     * @GeneratedValue(strategy="AUTO")
     * @Friend_id @Column(name="friend_id", type="integer", nullable=false)
     */
    protected $friend_id;

    /**
     * @user_id @Column(type="integer")
     */
    protected $user_id;

    public function getFriend_id()
    {
        return $this->friend_id;
    }

    public function setFriend_id($friend_id) {
        $this->friend_id = $friend_id;
    }

    public function getUser_id()
    {
        return $this->user_id;
    }

    public function setUser_id($user_id) {
        $this->user_id = $user_id;
    }
}