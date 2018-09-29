<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:15
 */

namespace Raid\Champ;

use Raid\Champ\Spec\Warlock\Affliction;
use Raid\Champ\Spec\Warlock\Demonology;
use Raid\Champ\Spec\Warlock\Destruction;

class Warlock extends Champ
{
    public function __construct()
    {
        $this->name = 'Warlock';
        $this->classColor = [147 , 130, 201];
        $this->specs['Affliction'] = new Affliction();
        $this->specs['Demonology'] = new Demonology();
        $this->specs['Destruction'] = new Destruction();
        $this->buffs = [];
    }
}