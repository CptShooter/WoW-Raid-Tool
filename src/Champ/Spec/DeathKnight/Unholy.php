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
        $this->tag = 'c';
        $this->name = 'Unholy';
        $this->type = 'MDPS';
        $this->icon = 'spell_deathknight_unholypresence.jpg';
        $this->dispelCurse          = false;
        $this->dispelDisease        = false;
        $this->dispelPoison         = false;
        $this->dispelMagic          = false;
        $this->dispelBleed          = false;
        $this->removeEnrage         = false;
        $this->combatResurrection   = true;
        $this->purge                = false;
        $this->interrupt            = true;
    }
}