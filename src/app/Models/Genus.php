<?php 

namespace NamespacesName\Models;

use NamespacesName\Models\Model;

/**
 * @Entity @Table(name="genus")
 */
class Genus extends Model
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
     * @subFamily @Column(type="string")
     */
    protected $subFamily;

    /**
     * @speciesCount @Column(type="integer")
     */
    protected $speciesCount;

    /**
     * @funFact @Column(type="string")
     */
    protected $funFact;

    /**
     * @isPublished @Column(type="boolean")
     */
    protected $isPublished = true;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getSubFamily()
    {
        return $this->subFamily;
    }

    public function setSubFamily($subFamily) {
        $this->subFamily = $subFamily;
    }

    public function getSpeciesCount()
    {
        return $this->speciesCount;
    }

    public function setSpeciesCount($speciesCount) {
        $this->speciesCount = $speciesCount;
    }

    public function getFunFact()
    {
        return $this->funFact;
    }

    public function setFunFact($funFact) {
        $this->funFact = $funFact;
    }
}