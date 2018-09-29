<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:10
 */

namespace Raid\Champ;

use Raid\Champ\Buffs\Buff;
use Raid\Champ\Spec\Spec;

/**
 * Class Champ
 * @package Raid\Champ
 */
abstract class Champ
{
    /** @var string */
    protected $name;

    /** @var array */
    protected $classColor;

    /** @var array */
    protected $buffs;

    /** @var array */
    protected $specs;

    /**
     * @return array
     */
    public function toArray()
    {
        $buffs = [];

        /** @var Buff $buff */
        foreach($this->buffs as $buff){
            $buffs[] = $buff->getName();
        }

        $specs = [];

        /** @var Spec $spec */
        foreach($this->specs as $spec){
            $specs[] = $spec->toArray();
        }

        return [
            'name' => $this->name,
            'classColor' => 'rgb('.$this->classColor[0].','.$this->classColor[1].','.$this->classColor[2].')',
            'buffs' => $buffs,
            'specs' => $specs
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
    public function getClassColor()
    {
        return 'rgb('.$this->classColor[0].','.$this->classColor[1].','.$this->classColor[2].')';
    }

    /**
     * @return array
     */
    public function getBuffs()
    {
        return $this->buffs;
    }

    /**
     * @return array
     */
    public function getSpecs()
    {
        return $this->specs;
    }
}