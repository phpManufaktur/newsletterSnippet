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

define('nl_error_create_table',         '<p>Er is een fout opgetreden bij het maken van de databasetabel voor de <strong>Newsletter Module</strong>:</p><p><strong>%s</strong></p>');
define('nl_error_database_error',				'<p>Database fout:</p><p><strong>%s</strong></p>');
define('nl_error_delete_table',					'<p>Bij het verwijderen van de databasetabel voor de <strong>Newsletter Module</strong> is een fout ontstaan:</p><p><strong>%s</strong></p>');
define('nl_error_email_already_subscribed','<p>Dit e-mailadres <strong>%s</strong> bestaat al in de nieuwsbrief database.</p>');
define('nl_error_email_not_activated',	'<p><strong>Fout:</strong> Het e-mailadres <strong>%s</strong> moet nog geactiveerd worden voor de nieuwsbrief database.</p>');
define('nl_error_get_email',						'<p><strong>Fout:</strong> Het e-mailadres kon niet gevonden worden, neem contact op via de website!</p>');
define('nl_error_invalid_email_address','<p><strong>Fout:</strong> Het e-mailadres <strong>%s</strong> is niet geldig!</p>');
define('nl_error_mm_not_exists',				'<p><strong>Fatale fout:</strong> Massmail is niet geinstalleerd, daarom kan de Newsletter Module niet geactiveerd worden!</p>');
define('nl_error_mm_group_not_exists',	'<p><strong>Fatale fout:</strong> De opgegeven Massmail Group "<strong>%s</strong>" bestaat niet, controleer de Massmail instellingen!</p>');
define('nl_error_no_email_address',			'<p><strong>Fout:</strong> Je bent vergeten een e-mailadres in te vullen!</p>');
define('nl_error_not_in_mailing_list',	'<p><strong>Fout:</strong> Het e-mailadres <strong>%s</strong> bestaat niet in de nieuwsbrief database.</p>');
define('nl_error_sending_activation',		'<p><strong>Fout:</strong>Bij het versturen van de inschrijvings link naar het e-mailadres <strong>%s</strong> is een fout ontstaan.</p><p>Neem contact op via de website!</p>');
define('nl_error_sending_deactivation', '<p><strong>Fout:</strong> Bij het versturen van de uitschrijvings link naar het e-mailadres <strong>%s</strong> is een fout ontstaan.</p><p>Neem contact op via de website!</p>');

define('nl_btn_submit',									'Verstuur');
define('nl_btn_ok',											'OK');

define('nl_header_email',								'E-mailadres');

define('nl_text_activated',							'<p>Het e-mailadres <strong>%s</strong> is toegevoegd aan de nieuwsbrief database.</p><p>Bedankt!</p>');
define('nl_text_deactivated',						'<p>Het e-mailadres <strong>%s</strong> is verwijderd uit de nieuwsbrief database.</p><p>Bedankt!</p>');
define('nl_text_intro',									'De <strong>nieuwsbrief</strong> informeert u regelmatig over deze website.');
define('nl_text_send_activation',				'<p>Er is een e-mail naar <strong>%s</strong> gestuurd.</p><p>Klik op de link in deze e-mail om de inschrijving voor de nieuwsbrief te bevestigen.</p><p>Bedankt!</p>');
define('nl_text_send_deactivation',			'<p>Er is een e-mail naar <strong>%s</strong> gestuurd.</p><p>Klik op de link in deze e-mail om de uitschrijving voor de nieuwsbrief te bevestigen.</p><p>Bedankt!</p>');
define('nl_text_subscribe',							'Aanmelden');
define('nl_text_unsubscribe',						'Afmelden');

define('nl_mail_activate',							"Bedankt voor de interesse voor de nieuwsbrief!\r\nOm de inschrijving voor de nieuwsbrief te bevestigen, klik op deze link:\r\n\r\n--> %s\r\n\r\nBedankt!");
define('nl_mail_delete',								"Jammer dat je je wilt uitschrijven voor de nieuwsbrief!\r\nOm de uitschrijving voor de nieuwsbrief te bevestigen, klik op deze link:\r\n\r\n--> %s\r\n\r\nBedankt!");
define('nl_mail_admin_send_link',				"Naar het e-mailadres %s is een link voor inschrijving gestuurd:\r\n\r\n%s");
define('nl_mail_admin_activated',				"Het e-mailadres %s is toegevoegd aan de nieuwsbrief database.");
define('nl_mail_admin_send_unlink',			"Naar het e-mailadres %s is een link voor uitschrijving gestuurd:\r\n\r\n%s");
define('nl_mail_admin_deactivated',			"Het e-mailadres %s is verwijderd uit de nieuwsbrief database.");

define('nl_subject_activate',						'Aanmelden nieuwsbrief');
define('nl_subject_delete',							'Afmelden nieuwsbrief');
define('nl_subject_admin_send_link',		'Nieuwsbrief: inschrijving');
define('nl_subject_admin_activated',		'Nieuwsbrief: e-mailadres toegevoegd');
define('nl_subject_admin_send_unlink',	'Nieuwsbrief: uitschrijving');
define('nl_subject_admin_deactivated',	'Nieuwsbrief: e-mailadres verwijderd');

?>