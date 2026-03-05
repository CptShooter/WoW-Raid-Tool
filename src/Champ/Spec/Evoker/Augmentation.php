<?php

namespace Raid\Champ\Spec\Evoker;

use Raid\Champ\Spec\Spec;

class Augmentation extends Spec
{
    public function __construct()
    {
        $this->tag = 'A';
        $this->name = 'Augmentation';
        $this->icon = 'classicon_evoker_augmentation.jpg';
        $this->type = 'RDPS';
        $this->dispelCurse          = false;
        $this->dispelDisease        = false;
        $this->dispelPoison         = true;
        $this->dispelMagic          = false;
        $this->dispelBleed          = false;
        $this->removeEnrage         = true;
        $this->combatResurrection   = false;
        $this->purge                = false;
        $this->interrupt            = true;
    }
}
