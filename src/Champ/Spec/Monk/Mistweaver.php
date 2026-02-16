<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:31
 */

namespace Raid\Champ\Spec\Monk;

use Raid\Champ\Spec\Spec;

class Mistweaver extends Spec
{
    public function __construct()
    {
        $this->tag = 'r';
        $this->name = 'Mistweaver';
        $this->icon = 'spell_monk_mistweaver_spec.jpg';
        $this->type = 'HEALER';
        $this->dispelCurse          = false;
        $this->dispelDisease        = true;
        $this->dispelPoison         = true;
        $this->dispelMagic          = true;
        $this->dispelBleed          = false;
        $this->removeEnrage         = false;
        $this->combatResurrection   = false;
        $this->purge                = false;
        $this->interrupt            = false;
    }
}