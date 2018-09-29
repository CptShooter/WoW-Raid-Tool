<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:31
 */

namespace Raid\Champ\Spec\DemonHunter;

use Raid\Champ\Spec\Spec;

class Vengeance extends Spec
{
    public function __construct()
    {
        $this->name = 'Vengeance';
        $this->icon = 'https://wow.zamimg.com/images/wow/icons/tiny/ability_demonhunter_spectank.gif';
        $this->type = 'TANK';
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