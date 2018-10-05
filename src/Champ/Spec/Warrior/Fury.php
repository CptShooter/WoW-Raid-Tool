<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:31
 */

namespace Raid\Champ\Spec\Warrior;

use Raid\Champ\Spec\Spec;

class Fury extends Spec
{
    public function __construct()
    {
        $this->tag = 'q';
        $this->name = 'Fury';
        $this->icon = 'ability_warrior_innerrage.gif';
        $this->type = 'MDPS';
        $this->dispelCurse          = false;
        $this->dispelDisease        = false;
        $this->dispelPoison         = false;
        $this->dispelMagic          = false;
        $this->removeEnrage         = false;
        $this->combatResurrection   = false;
        $this->purge                = false;
        $this->interrupt            = true;
    }
}