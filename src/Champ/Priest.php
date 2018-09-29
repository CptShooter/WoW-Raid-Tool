<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:15
 */

namespace Raid\Champ;

use Raid\Champ\Buffs\Stamina;
use Raid\Champ\Spec\Priest\Discipline;
use Raid\Champ\Spec\Priest\Holy;
use Raid\Champ\Spec\Priest\Shadow;

class Priest extends Champ
{
    public function __construct()
    {
        $this->name = 'Priest';
        $this->classColor = [255 , 255, 255];
        $this->specs[] = new Discipline();
        $this->specs[] = new Holy();
        $this->specs[] = new Shadow();
        $this->buffs[] = new Stamina('Power Word: Fortitude');
    }
}