<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:15
 */

namespace Raid\Champ;

use Raid\Champ\Buffs\MagicDamage;
use Raid\Champ\Spec\DemonHunter\Havoc;
use Raid\Champ\Spec\DemonHunter\Vengeance;

class DemonHunter extends Champ
{
    public function __construct()
    {
        $this->name = 'Demon Hunter';
        $this->classColor = [163 , 48, 201];
        $this->specs['Havoc'] = new Havoc();
        $this->specs['Vengeance'] = new Vengeance();
        $this->buffs[] = new MagicDamage('Chaos Brand');
    }
}