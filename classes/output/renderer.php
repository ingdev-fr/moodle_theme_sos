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

namespace theme_theme_sos\output;

/**
 * Renderer for theme_sos
 *
 * @package    theme_theme_sos
 * @copyright  2025 Damien Will <damien.will@trainterra.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class renderer extends \plugin_renderer_base {
    /**
     * Render the back to course button.
     *
     * @param \theme_theme_sos\output\backtocoursebutton $button The button to render.
     * @return string The rendered button.
     */
    // Cette méthode est utilisée pour afficher le bouton "Retour au cours"
    // dans le template de la page de cours.
    // Elle utilise le template 'theme_theme_sos/custom_course/backtocoursebutton'
    // pour afficher le bouton.
    public function render_backtocoursebutton(backtocoursebutton $button) {
        $data = $button->export_for_template($this);
        // Indique le chemin complet du template
        return $this->render_from_template('theme_theme_sos/custom_course/backtocoursebutton', $data);
    }
}
