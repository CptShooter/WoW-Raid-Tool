# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

A World of Warcraft Raid Composition planning tool for patch 8.0.1. Users can drag and drop class specializations into a 40-player raid grid, and the tool calculates available buffs, utility abilities, and composition breakdown (tanks/healers/DPS).

## Setup Commands

```bash
# Install PHP dependencies
composer install

# Run a local PHP server for testing
php -S localhost:8000
```

The application is accessed at `index.php` in a web browser.

## Development Tools

**MCP Browser Access**: Chrome DevTools MCP is configured, allowing direct browser inspection and testing. Use MCP tools to:
- Take snapshots and screenshots of the running application
- Test drag-and-drop functionality
- Debug AJAX calls to Endpoint.php
- Inspect DOM structure and JavaScript interactions

## Architecture

### Three-Layer Class Hierarchy

1. **Champ (Character Class)**
   - Abstract base: `src/Champ/Champ.php`
   - 12 concrete classes: DeathKnight, DemonHunter, Druid, Hunter, Mage, Monk, Paladin, Priest, Rogue, Shaman, Warlock, Warrior
   - Each class defines: name, classColor (RGB array), buffs array, specs array
   - Example: `src/Champ/Mage.php`

2. **Spec (Specialization)**
   - Abstract base: `src/Champ/Spec/Spec.php`
   - Organized in subdirectories by class: `src/Champ/Spec/Mage/Fire.php`
   - Each spec defines in constructor:
     - `tag`: Single-character identifier (used for URL encoding)
     - `name`: Display name
     - `icon`: GIF filename from `/img/`
     - `type`: TANK, HEALER, MDPS (melee DPS), or RDPS (ranged DPS)
     - Utility booleans: dispelCurse, dispelDisease, dispelPoison, dispelMagic, removeEnrage, combatResurrection, purge, interrupt

3. **Buff System**
   - Abstract base: `src/Champ/Buffs/Buff.php`
   - Six buff types: AttackPower, BloodlustHeroism, Intellect, MagicDamage, PhysicalDamage, Stamina
   - Buffs are assigned at the Champ level, not per-spec
   - Composition calculates buff coverage using instanceof checks

### Frontend-Backend Flow

- **index.php**: Main HTML page, renders initial state from `Composition::getClasses()` and loads composition from URL param `?c=` if present
- **main1.3.js**: jQuery UI drag-and-drop, triggers AJAX call to Endpoint.php after each composition change
- **Endpoint.php**: Receives `type=calculateComp` with array of `{champ, spec, grp}` objects, delegates to `Composition::calculateComp()`
- **src/Composition.php**:
  - `getClasses()`: Instantiates all 12 classes
  - `calculateComp()`: Counts buffs, utilities, and role breakdown; returns JSON with shareable link
  - `getFromLink()`: Decodes URL parameter `?c=` into composition using spec tags

### URL Sharing System

Compositions are encoded in the `?c=` parameter as a 40-character string where each character is a spec's tag (or `0` for empty slot). Position in string = raid slot number (1-40).

Example: `?c=a0000000000000000000000000000000000000n0` loads spec with tag 'a' in slot 1 and tag 'n' in slot 40.

## Adding New Content

### Add a New Spec to Existing Class

1. Create new spec class in `src/Champ/Spec/{ClassName}/{SpecName}.php`
2. Choose an unused single-character tag (check existing specs)
3. Set all properties in constructor: tag, name, icon, type, and 8 utility booleans
4. Add spec instantiation to parent Champ class constructor
5. Add corresponding icon GIF to `/img/` directory

### Add a New Character Class

1. Create class file `src/Champ/{ClassName}.php` extending `Champ`
2. Set name, classColor RGB array, instantiate all specs, add applicable buffs
3. Create spec directory `src/Champ/Spec/{ClassName}/`
4. Create 2-4 spec classes with unique tags
5. Add class instantiation to `Composition::getClasses()`
6. Add spec icons to `/img/` directory

### Add a New Buff Type

1. Create buff class in `src/Champ/Buffs/{BuffName}.php` extending `Buff`
2. Add buff counter initialization in `Composition::calculateComp()`
3. Add instanceof case in the buff-counting switch statement
4. Update index.php to display the new buff counter
5. Update JavaScript in main1.3.js to handle the new buff in the response

## Coding Conventions

- PSR-4 autoloading with `Raid\` namespace prefix
- Class properties use protected visibility
- All properties defined with PHPDoc type hints
- Spec tags must be unique single characters across all classes
- Class colors stored as RGB integer arrays, converted to CSS rgb() strings via getters
- Icon filenames reference ability images from World of Warcraft
