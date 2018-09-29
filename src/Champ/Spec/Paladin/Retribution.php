<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:31
 */

namespace Raid\Champ\Spec\Paladin;

use Raid\Champ\Spec\Spec;

class Retribution extends Spec
{
    public function __construct()
    {
        $this->name = 'Retribution';
        $this->icon = 'https://wow.zamimg.com/images/wow/icons/tiny/spell_holy_auraoflight.gif';
        $this->type = 'MDPS';
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