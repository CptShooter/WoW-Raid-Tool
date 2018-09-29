<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:31
 */

namespace Raid\Champ\Spec\Monk;

use Raid\Champ\Spec\Spec;

class Mistweaver extends Spec
{
    public function __construct()
    {
        $this->name = 'Mistweaver';
        $this->icon = 'https://wow.zamimg.com/images/wow/icons/tiny/monk_stance_wiseserpent.gif';
        $this->type = 'HEALER';
        $this->dispelCurse          = false;
        $this->dispelDisease        = true;
        $this->dispelPoison         = true;
        $this->dispelMagic          = true;
        $this->removeEnrage         = false;
        $this->combatResurrection   = false;
        $this->purge                = false;
        $this->interrupt            = false;
    }
}