<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:15
 */

namespace Raid\Champ;

use Raid\Champ\Spec\Druid\Balance;
use Raid\Champ\Spec\Druid\Feral;
use Raid\Champ\Spec\Druid\Guardian;
use Raid\Champ\Spec\Druid\Restoration;

class Druid extends Champ
{
    public function __construct()
    {
        $this->name = 'Druid';
        $this->classColor = [255 , 124, 10];
        $this->specs['Balance'] = new Balance();
        $this->specs['Feral'] = new Feral();
        $this->specs['Guardian'] = new Guardian();
        $this->specs['Restoration'] = new Restoration();
        $this->buffs = [];
    }
}