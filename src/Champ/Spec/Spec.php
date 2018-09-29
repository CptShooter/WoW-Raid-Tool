<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:17
 */

namespace Raid\Champ\Spec;

/**
 * Class Spec
 * @package Raid\Champ\Spec
 */
abstract class Spec
{
    /** @var string */
    protected $name;

    /** @var string */
    protected $icon;

    /** @var boolean */
    protected $dispelCurse;

    /** @var boolean */
    protected $dispelDisease;

    /** @var boolean */
    protected $dispelPoison;

    /** @var boolean */
    protected $dispelMagic;

    /** @var boolean */
    protected $removeEnrage;

    /** @var boolean */
    protected $combatResurrection;

    /** @var boolean */
    protected $purge;

    /** @var boolean */
    protected $interrupt;

    /** @var */
    protected $type;

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'name' => $this->name,
            'icon' => $this->icon,
            'type' => $this->type,
            'dispelCurse' => $this->dispelCurse,
            'dispelDisease' => $this->dispelDisease,
            'dispelPoison' => $this->dispelPoison,
            'dispelMagic' => $this->dispelMagic,
            'removeEnrage' => $this->removeEnrage,
            'combatResurrection' => $this->combatResurrection,
            'purge' => $this->purge,
            'interrupt' => $this->interrupt
        ];
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @return bool
     */
    public function isDispelCurse()
    {
        return $this->dispelCurse;
    }

    /**
     * @return bool
     */
    public function isDispelDisease()
    {
        return $this->dispelDisease;
    }

    /**
     * @return bool
     */
    public function isDispelPoison()
    {
        return $this->dispelPoison;
    }

    /**
     * @return bool
     */
    public function isDispelMagic()
    {
        return $this->dispelMagic;
    }

    /**
     * @return bool
     */
    public function isRemoveEnrage()
    {
        return $this->removeEnrage;
    }

    /**
     * @return bool
     */
    public function isCombatResurrection()
    {
        return $this->combatResurrection;
    }

    /**
     * @return bool
     */
    public function isPurge()
    {
        return $this->purge;
    }

    /**
     * @return bool
     */
    public function isInterrupt()
    {
        return $this->interrupt;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }
}