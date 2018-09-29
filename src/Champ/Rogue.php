<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:15
 */

namespace Raid\Champ;

use Raid\Champ\Spec\Rogue\Assassination;
use Raid\Champ\Spec\Rogue\Outlaw;
use Raid\Champ\Spec\Rogue\Subtelty;

class Rogue extends Champ
{
    public function __construct()
    {
        $this->name = 'Rogue';
        $this->classColor = [255 , 244, 104];
        $this->specs['Assassination'] = new Assassination();
        $this->specs['Outlaw'] = new Outlaw();
        $this->specs['Subtelty'] = new Subtelty();
        $this->buffs = [];
    }
}