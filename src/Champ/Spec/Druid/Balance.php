<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:31
 */

namespace Raid\Champ\Spec\Druid;

use Raid\Champ\Spec\Spec;

class Balance extends Spec
{
    public function __construct()
    {
        $this->tag = 'f';
        $this->name = 'Balance';
        $this->icon = 'spell_nature_starfall.gif';
        $this->type = 'RDPS';
        $this->dispelCurse          = true;
        $this->dispelDisease        = false;
        $this->dispelPoison         = true;
        $this->dispelMagic          = false;
        $this->removeEnrage         = true;
        $this->combatResurrection   = true;
        $this->purge                = false;
        $this->interrupt            = true;
    }
}