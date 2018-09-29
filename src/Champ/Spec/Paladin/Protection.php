<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:31
 */

namespace Raid\Champ\Spec\Paladin;

use Raid\Champ\Spec\Spec;

class Protection extends Spec
{
    public function __construct()
    {
        $this->name = 'Protection';
        $this->icon = 'https://wow.zamimg.com/images/wow/icons/tiny/ability_paladin_shieldofthetemplar.gif';
        $this->type = 'TANK';
        $this->dispelCurse          = false;
        $this->dispelDisease        = true;
        $this->dispelPoison         = true;
        $this->dispelMagic          = false;
        $this->removeEnrage         = false;
        $this->combatResurrection   = false;
        $this->purge                = false;
        $this->interrupt            = true;
    }
}