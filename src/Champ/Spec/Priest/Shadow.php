<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:31
 */

namespace Raid\Champ\Spec\Priest;

use Raid\Champ\Spec\Spec;

class Shadow extends Spec
{
    public function __construct()
    {
        $this->tag = 'y';
        $this->name = 'Shadow';
        $this->icon = 'spell_shadow_shadowwordpain.jpg';
        $this->type = 'RDPS';
        $this->dispelCurse          = false;
        $this->dispelDisease        = true;
        $this->dispelPoison         = false;
        $this->dispelMagic          = true;
        $this->dispelBleed          = false;
        $this->removeEnrage         = false;
        $this->combatResurrection   = false;
        $this->purge                = true;
        $this->interrupt            = true;
    }
}