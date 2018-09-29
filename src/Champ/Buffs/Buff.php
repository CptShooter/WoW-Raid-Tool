<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:37
 */

namespace Raid\Champ\Buffs;

/**
 * Class Buff
 * @package Raid\Champ\Buffs
 */
abstract class Buff
{
    /** @var string */
    protected $name;

    /**
     * Buff constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}