<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:31
 */

namespace Raid\Champ\Spec\Druid;

use Raid\Champ\Spec\Spec;

class Guardian extends Spec
{
    public function __construct()
    {
        $this->tag = 'h';
        $this->name = 'Guardian';
        $this->icon = 'ability_racial_bearform.gif';
        $this->type = 'TANK';
        $this->dispelCurse          = true;
        $this->dispelDisease        = false;
        $this->dispelPoison         = true;
        $this->dispelMagic          = false;
        $this->removeEnrage         = false;
        $this->combatResurrection   = true;
        $this->purge                = false;
        $this->interrupt            = true;
    }
}