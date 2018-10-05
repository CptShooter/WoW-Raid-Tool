<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:31
 */

namespace Raid\Champ\Spec\Warlock;

use Raid\Champ\Spec\Spec;

class Affliction extends Spec
{
    public function __construct()
    {
        $this->tag = '6';
        $this->name = 'Affliction';
        $this->icon = 'spell_shadow_deathcoil.gif';
        $this->type = 'RDPS';
        $this->dispelCurse          = false;
        $this->dispelDisease        = false;
        $this->dispelPoison         = false;
        $this->dispelMagic          = true;
        $this->removeEnrage         = false;
        $this->combatResurrection   = true;
        $this->purge                = false;
        $this->interrupt            = true;
    }
}