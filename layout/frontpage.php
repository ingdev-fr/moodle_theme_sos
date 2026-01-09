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
 * A one column layout pour la page d'accueil custom du thème TrainTerra.
 *
 * @package   theme_theme_sos
 * @copyright 2025 Damien Will
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$bodyattributes = $OUTPUT->body_attributes([]);
$primary = new core\navigation\output\primary($PAGE);
$renderer = $PAGE->get_renderer('core');
$primarymenu = $primary->export_for_template($renderer);
$accountcreateurl = new moodle_url('/login/index.php');
$contacturl = 'https://trainterra.fr/contact';
$heroimageurl = new moodle_url('theme/theme_sos/pix/theme_sos/trainterra-front-image.png');
$easyimageurl = new moodle_url('theme/theme_sos/pix/logo-easygenerator-white.png');
$logofooterurl = new moodle_url('theme/theme_sos/pix/logo-trainterra-lms-4-small.png');
$featuresimagerurl = new moodle_url('theme/theme_sos/pix/etudiants-devant-pc.png');

// Récupération de la langue courante
$currentlang = current_language(); // Par exemple : 'fr', 'en', 'pt'

$templatecontext = [
    'sitename' => format_string($SITE->shortname, true, ['context' => context_course::instance(SITEID), "escape" => false]),
    'output' => $OUTPUT,
    'bodyattributes' => $bodyattributes,
    'primarymoremenu' => $primarymenu['moremenu'],
    'usermenu' => $primarymenu['user'],
    'langmenu' => $primarymenu['lang'],
    'currentlang' => $currentlang,
    'isFrench' => ($currentlang === 'fr'),
    'isEnglish' => ($currentlang === 'en'),
    'isPortuguese' => ($currentlang === 'pt'),
    'accountcreateurl' => $accountcreateurl,
    'contacturl' => $contacturl,
    'easyimageurl' => $easyimageurl,
    'heroimageurl' => $heroimageurl,
    'logofooterurl' => $logofooterurl,
    'featuresimagerurl' => $featuresimagerurl,

];

if (empty($PAGE->layout_options['noactivityheader'])) {
    $header = $PAGE->activityheader;
    $renderer = $PAGE->get_renderer('core');
    $templatecontext['headercontent'] = $header->export_for_template($renderer);
}

echo $OUTPUT->render_from_template('theme_theme_sos/custom_frontpage/frontpage', $templatecontext);
