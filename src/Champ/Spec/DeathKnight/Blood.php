<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:31
 */

namespace Raid\Champ\Spec\DeathKnight;

use Raid\Champ\Spec\Spec;

class Blood extends Spec
{
    public function __construct()
    {
        $this->tag = 'a';
        $this->name = 'Blood';
        $this->icon = 'spell_deathknight_bloodpresence.gif';
        $this->type = 'TANK';
        $this->dispelCurse          = false;
        $this->dispelDisease        = false;
        $this->dispelPoison         = false;
        $this->dispelMagic          = false;
        $this->removeEnrage         = false;
        $this->combatResurrection   = true;
        $this->purge                = true;
        $this->interrupt            = true;
    }
}