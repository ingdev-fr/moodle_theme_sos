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

use renderable;
use renderer_base;
use templatable;


/**
 * Class backtocoursebutton
 * 
 * This class is used to render the back to course button in the Trainterra theme.
 *
 * @package    theme_theme_sos
 * @copyright  2025 Damien Will <damien.will@trainterra.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class backtocoursebutton implements renderable, templatable {
    // Properties
    protected $coursename;
    protected $courseurl;
    protected $courseimageurl;

    /**
     * backtocoursebutton constructor.
     *
     * @param string $coursename The name of the course.
     * @param string $courseurl The URL of the course.
     * @param string $courseimageurl The image URL of the course.
     */
    public function __construct($coursename, $courseurl, $courseimageurl) {
        $this->coursename = $coursename;
        $this->courseurl = $courseurl;
        $this->courseimageurl = $courseimageurl;
    }

    // Retourne les propriétés de l'objet
    // pour les utiliser dans le template.
    public function export_for_template(renderer_base $output) {
        return [
            'coursename' => $this->coursename,
            'courseurl' => $this->courseurl,
            'courseimageurl' => $this->courseimageurl,
        ];
    }
}
