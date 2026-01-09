<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Theme theme_sos - Version file
 *
 * @package    theme_theme_sos
 * @copyright  2024 Damien Will <damien.will@trainterra.fr>
 *             sur base du plugin développé par Daniel Poggenpohl <daniel.poggenpohl@fernuni-hagen.de> and Alexander Bias <bias@alexanderbias.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// Nom du plugin
$plugin->component = 'theme_theme_sos';
// Version du plugin
$plugin->version = 2025103102;
// Release du plugin
$plugin->release = 'v5.1-r1';
// Version minimum de Moodle
$plugin->requires = 2024100700;
// Version minimum du thème parent
$plugin->dependencies = ['theme_boost_union' => 2025041427];
