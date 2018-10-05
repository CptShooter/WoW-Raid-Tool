<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:31
 */

namespace Raid\Champ\Spec\Druid;

use Raid\Champ\Spec\Spec;

class Restoration extends Spec
{
    public function __construct()
    {
        $this->tag = 'i';
        $this->name = 'Restoration';
        $this->icon = 'spell_nature_healingtouch.gif';
        $this->type = 'HEALER';
        $this->dispelCurse          = true;
        $this->dispelDisease        = false;
        $this->dispelPoison         = true;
        $this->dispelMagic          = false;
        $this->removeEnrage         = true;
        $this->combatResurrection   = true;
        $this->purge                = false;
        $this->interrupt            = false;
    }
}