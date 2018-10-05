<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:31
 */

namespace Raid\Champ\Spec\Warlock;

use Raid\Champ\Spec\Spec;

class Demonology extends Spec
{
    public function __construct()
    {
        $this->tag = '7';
        $this->name = 'Demonology';
        $this->icon = 'spell_shadow_metamorphosis.gif';
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