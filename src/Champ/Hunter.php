<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:15
 */

namespace Raid\Champ;

use Raid\Champ\Buffs\BloodlustHeroism;
use Raid\Champ\Spec\Hunter\BeastMastery;
use Raid\Champ\Spec\Hunter\Marksmanship;
use Raid\Champ\Spec\Hunter\Survival;

class Hunter extends Champ
{
    public function __construct()
    {
        $this->name = 'Hunter';
        $this->classColor = [170 , 211, 114];
        $this->specs['Beast Mastery'] = new BeastMastery();
        $this->specs['Marksmanship'] = new Marksmanship();
        $this->specs['Survival'] = new Survival();
        $this->buffs[] = new BloodlustHeroism('Ancient Hysteria');
    }
}