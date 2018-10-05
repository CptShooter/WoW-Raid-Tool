<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:31
 */

namespace Raid\Champ\Spec\Hunter;

use Raid\Champ\Spec\Spec;

class Marksmanship extends Spec
{
    public function __construct()
    {
        $this->tag = 'k';
        $this->name = 'Marksmanship';
        $this->icon = 'ability_hunter_focusedaim.gif';
        $this->type = 'RDPS';
        $this->dispelCurse          = false;
        $this->dispelDisease        = false;
        $this->dispelPoison         = false;
        $this->dispelMagic          = false;
        $this->removeEnrage         = false;
        $this->combatResurrection   = false;
        $this->purge                = false;
        $this->interrupt            = true;
    }
}