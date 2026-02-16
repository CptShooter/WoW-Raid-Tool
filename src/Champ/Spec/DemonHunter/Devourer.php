<?php
/**
 * Created for WoW Midnight 12.0.0
 * Date: 16.02.2026
 */

namespace Raid\Champ\Spec\DemonHunter;

use Raid\Champ\Spec\Spec;

class Devourer extends Spec
{
    public function __construct()
    {
        $this->tag = 'D';
        $this->name = 'Devourer';
        $this->icon = 'classicon_demonhunter_void.jpg';
        $this->type = 'MDPS';
        $this->dispelCurse          = false;
        $this->dispelDisease        = false;
        $this->dispelPoison         = false;
        $this->dispelMagic          = false;
        $this->dispelBleed          = false;
        $this->removeEnrage         = false;
        $this->combatResurrection   = false;
        $this->purge                = true;
        $this->interrupt            = true;
    }
}
