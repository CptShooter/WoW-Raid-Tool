<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:31
 */

namespace Raid\Champ\Spec\Shaman;

use Raid\Champ\Spec\Spec;

class Enhancement extends Spec
{
    public function __construct()
    {
        $this->tag = '4';
        $this->name = 'Enhancement';
        $this->icon = 'spell_nature_lightningshield.gif';
        $this->type = 'MDPS';
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