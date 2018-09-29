<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:31
 */

namespace Raid\Champ\Spec\Mage;

use Raid\Champ\Spec\Spec;

class Fire extends Spec
{
    public function __construct()
    {
        $this->name = 'Fire';
        $this->icon = 'https://wow.zamimg.com/images/wow/icons/tiny/spell_fire_firebolt02.gif';
        $this->type = 'RDPS';
        $this->dispelCurse          = true;
        $this->dispelDisease        = false;
        $this->dispelPoison         = false;
        $this->dispelMagic          = false;
        $this->removeEnrage         = false;
        $this->combatResurrection   = false;
        $this->purge                = true;
        $this->interrupt            = true;
    }
}