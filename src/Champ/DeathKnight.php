<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:15
 */

namespace Raid\Champ;

use Raid\Champ\Spec\DeathKnight\Blood;
use Raid\Champ\Spec\DeathKnight\Frost;
use Raid\Champ\Spec\DeathKnight\Unholy;

class DeathKnight extends Champ
{
    public function __construct()
    {
        $this->name = 'Death Knight';
        $this->classColor = [196 , 30, 59];
        $this->specs[] = new Blood();
        $this->specs[] = new Frost();
        $this->specs[] = new Unholy();
        $this->buffs = [];
    }
}