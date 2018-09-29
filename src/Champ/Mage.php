<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:15
 */

namespace Raid\Champ;

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
        $this->specs[] = new Arcane();
        $this->specs[] = new Fire();
        $this->specs[] = new Frost();
        $this->buffs[] = new Intellect('Arcane Intellect');
    }
}