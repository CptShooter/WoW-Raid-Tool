<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:31
 */

namespace Raid\Champ\Spec\Paladin;

use Raid\Champ\Spec\Spec;

class Holy extends Spec
{
    public function __construct()
    {
        $this->tag = 't';
        $this->name = 'Holy';
        $this->icon = 'spell_holy_holybolt.jpg';
        $this->type = 'HEALER';
        $this->dispelCurse          = false;
        $this->dispelDisease        = true;
        $this->dispelPoison         = true;
        $this->dispelMagic          = true;
        $this->dispelBleed          = false;
        $this->removeEnrage         = false;
        $this->combatResurrection   = true;
        $this->purge                = false;
        $this->interrupt            = false;
    }
}