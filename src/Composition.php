<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 12:48
 */

namespace Raid;

use Raid\Champ\DeathKnight;
use Raid\Champ\DemonHunter;
use Raid\Champ\Druid;
use Raid\Champ\Hunter;
use Raid\Champ\Mage;
use Raid\Champ\Monk;
use Raid\Champ\Paladin;
use Raid\Champ\Priest;
use Raid\Champ\Rogue;
use Raid\Champ\Shaman;
use Raid\Champ\Warlock;
use Raid\Champ\Warrior;

/**
 * Class Composition
 * @package Raid
 */
class Composition
{
    public function getClasses()
    {
        $classes[] = new DeathKnight();
        $classes[] = new DemonHunter();
        $classes[] = new Druid();
        $classes[] = new Hunter();
        $classes[] = new Mage();
        $classes[] = new Monk();
        $classes[] = new Paladin();
        $classes[] = new Priest();
        $classes[] = new Rogue();
        $classes[] = new Shaman();
        $classes[] = new Warlock();
        $classes[] = new Warrior();

        return $classes;
    }

    public function calculateComp($data)
    {

    }
}