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
  Norwegian languagefile for the Newsletter snippet
  Translated by Odd Egil Hansen (oeh)
**/

define('nl_error_create_table',         '<p>Det oppstod en feil under opprettelse av tabellen for <strong>Nyhetsbrev Modulen</strong>:</p><p><strong>%s</strong></p>');
define('nl_error_database_error',				'<p>Det er en feil i databsen:</p><p><strong>%s</strong></p>');
define('nl_error_delete_table',					'<p>Det oppstod en feil under sletting av en tabell i <strong>Nyhetsbrev Modulen</strong> Feilen er:</p><p><strong>%s</strong></p>');
define('nl_error_email_already_subscribed','<p>e-Post adressen <strong>%s</strong> eksisterer allerede i abonnements listen.</p>');
define('nl_error_email_not_activated',	'<p><strong>Feil:</strong> e-Postadressen <strong>%s</strong> venter p&aring; &aring; bli akrivert. e-Post med lenke for aktivering er sendt til denne e-Postadressen.</p>');
define('nl_error_get_email',						'<p><strong>Feil:</strong> e-Postadressen kunne ikke verifiseres. Venligst ta kontakt med administrator!</p>');
define('nl_error_invalid_email_address','<p><strong>Feil:</strong> e-Postadressen <strong>%s</strong> er ikke gyldig!</p>');
define('nl_error_mm_not_exists',				'<p><strong>Alvorlig feil:</strong> "Massmail" er ikke instalert, Nyhetsbrev Modulen kan derfor ikke startes!</p>');
define('nl_error_mm_group_not_exists',	'<p><strong>Alvorlig feil:</strong> den angitte "Massmail" gruppen "<strong>%s</strong>" eksisterer ikke, veligst sjekk "Massmail" konfigurasjionen!</p>');
define('nl_error_no_email_address',			'<p><strong>Feil:</strong> Du har glemt og legge inn en e-Postadresse.</p>');
define('nl_error_not_in_mailing_list',	'<p><strong>Feil:</strong> e-Postadressen <strong>%s</strong> eksisterer ikke i abonnements listen.</p>');
define('nl_error_sending_activation',		'<p><strong>Feil:</strong> Det oppsto en feil under sending av aktiverings e-Posten, til denne e-Postadressen <strong>%s</strong>.</p><p>Venligst ta kontakt med administrator!</p>');
define('nl_error_sending_deactivation', '<p><strong>Feil:</strong> Det oppsto en feil under sending av deaktiverings e-Posten, til denne e-Postadressen <strong>%s</strong>.</p><p>Venligst ta kontakt med administrator!</p>');

define('nl_btn_submit',									'Send');
define('nl_btn_ok',											'OK');

define('nl_header_email',								'Din e-Postadresse');

define('nl_text_activated',							'<p>e-Postadressen <strong>%s</strong> er lagt til i abonnements listen.</p><p>Vi takker s&aring; mye!</p>');
define('nl_text_deactivated',						'<p>e-Postadressen <strong>%s</strong> er slettet fra abonnements listen.</p><p>Vi takker s&aring; mye!</p>');
define('nl_text_intro',									'Dette <strong>Nyhetsbrevet</strong> vil inneholde oppdateringer og nyheter fra oss.');
define('nl_text_send_activation',				'<p>Det ble sendet en e-Post til<strong>%s</strong>.</p><p>Venligst sjekk innboksen din, og benytt lenken i denne e-Posten for &aring; aktivere Nyhetsbrevet.</p><p>Vi takker s&aring; mye!</p>');
define('nl_text_send_deactivation',			'<p>Det ble sendet en e-Post til<strong>%s</strong>.</p><p>Venligst sjekk innboksen din, og benytt lenken i denne e-Posten for &aring; deaktivere Nyhetsbrevet.</p><p>Vi takker s&aring; mye!</p>');
define('nl_text_subscribe',							'Abonner');
define('nl_text_unsubscribe',						'Avslutt Abonnementet');

define('nl_mail_activate',							"Tak for at du vil abbonere p&aring; v&aring;rt nyhetsbrev!\r\nFor &aring; aktivere Nyhetsbrevet, venligst benytt denne lenken:\r\n\r\n--> %s\r\n\r\n Vi takker s&aring; mye!");
define('nl_mail_delete',								"Vi finner det trist at du ikke lenger &oslash;nsker &aring; abbonere p&aring; v&aring;rt nyhetsbrev.\r\nFor &aring; deaktivere Nyhetsbrevet, venligst benytt denne lenken:\r\n\r\n--> %s\r\n\r\nVi takker s&aring; mye!");
define('nl_mail_admin_send_link',				"Det ble sendt en aktiverings e-post til %s  med lenken:\r\n\r\n%s");
define('nl_mail_admin_activated',				"e-Postadressen %s ble lagt til i abonnements listen.");
define('nl_mail_admin_send_unlink',			"Det ble sendt en deaktiverings e-post til %s  med lenken:\r\n\r\n%s");
define('nl_mail_admin_deactivated',			"e-Postadressen %s ble slettet fra i abonnements listen.");

define('nl_subject_activate',						'Aktivering av Nyhetsbrev');
define('nl_subject_delete',							'Avslutte Nyhetsbrev');
define('nl_subject_admin_send_link',		'Nyhetsbrev:  aktivasjons lenke sendt');
define('nl_subject_admin_activated',		'Nyhetsbrev: e-Postadressen lagt til');
define('nl_subject_admin_send_unlink',	'Nyhetsbrev:  deactivations lenke sent');
define('nl_subject_admin_deactivated',	'Nyhetsbrev: e-Postadressen ble slettet');

?>