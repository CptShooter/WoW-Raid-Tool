<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:31
 */

namespace Raid\Champ\Spec\DeathKnight;

use Raid\Champ\Spec\Spec;

class Unholy extends Spec
{
    public function __construct()
    {
        $this->name = 'Unholy';
        $this->type = 'MDPS';
        $this->icon = 'https://wow.zamimg.com/images/wow/icons/tiny/spell_deathknight_unholypresence.gif';
        $this->dispelCurse          = false;
        $this->dispelDisease        = false;
        $this->dispelPoison         = false;
        $this->dispelMagic          = false;
        $this->removeEnrage         = false;
        $this->combatResurrection   = true;
        $this->purge                = true;
        $this->interrupt            = true;
    }
}