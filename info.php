<?php

/**
  Module developed for the Open Source Content Management System Website Baker (http://websitebaker.org)
  Copyright (c) 2007-2010, Ralf Hertsch - phpManufaktur
  Contact me: ralf.hertsch@phpManufaktur.de, http://phpManufaktur.de

  This module is free software. You can redistribute it and/or modify it
  under the terms of the GNU General Public License  - version 2 or later,
  as published by the Free Software Foundation: http://www.gnu.org/licenses/gpl.html.

  This module is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.
**/

/**
 * Version history
 *
 * v0.10 - 04.11.2007 - ALPHA
 *    first release
 *
 * v0.11 - 05.11.2007 - ALPHA
 *    fixed:    identify the correct url
 *
 * v0.12 - 07.11.2007 - BETA
 *    added:    switch for sending E-Mails in TEXT Format only
 *    added:    switch for infomails to admin
 *    added:    formatted results
 *
 *  v0.13 - 10.11.2007 - BETA
 *    added:    EN.php language file
 *    changed:  formatting of messages
 *
 *  v0.14 - 10.11.2007 - BETA
 *    added:    NL.php language file
 *    changed:  creating url for activation link
 *
 *  v0.15 - 20.02.2008 - STABLE
 *    changed:  method checking if class.parser.php is already loaded
 *
 *  v0.16 - 28.02.2008 - STABLE
 *    fixed:    security lack enables cross site scripting
 *    fixed:    access to undefined variable nl_email
 *
 *  v0.17 - 12.04.2008 - STABLE
 *    added:    FR.php language file, Thanks to Marie Kuntz
 *
 *  v0.18 - 19.07.2010 - STABLE (by Michael Milette)
 *    improved: EN.php English language file, Thanks to Allen (achrist) & Michael Milette (mjm4842)
 *    added:    DA.php Danish language file, Thanks to Allen (achrist)
 *    added:    HE.php Hebrew language file, Thanks to proglot
 *    added:    NO.php Norwegian language file, Thanks to Odd Egil (eoh)
 *    added:    Expanded accented characters support to class.parser.php, Thanks to Exxos & Odd Egil (eoh)
 *    improved: submit.htt - Now passes W3C validation, Thanks to Michael Viens (mviens)
 *    improved: submit.htt - Added nl_intro, nl_email, nl_subscribe, nl_submit classes to enable
 *              better CSS formatting of form sections/text, Thanks to Michael Milette (mjm4842)
 *    added:    NEWSLETTER-DROPLET.txt for instructions on how to use this module as a Droplet (WSB 2.8 or later)
 *  There are no modifications to the databases. Upgrade is possible by doing a straight file copy/replacement.
 */

$module_directory = 'newsletter';
$module_name = 'Newsletter';
$module_function = 'snippet';
$module_version = '0.18';
$module_platform = '2.8.x';
$module_author = 'Ralf Hertsch - ralf.hertsch@phpmanufaktur.de, Michel Milette a.o.';
$module_license = 'GNU General Public License';
$module_description = 'NewsLetter Module';
$module_guid = '6EFED1C1-CF32-46E6-BC68-DFDE31C5EEDD';
$module_home = 'http://phpmanufaktur.de/cms/topics/newsletter-snippet.php';

?>