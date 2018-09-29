<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:15
 */

namespace Raid\Champ;

use Raid\Champ\Buffs\AttackPower;
use Raid\Champ\Spec\Warrior\Arms;
use Raid\Champ\Spec\Warrior\Fury;
use Raid\Champ\Spec\Warrior\Protection;

class Warrior extends Champ
{
    public function __construct()
    {
        $this->name = 'Warrior';
        $this->classColor = [198 , 155, 109];
        $this->specs[] = new Arms();
        $this->specs[] = new Fury();
        $this->specs[] = new Protection();
        $this->buffs[] = new AttackPower('Battle Shout');
    }
}