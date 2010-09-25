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

define('nl_error_create_table',         'Der er sket en fejl under oprettelse af en tabel til <strong>Newsletter Modulet</strong>:<strong>%s</strong>');
define('nl_error_database_error',				'Der er opst&aring;et en databasefejl:<strong>%s</strong>');
define('nl_error_delete_table',					'Under sletning af en tabel i <strong>Newsletter Modulet</strong> er der opst&aring;et en fejl:<strong>%s</strong>');
define('nl_error_email_already_subscribed','Email-adressen <strong>%s</strong> findes allerede i fordelingslisten.');
define('nl_error_email_not_activated',	'<strong>Fejl:</strong> Email-adressen <strong>%s</strong> venter stadig p&aring; aktivering gennem det udsendte aktiveringslink.');
define('nl_error_get_email',						'<strong>Fejl:</strong> Email-adressen kunne ikke aktiveres. Kontakt hjemmesiden');
define('nl_error_invalid_email_address','<strong>Fejl:</strong> Email-adressen <strong>%s</strong> er ugyldig');
define('nl_error_mm_not_exists',				'<strong>Fatal fejl:</strong> Massmail er ikke installeret og <strong>Newsletter Modulet </strong> kan derfor ikke afvikles');
define('nl_error_mm_group_not_exists',	'<strong>Fatal fejl:</strong> Den angivne Massmail gruppe "<strong>%s</strong>" findes ikke. Kontroller ops&aelig;tningen af Massmail/p>');
define('nl_error_no_email_address',			'<strong>Fejl:</strong> Du har ikke angivet din email-adresse.');
define('nl_error_not_in_mailing_list',	'<strong>Fejl:</strong> Email-adressen <strong>%s</strong> findes ikke i fordelingslisten.');
define('nl_error_sending_activation',		'<strong>Fejl:</strong> Der opstod en fejl under afsendelse af aktiveringslink til <strong>%s</strong>.Kontakt hjemmesiden');
define('nl_error_sending_deactivation', '<strong>Fejl:</strong> Der opstod en fejl under afsendelse af afmeldingslink til email-adressen <strong>%s</strong>.Kontakt hjemmesiden');

define('nl_btn_submit',									'Send');
define('nl_btn_ok',											'OK');

define('nl_header_email',								'Din email-adresse:');

define('nl_text_activated',							'Email-adressen <strong>%s</strong> er nu tilf&oslash;jet til fordelingslisten.Tak.');
define('nl_text_deactivated',						'Email-adressen <strong>%s</strong> er nu slettet fra fordelingslisten.Tak.');
define('nl_text_intro',									'<strong>Nyhedsbrevet</strong> vil bringe informationer om hjemmesiden.');
define('nl_text_send_activation',				'Vi har sendt en email til <strong>%s</strong>.Check venligst indboksen og brug det fremsendte link til at aktivere nyhedsbrevet.Tak');
define('nl_text_send_deactivation',			'Vi har sendt en email til <strong>%s</strong>.Check venligst indboksen og brug det fremsendte link til at de-aktivere nyhedsbrevet.Tak');
define('nl_text_subscribe',							'Tilmeld');
define('nl_text_unsubscribe',						'Afmeld');

define('nl_mail_activate',							"Tak for din interesse for nyhedsbrevet\r\nBrug venligst dette link til at aktivere nyhedsbrevet:\r\n\r\n--> %s\r\n\r\nTak");
define('nl_mail_delete',								"Du &oslash;nsker at afmelde nyhedsbrevet.\r\nBrug venligst dette link til at de-aktivere nyhedsbrevet::\r\n\r\n--> %s\r\n\r\nTak");
define('nl_mail_admin_send_link',				"Til email-adressen %s er sendt dette aktiveringslink:\r\n\r\n%s");
define('nl_mail_admin_activated',				"Email-adressen %s er nu f&oslash;jet til fordelingslisten.");
define('nl_mail_admin_send_unlink',			"Til email-adressen %s er sendt f&oslash;lgende afmeldingslink:\r\n\r\n%s");
define('nl_mail_admin_deactivated',			"Email-adressen %s er nu slettet fra fordelingslisten.");

define('nl_subject_activate',						'Aktivering af nyhedsbrev');
define('nl_subject_delete',							'Afmelding af nyhedsbrev');
define('nl_subject_admin_send_link',		'Nyhedsbrev: Aktiveringslink sendt');
define('nl_subject_admin_activated',		'Nyhedsbrev: Email-adresse tilmeldt');
define('nl_subject_admin_send_unlink',	'Nyhedsbrev: Afmeldingslink sendt');
define('nl_subject_admin_deactivated',	'Nyhedsbrev: Email-adresse slettet');

?>