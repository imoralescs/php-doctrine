<?php 

namespace NamespacesName\Models;

use NamespacesName\Models\Model;

/**
 * @Entity @Table(name="post")
 */
class Post extends Model
{
    /**
     * @GeneratedValue(strategy="AUTO")
     * @Id @Column(name="id", type="integer", nullable=false)
     */
    protected $id;

    /**
     * @name @Column(type="text")
     */
    protected $title;

    /**
     * @email @Column(type="text")
     */
    protected $body;

    /**
     * @password @Column(type="datetime")
     */
    protected $publicationDate;
}