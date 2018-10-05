<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:31
 */

namespace Raid\Champ\Spec\Mage;

use Raid\Champ\Spec\Spec;

class Arcane extends Spec
{
    public function __construct()
    {
        $this->tag = 'm';
        $this->name = 'Arcane';
        $this->icon = 'spell_holy_magicalsentry.gif';
        $this->type = 'RDPS';
        $this->dispelCurse          = true;
        $this->dispelDisease        = false;
        $this->dispelPoison         = false;
        $this->dispelMagic          = false;
        $this->removeEnrage         = false;
        $this->combatResurrection   = false;
        $this->purge                = true;
        $this->interrupt            = true;
    }
}