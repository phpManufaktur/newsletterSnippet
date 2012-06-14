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

define('nl_error_create_table',         '<p>Beim Erstellen der Tabelle f&uuml;r das Newsletter Modul ist ein Fehler aufgetreten:</p><p><strong>%s</strong></p>');
define('nl_error_database_error',				'<p>Es ist ein Datenbankfehler aufgetreten:</p><p><strong>%s</strong></p>');
define('nl_error_delete_table',					'<p>Beim L&ouml;schen der Tabelle f&uuml;r das Newsletter Modul ist ein Fehler aufgetreten:</p><p><strong>%s</strong></p>');
define('nl_error_email_already_subscribed','<p>Die E-Mail Adresse <strong>%s</strong> ist bereits im Verteiler eingetragen.</p>');
define('nl_error_email_not_activated',	'<p><strong>Fehler:</strong> Die E-Mail Adresse <strong>%s</strong> wartet bereits auf Aktivierung durch den &uuml;bermittelten Freischaltcode.</p>');
define('nl_error_get_email',						'<p>Die E-Mail Adresse konnte nicht ermittelt werden, bitte nehmen Sie Verbindung mit dem Support auf!</p>');
define('nl_error_invalid_email_address','<p>Die E-Mail Adresse <strong>%s</strong> ist nicht g&uuml;ltig.</p>');
define('nl_error_mm_not_exists',				'<p>Fataler Fehler: Massmail ist nicht installiert, das Newsletter Modul kann nicht ausgef&uuml;hrt werden!</p>');
define('nl_error_mm_group_not_exists',	'<p>Fataler Fehler: Die angegebene Massmail Gruppe "<strong>%s</strong>" existiert nicht, bitte pr&uuml;fen Sie die Massmail Konfiguration!</p>');
define('nl_error_no_email_address',			'<p>Sie haben keine E-Mail Adresse angegeben.</p>');
define('nl_error_not_in_mailing_list',	'<p>Die E-Mail Adresse <strong>%s</strong> befindet sich nicht im Verteiler.</p>');
define('nl_error_sending_activation',		'<p>Beim Versenden des Aktivierungslink an <strong>%s</strong> ist leider ein Fehler aufgetreten.</p><p>Bitte nehmen Sie Kontakt mit dem Support auf!</p>');
define('nl_error_sending_deactivation', '<p>Beim Versenden des Deaktivierungslink an <strong>%s</strong> ist leider ein Fehler aufgetreten.</p><p>Bitte nehmen Sie Kontakt mit dem Support auf!</p>');

define('nl_btn_submit',									'Abschicken');
define('nl_btn_ok',											'OK');

define('nl_header_email',								'Ihre E-Mail Adresse');

define('nl_text_activated',							'<p>Die E-Mail Adresse <strong>%s</strong> wurde in den Verteiler aufgenommen.</p><p>Vielen Dank f&uuml;r Ihr Interesse!</p>');
define('nl_text_deactivated',						'<p>Die E-Mail Adresse <strong>%s</strong> wurde aus dem Verteiler gel&ouml;scht.</p><p>Wir bedanken uns f&uuml;r Ihr Interesse.</p>');
define('nl_text_intro',									'Mein <strong>Newsletter</strong> informiert Sie in unregelm&auml;&szlig;igen Abst&auml;nden &uuml;ber neue oder aktualisierte Website Baker Module.');
define('nl_text_send_activation',				'<p>Es wurde eine E-Mail an die Adresse <strong>%s</strong> gesendet.</p><p>Bitte kontrollieren Sie Ihr Postfach und schalten Sie den Newsletter mit dem Aktivierungslink in der E-Mail frei.</p><p>Vielen Dank f&uuml;r Ihr Interesse!</p>');
define('nl_text_send_deactivation',			'<p>Es wurde eine E-Mail an die Adresse <strong>%s</strong> gesendet.</p><p>Bitte kontrollieren Sie Ihr Postfach und best&auml;tigen Sie die Austragung aus dem Newsletter mit dem Aktivierungslink in der E-Mail.</p><p>Wir bedanken uns f&uuml;r Ihr Interesse.</p>');
define('nl_text_subscribe',							'Anmelden');
define('nl_text_unsubscribe',						'Abmelden');

define('nl_mail_activate',							"Vielen Dank fuer Ihr Interesse an meinem Newsletter!\r\nUm den Newsletter zu aktivieren, klicken Sie bitte auf den folgenden Link:\r\n\r\n--> %s\r\n\r\nVielen Dank fuer Ihr Interesse!\r\nRalf Hertsch");
define('nl_mail_delete',								"Ich bedauere sehr, dass Sie meinen Newsletter abbestellen moechten.\r\nFuer die Loeschung Ihrer E-Mail Adresse aus dem Verteiler klicken Sie bitte auf den folgenden Link:\r\n\r\n--> %s\r\n\r\nMit freundlichen Gruessen\r\nRalf Hertsch");
define('nl_mail_admin_send_link',				"An die E-Mail Adresse %s wurde der folgende Aktivierungslink gesendet:\r\n\r\n%s");
define('nl_mail_admin_activated',				"Die E-Mail Adresse %s wurde in den Verteiler aufgenommen.");
define('nl_mail_admin_send_unlink',			"An die E-Mail Adresse %s wurde der folgende Deaktivierungslink gesendet:\r\n\r\n%s");
define('nl_mail_admin_deactivated',			"Die E-Mail Adresse %s wurde aus dem Verteiler entfernt.");

define('nl_subject_activate',						'Newsletter Aktivierung');
define('nl_subject_delete',							'Newsletter Abbestellung');
define('nl_subject_admin_send_link',		'Newsletter: Aktivierungslink versendet');
define('nl_subject_admin_activated',		'Newsletter: E-Mail Adresse eingetragen');
define('nl_subject_admin_send_unlink',	'Newsletter: Deaktivierungslink versendet');
define('nl_subject_admin_deactivated',	'Newsletter: E-Mail Adresse ausgetragen');

?>