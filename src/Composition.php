<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 12:48
 */

namespace Raid;

use Raid\Champ\Buffs\AttackPower;
use Raid\Champ\Buffs\BloodlustHeroism;
use Raid\Champ\Buffs\Buff;
use Raid\Champ\Buffs\Intellect;
use Raid\Champ\Buffs\MagicDamage;
use Raid\Champ\Buffs\PhysicalDamage;
use Raid\Champ\Buffs\Stamina;
use Raid\Champ\Champ;
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
use Raid\Champ\Spec\Spec;
use Raid\Champ\Warlock;
use Raid\Champ\Warrior;

/**
 * Class Composition
 * @package Raid
 */
class Composition
{
    /** @var array */
    private $classes;

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

        $result = [];
        /** @var Champ $class */
        foreach($classes as $class){
            $result[$class->getName()] = $class;
        }

        return $result;
    }

    public function calculateComp($data)
    {
        $buff['BloodlustHeroism'] = 0;
        $buff['AttackPower'] = 0;
        $buff['Intellect'] = 0;
        $buff['Stamina'] = 0;
        $buff['MagicDamage'] = 0;
        $buff['PhysicalDamage'] = 0;

        $count['CombatRess'] = 0;
        $count['DispelMagic'] = 0;
        $count['DispelDisease'] = 0;
        $count['DispelPoison'] = 0;
        $count['DispelCurse'] = 0;
        $count['RemoveEnrage'] = 0;
        $count['Purge'] = 0;
        $count['Interrupt'] = 0;

        $setup['TANK'] = 0;
        $setup['HEALER'] = 0;
        $setup['MDPS'] = 0;
        $setup['RDPS'] = 0;

        $this->classes = $this->getClasses();

        foreach($data as $d)
        {
            /** @var Champ $class */
            $class = $this->classes[$d['champ']];

            $buffs = $class->getBuffs();
            foreach($buffs as $b){
                /** @var Buff $b */
                switch(true){
                    case $b instanceof AttackPower:
                        $buff['AttackPower']++;
                        break;
                    case $b instanceof Intellect:
                        $buff['Intellect']++;
                        break;
                    case $b instanceof Stamina:
                        $buff['Stamina']++;
                        break;
                    case $b instanceof MagicDamage:
                        $buff['MagicDamage']++;
                        break;
                    case $b instanceof PhysicalDamage:
                        $buff['PhysicalDamage']++;
                        break;
                    case $b instanceof BloodlustHeroism:
                        $buff['BloodlustHeroism']++;
                        break;
                }
            }

            $specs = $class->getSpecs();

            /** @var Spec $spec */
            $spec = $specs[$d['spec']];

            $count['CombatRess'] += (int) $spec->isCombatResurrection();
            $count['DispelMagic'] += (int) $spec->isDispelMagic();
            $count['DispelDisease'] += (int) $spec->isDispelDisease();
            $count['DispelPoison'] += (int) $spec->isDispelPoison();
            $count['DispelCurse'] += (int) $spec->isDispelCurse();
            $count['RemoveEnrage'] += (int) $spec->isRemoveEnrage();
            $count['Purge'] += (int) $spec->isPurge();
            $count['Interrupt'] += (int) $spec->isInterrupt();

            $setup[$spec->getType()]++;
        }

        echo json_encode([
            'buffs' => $buff,
            'counts' => $count,
            'setup' => $setup
        ]);
    }
}