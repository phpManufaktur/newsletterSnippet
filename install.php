<?php

/**
  Module developed for the Open Source Content Management System Website Baker (http://websitebaker.org)
  Copyright (c) 2007, Ralf Hertsch
  Contact me: hertsch@berlin.de, http://ralf-hertsch.de

  This module is free software. You can redistribute it and/or modify it
  under the terms of the GNU General Public License  - version 2 or later,
  as published by the Free Software Foundation: http://www.gnu.org/licenses/gpl.html.

  This module is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.
**/

// prevent this file from being accesses directly
if(defined('WB_PATH') == false) {
	exit("Cannot access this file directly");
}

if(!file_exists(WB_PATH .'/modules/newsletter/languages/' .LANGUAGE .'.php')) {
	require_once(WB_PATH .'/modules/newsletter/languages/DE.php'); }
else {
	require_once(WB_PATH .'/modules/newsletter/languages/' .LANGUAGE .'.php'); }


require_once(WB_PATH . '/modules/newsletter/class.newsletter.php');

$newsletter = new sql_newsletter();
if ((!$newsletter->sql_deleteTable()) || (!$newsletter->sql_createTable())) {
  $admin->print_error(sprintf(nl_error_create_table,$database->get_error())); }

?>