<?php
/**
 * Created for WoW Midnight 12.0.0
 * Date: 16.02.2026
 */

namespace Raid\Champ\Spec\Evoker;

use Raid\Champ\Spec\Spec;

class Preservation extends Spec
{
    public function __construct()
    {
        $this->tag = 'P';
        $this->name = 'Preservation';
        $this->icon = 'classicon_evoker_preservation.jpg';
        $this->type = 'HEALER';
        $this->dispelCurse          = true;
        $this->dispelDisease        = true;
        $this->dispelPoison         = true;
        $this->dispelMagic          = true;
        $this->dispelBleed          = true;
        $this->removeEnrage         = true;
        $this->combatResurrection   = false;
        $this->purge                = false;
        $this->interrupt            = false;
    }
}
