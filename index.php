<?php
require_once 'vendor/autoload.php';

$raid = new \Raid\Composition();
$classes = $raid->getClasses();
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/ui-darkness/jquery-ui.css">
    <link rel="stylesheet" href="main.css">

    <title>Raid Composition - WoW 8.0.1</title>
</head>
<body>
<div class="container">
    <div class="row" id="menu">
        <div class="col-6" id="logo">
            <h2>Raid Composition</h2>
        </div>
        <div class="col-6" id="info">
            <div class="row">
                <div class="col">
                </div>
                <div class="col-3">
                    <a href="#" id="clear">Clear</a>
                </div>
                <div class="col-5">
                    <span>World of Warcraft 8.0.1</span>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="composition">
        <div class="col">
            <div id="champions">
                <?php /** @var \Raid\Champ\Champ $champ */ ?>
                <?php foreach($classes as $champ) { ?>
                    <?php /** @var \Raid\Champ\Spec\Spec $spec */ ?>
                    <?php foreach($champ->getSpecs() as $spec) { ?>
                        <div class="champ" data-champ="<?= $champ->getName(); ?>" data-spec="<?= $spec->getName(); ?>" style="color: <?= $champ->getClassColor(); ?>">
                            <div class="spec">
                                <img src="<?= $spec->getIcon(); ?>">
                                <div class="name"><?= $spec->getName(); ?></div>
                            </div>
                        </div>
                    <?php } ?>
                        <div class="space"></div>
                <?php } ?>
            </div>
        </div>
        <div class="col-6">
            <?php for($i = 1, $g = 1; $i <= 4; $i++) { ?>
                <div class="row">
                    <?php for($j = 1; $j <= 2; $j++, $g++) { ?>
                        <div class="col group <?php if($g%2 != 0) echo 'left'; else echo 'right'; ?>">
                            <div class="group-name">Group <?= $g; ?></div>
                            <ul>
                            <?php for($k = 1; $k <= 5; $k++){ ?>
                                <li class="spot"></li>
                            <?php } ?>
                            </ul>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
        <div class="col">
            <div class="buffs-name">
                <span>Buffs</span>
            </div>
            <div class="buffs">
                <div><span class="number" id="Intellect">0</span> Intellect</div>
                <div><span class="number" id="Stamina">0</span> Stamina</div>
                <div><span class="number" id="AttackPower">0</span> Attack Power</div>
                <div><span class="number" id="MagicDamage">0</span> Magic Damage</div>
                <div><span class="number" id="PhysicalDamage">0</span> Physical Damage</div>
            </div>
            <div class="count-name">
                <span>Count</span>
            </div>
            <div class="count">
                <div><span class="number" id="CombatRess">0</span> Combat Resurrections</div>
                <div><span class="number" id="DispelCurse">0</span> Dispel Curse</div>
                <div><span class="number" id="DispelDisease">0</span> Dispel Disease</div>
                <div><span class="number" id="DispelMagic">0</span> Dispel Magic</div>
                <div><span class="number" id="DispelPoison">0</span> Dispel Poison</div>
                <div><span class="number" id="RemoveEnrage">0</span> Remove Enrage</div>
                <div><span class="number" id="Interrupt">0</span> Interrupts</div>
                <div><span class="number" id="Purge">0</span> Purges</div>
            </div>
            <div class="setup-name">
                <span>Setup</span>
            </div>
            <div class="setup">
                <div><span class="number" id="TANK">0</span> Tanks</div>
                <div><span class="number" id="HEALER">0</span> Healers</div>
                <div><span class="number" id="MDPS">0</span> Melee DPS</div>
                <div><span class="number" id="RDPS">0</span> Range DPS</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col"></div>
        <div class="col-8" id="footer">
            <span>Created by <a href="https://cptshooter.pl">CptShooter</a></span> |
            <span>Inspired by <a href="https://raidcomp.mmo-champion.com/">RaidComp</a></span><br/>
            <span>Powered by <a href="https://jquery.com/">jQuery</a>, <a href="https://jqueryui.com/">jQueryUI</a> and icons from <a href="https://www.wowhead.com">WoWHead</a></span>
        </div>
        <div class="col"></div>
    </div>
</div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
<script src="main.js"></script>
</body>
</html>