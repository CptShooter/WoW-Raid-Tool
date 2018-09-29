<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:31
 */

namespace Raid\Champ\Spec\Warrior;

use Raid\Champ\Spec\Spec;

class Arms extends Spec
{
    public function __construct()
    {
        $this->name = 'Arms';
        $this->icon = 'https://wow.zamimg.com/images/wow/icons/tiny/ability_warrior_savageblow.gif';
        $this->type = 'MDPS';
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