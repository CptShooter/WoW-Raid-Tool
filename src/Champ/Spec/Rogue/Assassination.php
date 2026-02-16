<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:31
 */

namespace Raid\Champ\Spec\Rogue;

use Raid\Champ\Spec\Spec;

class Assassination extends Spec
{
    public function __construct()
    {
        $this->tag = 'z';
        $this->name = 'Assassination';
        $this->icon = 'ability_rogue_deadlybrew.jpg';
        $this->type = 'MDPS';
        $this->dispelCurse          = false;
        $this->dispelDisease        = false;
        $this->dispelPoison         = false;
        $this->dispelMagic          = false;
        $this->dispelBleed          = false;
        $this->removeEnrage         = false;
        $this->combatResurrection   = false;
        $this->purge                = false;
        $this->interrupt            = true;
    }
}