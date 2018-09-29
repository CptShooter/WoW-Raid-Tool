<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:15
 */

namespace Raid\Champ;

use Raid\Champ\Buffs\PhysicalDamage;
use Raid\Champ\Spec\Monk\Brewmaster;
use Raid\Champ\Spec\Monk\Mistweaver;
use Raid\Champ\Spec\Monk\Windwalker;

class Monk extends Champ
{
    public function __construct()
    {
        $this->name = 'Monk';
        $this->classColor = [0 , 132, 103];
        $this->specs['Brewmaster'] = new Brewmaster();
        $this->specs['Mistweaver'] = new Mistweaver();
        $this->specs['Windwalker'] = new Windwalker();
        $this->buffs[] = new PhysicalDamage('Mystic Touch');
    }
}