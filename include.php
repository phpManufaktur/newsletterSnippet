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


require_once(WB_PATH.'/modules/newsletter/class.newsletter.php');

function newsletter_info($newsletterGroup,$fromEmail,$textOnly=true,$infoAdmin=false) {
  // Newsletter initialisieren
  $newsletter = new newsletter($newsletterGroup,$fromEmail,$textOnly,$infoAdmin);
  // ... und ausfuehren
  $newsletter->action();
}

?>