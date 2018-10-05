<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:31
 */

namespace Raid\Champ\Spec\Hunter;

use Raid\Champ\Spec\Spec;

class BeastMastery extends Spec
{
    public function __construct()
    {
        $this->tag = 'j';
        $this->name = 'Beast Mastery';
        $this->icon = 'ability_hunter_bestialdiscipline.gif';
        $this->type = 'RDPS';
        $this->dispelCurse          = false;
        $this->dispelDisease        = false;
        $this->dispelPoison         = false;
        $this->dispelMagic          = false;
        $this->removeEnrage         = true;
        $this->combatResurrection   = false;
        $this->purge                = true;
        $this->interrupt            = true;
    }
}