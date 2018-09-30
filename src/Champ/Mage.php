<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:15
 */

namespace Raid\Champ;

use Raid\Champ\Buffs\BloodlustHeroism;
use Raid\Champ\Buffs\Intellect;
use Raid\Champ\Spec\Mage\Arcane;
use Raid\Champ\Spec\Mage\Fire;
use Raid\Champ\Spec\Mage\Frost;

class Mage extends Champ
{
    public function __construct()
    {
        $this->name = 'Mage';
        $this->classColor = [104 , 204, 239];
        $this->specs['Arcane'] = new Arcane();
        $this->specs['Fire'] = new Fire();
        $this->specs['Frost'] = new Frost();
        $this->buffs[] = new Intellect('Arcane Intellect');
        $this->buffs[] = new BloodlustHeroism('Time Warp');
    }
}