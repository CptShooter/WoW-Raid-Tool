<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:31
 */

namespace Raid\Champ\Spec\Priest;

use Raid\Champ\Spec\Spec;

class Discipline extends Spec
{
    public function __construct()
    {
        $this->name = 'Discipline';
        $this->icon = 'https://wow.zamimg.com/images/wow/icons/tiny/spell_holy_powerwordshield.gif';
        $this->type = 'HEALER';
        $this->dispelCurse          = false;
        $this->dispelDisease        = true;
        $this->dispelPoison         = false;
        $this->dispelMagic          = true;
        $this->removeEnrage         = false;
        $this->combatResurrection   = false;
        $this->purge                = true;
        $this->interrupt            = false;
    }
}