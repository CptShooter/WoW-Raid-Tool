# WoW Raid Composition Tool

A web-based tool for planning World of Warcraft raid compositions for patch 12.0.0 (Midnight).

![World of Warcraft](https://img.shields.io/badge/WoW-12.0.0-blue)
![PHP](https://img.shields.io/badge/PHP-7.0+-purple)
![License](https://img.shields.io/badge/license-MIT-green)

## Features

- **Drag & Drop Interface** - Easily build your raid composition by dragging class specializations into raid groups
- **40-Player Raids** - Plan compositions for full mythic raids (8 groups of 5 players)
- **Buff Coverage** - Track raid-wide buffs including Bloodlust/Heroism, Intellect, Stamina, Attack Power, and damage buffs
- **Utility Tracking** - Monitor available utilities like combat resurrections, dispels, interrupts, and purges
- **Composition Analysis** - See your tank/healer/DPS breakdown in real-time
- **Shareable Links** - Share your composition via URL

## Installation

1. Clone the repository:
```bash
git clone https://github.com/yourusername/WoW-Raid-Tool.git
cd WoW-Raid-Tool
```

2. Install dependencies:
```bash
composer install
```

3. Start a local PHP server:
```bash
php -S localhost:8000
```

4. Open your browser and navigate to:
```
http://localhost:8000/index.php
```

## Usage

1. **Build Your Composition** - Drag class specializations from the left panel into the raid group slots
2. **Review Stats** - Check the right panel for buff coverage, utilities, and role distribution
3. **Share** - Click "Link" to generate a shareable URL of your composition
4. **Clear** - Click "Clear" to reset and start over

## Technologies

- **Backend**: PHP with Composer (PSR-4 autoloading)
- **Frontend**: jQuery, jQuery UI
- **Styling**: Bootstrap 4, Custom CSS

## Credits

- **Created by**: [CptShooter](https://cptshooter.pl)
- **Inspired by**: [RaidComp by MMO-Champion](https://raidcomp.mmo-champion.com/)
- **Icons**: World of Warcraft © Blizzard Entertainment

## License

This project is open source and available under the MIT License.
