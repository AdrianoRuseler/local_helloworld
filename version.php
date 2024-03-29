<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Plugin version and other meta-data are defined here.
 *
 * @package     local_helloworld
 * @copyright   2020 Adriano Ruseler <ruseler@utfpr.edu.br>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// About: https://docs.moodle.org/dev/version.php.

defined('MOODLE_INTERNAL') || die();

$plugin->component = 'local_helloworld';
$plugin->release = '0.1.2';
$plugin->version = 2022011300;
// $plugin->incompatible = 400; // To test workflows
$plugin->requires = 2020061500;
$plugin->maturity = MATURITY_ALPHA;
