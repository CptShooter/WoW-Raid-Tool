<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:31
 */

namespace Raid\Champ\Spec\Druid;

use Raid\Champ\Spec\Spec;

class Feral extends Spec
{
    public function __construct()
    {
        $this->name = 'Feral';
        $this->icon = 'https://wow.zamimg.com/images/wow/icons/tiny/ability_druid_catform.gif';
        $this->type = 'MDPS';
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