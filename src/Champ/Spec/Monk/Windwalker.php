<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:31
 */

namespace Raid\Champ\Spec\Monk;

use Raid\Champ\Spec\Spec;

class Windwalker extends Spec
{
    public function __construct()
    {
        $this->tag = 's';
        $this->name = 'Windwalker';
        $this->icon = 'spell_monk_windwalker_spec.jpg';
        $this->type = 'MDPS';
        $this->dispelCurse          = false;
        $this->dispelDisease        = true;
        $this->dispelPoison         = true;
        $this->dispelMagic          = false;
        $this->dispelBleed          = false;
        $this->removeEnrage         = false;
        $this->combatResurrection   = false;
        $this->purge                = false;
        $this->interrupt            = true;
    }
}