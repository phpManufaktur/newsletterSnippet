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

  Hebrew translation by Vadim Smelyansky <vadim@vadiaz.com>
**/

define('nl_error_create_table',         '<p>A error occurs while creating a table for the <strong>Newsletter Module</strong>:</p><p><strong>%s</strong></p>');
define('nl_error_database_error',				'<p>A database error occurs:</p><p><strong>%s</strong></p>');
define('nl_error_delete_table',					'<p>While deleting a table of the <strong>Newsletter Module</strong> occurred an error:</p><p><strong>%s</strong></p>');
define('nl_error_email_already_subscribed','<p>הכתובת <strong>%s</strong> כבר קיימת ברשימת תפוצה.</p>');
define('nl_error_email_not_activated',	'<p><strong>Error:</strong> הכתתובת <strong>%s</strong> עדיין לא הופעלה דרך הקישור שנשלח לדו"אל.</p>');
define('nl_error_get_email',						'<p><strong>Error:</strong> The email address could not be associated, please contact the support!</p>');
define('nl_error_invalid_email_address','<p><strong>Error:</strong> הכתובת <strong>%s</strong> שגעויה!</p>');
define('nl_error_mm_not_exists',				'<p><strong>Fatal error:</strong> Massmail is not installed, therefore the Newsletter Module can not be executed!</p>');
define('nl_error_mm_group_not_exists',	'<p><strong>Fatal error:</strong> The indicated Massmail Group "<strong>%s</strong>" does not exists, please check the Massmail configuration!</p>');
define('nl_error_no_email_address',			'<p><strong>Error:</strong> כתובת דו"אל ריקה.</p>');
define('nl_error_not_in_mailing_list',	'<p><strong>Error:</strong> הכתובת <strong>%s</strong> לא קיימת ברשימת תפוצה.</p>');
define('nl_error_sending_activation',		'<p><strong>Error:</strong> While sending the activation link to the email address <strong>%s</strong> occurred an error.</p><p>Please contact the support.</p>');
define('nl_error_sending_deactivation', '<p><strong>Error:</strong> While sending the deactivation link to the email address <strong>%s</strong> occurred an error.</p><p>Please contact the support</p>');

define('nl_btn_submit',		'החל');
define('nl_btn_ok',		'OK');

define('nl_header_email',	'כתובת דו"אל');

define('nl_text_activated',		'<p>כתובת <strong>%s</strong> נוספה לרשימת התפוצה</p><p>תודה רבה!</p>');
define('nl_text_deactivated',		'<p> כתובת<strong>%s</strong> הוסרה בהצלחה מרשימת תפוצה</p><p>תודה רבה!</p>');
define('nl_text_intro',			'הכנס כתובתך לקבלת דיוור חדשות של האתר');
define('nl_text_send_activation',				'<p>הודעה נשלחה ל <strong>%s</strong>.</p><p>בדקו את התיבת דא"אל ולחצו על הקישור הפעלה.</p><p>תודה רבה!</p>');
define('nl_text_send_deactivation',			'<p>הודעה נשלחה ל <strong>%s</strong>.</p><p>בדקו את התיבת דא"אל ולחצו על הקישור הסרה.</p><p>תודה רבה!</p>');
define('nl_text_subscribe',							'הרשמה');
define('nl_text_unsubscribe',						'הסרה');

define('nl_mail_activate',							"תודה על התענינות ברשימת תפוצה שלנו!\r\nלהפעלת הרשמה נא ללחוץ על הקישור הבאה:\r\n\r\n--> %s\r\n\r\nתודה רבה");
define('nl_mail_delete',	"אנחנו מצתארים שהחלתם להסיר את הכתובת שלכם מרשימת תפוצה שלנו.\r\nלהסרה מרשימת התפוצה נא ללחוץ על הקישור הבאה:\r\n\r\n--> %s\r\n\r\nתודה רבה!");
define('nl_mail_admin_send_link',				"קישור הפעלה נשלח לכתובת %s:\r\n\r\n%s");
define('nl_mail_admin_activated',				"כתובת %s נוספה לרשימת תפוצה.");
define('nl_mail_admin_send_unlink',			"קישור הסרה נשלח לכתובת %s:\r\n\r\n%s");
define('nl_mail_admin_deactivated',			"כתובת %s נמחקה מרשימת תפוצה.");

define('nl_subject_activate',						'הפעלת רישום לרשימת תפוצה');
define('nl_subject_delete',							'הסרת כתובת מרשימת תפוצה');
define('nl_subject_admin_send_link',		'רשימת תפוצה: נשלח קישור הפעלה');
define('nl_subject_admin_activated',		'רשימת תפוצה: נוספה כתובת חדשה');
define('nl_subject_admin_send_unlink',	'רשימת תפוצה: נשלח קישור הסרה');
define('nl_subject_admin_deactivated',	'הו רשימת תפוצה: כתובת הוסרה ');

?>
