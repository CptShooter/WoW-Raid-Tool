<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:15
 */

namespace Raid\Champ;

use Raid\Champ\Spec\Hunter\BeastMastery;
use Raid\Champ\Spec\Hunter\Marksmanship;
use Raid\Champ\Spec\Hunter\Survival;

class Hunter extends Champ
{
    public function __construct()
    {
        $this->name = 'Hunter';
        $this->classColor = [170 , 211, 114];
        $this->specs[] = new BeastMastery();
        $this->specs[] = new Marksmanship();
        $this->specs[] = new Survival();
        $this->buffs = [];
    }
}