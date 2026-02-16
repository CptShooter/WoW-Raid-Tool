<?php

namespace Raid\Champ;

use Raid\Champ\Buffs\BloodlustHeroism;
use Raid\Champ\Buffs\Movement;
use Raid\Champ\Spec\Evoker\Devastation;
use Raid\Champ\Spec\Evoker\Preservation;
use Raid\Champ\Spec\Evoker\Augmentation;

class Evoker extends Champ
{
    public function __construct()
    {
        $this->name = 'Evoker';
        $this->classColor = [51, 147, 127];
        $this->specs['Devastation'] = new Devastation();
        $this->specs['Preservation'] = new Preservation();
        $this->specs['Augmentation'] = new Augmentation();
        $this->buffs[] = new BloodlustHeroism('Fury of the Aspects');
        $this->buffs[] = new Movement('Blessing of the Bronze');
    }
}
