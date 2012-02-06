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
 * Capability definitions for the vote block
 *
 * @package    block
 * @subpackage courseaward_vote
 * @copyright  2011 onwards Paul Vaughan, paulvaughan@southdevon.ac.uk
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$block_courseaward_vote_capabilities = array(
    // 'vote' capability is assigned to the student role as default
    'block/courseaward_vote:vote' => array(
        'riskbitmask' => '',
        'captype' => 'write',
        'contextlevel' => CONTEXT_COURSE,
        'legacy' => array(
            'student'           => CAP_ALLOW
            //'teacher'           => CAP_PREVENT,
            //'editingteacher'    => CAP_PREVENT,
            //'admin'             => CAP_PREVENT
        )
    ),

    // 'admin' capability is assigned to the admin role as default
    'block/courseaward_vote:admin' => array(
        'riskbitmask' => RISK_PERSONAL,
        'captype' => 'write',
        'contextlevel' => CONTEXT_COURSE,
        'legacy' => array(
            //'student'           => CAP_PREVENT,
            //'teacher'           => CAP_PREVENT,
            //'editingteacher'    => CAP_PREVENT,
            'admin'             => CAP_ALLOW
        )
    )
)
