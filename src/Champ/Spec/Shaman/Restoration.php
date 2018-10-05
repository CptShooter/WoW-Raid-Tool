<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:31
 */

namespace Raid\Champ\Spec\Shaman;

use Raid\Champ\Spec\Spec;

class Restoration extends Spec
{
    public function __construct()
    {
        $this->tag = '5';
        $this->name = 'Restoration';
        $this->icon = 'spell_nature_magicimmunity.gif';
        $this->type = 'HEALER';
        $this->dispelCurse          = true;
        $this->dispelDisease        = false;
        $this->dispelPoison         = false;
        $this->dispelMagic          = true;
        $this->removeEnrage         = false;
        $this->combatResurrection   = false;
        $this->purge                = true;
        $this->interrupt            = true;
    }
}