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
 * Class for exporting the data needed to render a reading list.
 *
 * @package    block_leganto
 * @author     Rossco Hellmans <rosscohellmans@catalyst-au.net>
 * @copyright  Catalyst IT
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace block_leganto\external;
defined('MOODLE_INTERNAL') || die();

use renderer_base;
use moodle_url;

/**
 * Class for exporting the data needed to render a reading list.
 *
 * @package    block_leganto
 * @author     Rossco Hellmans <rosscohellmans@catalyst-au.net>
 * @copyright  Catalyst IT
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class reading_list_exporter extends \core\external\exporter {
    /**
     * Return the list of properties.
     *
     * @return array Properties.
     */
    public static function define_properties() {
        return array(
            'link' => array(
                'type' => PARAM_CLEANHTML,
            ),
            'item_count' => array(
                'type' => PARAM_CLEANHTML,
            ),
            'modified_date' => array(
                'type' => PARAM_CLEANHTML,
            )
        );
    }
}