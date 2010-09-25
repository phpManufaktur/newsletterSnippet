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

define('nl_error_create_table',         '<p>An error occured while creating a table for the <strong>Newsletter Module</strong>:</p><p><strong>%s</strong></p>');
define('nl_error_database_error',				'<p>A database error occurred:</p><p><strong>%s</strong></p>');
define('nl_error_delete_table',					'<p>The following error occured while deleting a table for the <strong>Newsletter Module</strong>:</p><p><strong>%s</strong></p>');
define('nl_error_email_already_subscribed','<p>The email address <strong>%s</strong> already exists in the distribution list.</p>');
define('nl_error_email_not_activated',	'<p><strong>Error:</strong> The email address <strong>%s</strong> is still waiting for activation by the provided activation link.</p>');
define('nl_error_get_email',						'<p><strong>Error:</strong> The email address could not be used. Please contact support!</p>');
define('nl_error_invalid_email_address','<p><strong>Error:</strong> The email address <strong>%s</strong> is not valid!</p>');
define('nl_error_mm_not_exists',				'<p><strong>Fatal error:</strong> Massmail is not installed, therefore the Newsletter Module can not be executed!</p>');
define('nl_error_mm_group_not_exists',	'<p><strong>Fatal error:</strong> The indicated Massmail Group "<strong>%s</strong>" does not exist. Please check the Massmail configuration!</p>');
define('nl_error_no_email_address',			'<p><strong>Error:</strong> You did not enter your email address.</p>');
define('nl_error_not_in_mailing_list',	'<p><strong>Error:</strong> The email address <strong>%s</strong> does not exists in the distribution list.</p>');
define('nl_error_sending_activation',		'<p><strong>Error:</strong> An error occurred while sending an activation link to the email address <strong>%s</strong>.</p><p>Please contact support.</p>');
define('nl_error_sending_deactivation', '<p><strong>Error:</strong> An error occurred while sending a deactivation link to the email address <strong>%s</strong>.</p><p>Please contact support</p>');

define('nl_btn_submit',									'Send');
define('nl_btn_ok',											'OK');

define('nl_header_email',								'Your email address:');

define('nl_text_activated',							'<p>The email address <strong>%s</strong> has been added to our distribution list.</p><p>Thank you!</p>');
define('nl_text_deactivated',						'<p>The email address <strong>%s</strong> has been removed from our distribution list.</p><p>Thank you!</p>');
define('nl_text_intro',									'Subscribe to our <strong>Newsletter</strong>.');
define('nl_text_send_activation',				'<p><strong>ACTIVATE YOUR SUBSCRIPTION</strong></p><p>We sent an email to <strong>%s</strong>.</p><p>In order to activate your subscription, check your email inbox and click on the included link. Your subscription will not start until you click that link.</p><p>If you do not receive an email in your inbox shortly, just come back and fill out the form again to have another copy sent to you.</p><p>Thank you!</p>');
define('nl_text_send_deactivation',			'<p><strong>CANCEL YOUR SUBSCRIPTION</strong></p><p>We sent an email to <strong>%s</strong>.</p><p>To unsubscribed from our mailing list, check your email inbox and click on the included link. Your subscription WILL NOT be cancelled until you click that link.</p><p>If you do not receive an email in your inbox shortly, just come back and fill out the form again to have another copy sent to you.</p><p>Thank you!</p>');
define('nl_text_subscribe',							'Subscribe');
define('nl_text_unsubscribe',						'Unsubscribe');

define('nl_mail_activate',							"Thank you for signing up to our newsletter!\r\nTo activate your subscription, please use this link:\r\n\r\n--> %s\r\n\r\nThank You!");
define('nl_mail_delete',								"We are sorry that you want to unsubscribe from our newsletter.\r\nTo cancel your subscription, please use the this link:\r\n\r\n--> %s\r\n\r\nThank you!");
define('nl_mail_admin_send_link',				"An email was sent to %s containing the following activation link:\r\n\r\n%s");
define('nl_mail_admin_activated',				"The email address %s was added to the distribution list.");
define('nl_mail_admin_send_unlink',			"An email was sent to %s containing the following deactivation link:\r\n\r\n%s");
define('nl_mail_admin_deactivated',			"The email address %s was removed from the distribution list.");

define('nl_subject_activate',						'Confirm Newsletter Subscription');
define('nl_subject_delete',							'Confirm Unsubscrition From Our Newsletter');
define('nl_subject_admin_send_link',		'Newsletter: Sent activation link');
define('nl_subject_admin_activated',		'Newsletter: Email address added');
define('nl_subject_admin_send_unlink',	'Newsletter: Sent deactivation link');
define('nl_subject_admin_deactivated',	'Newsletter: Removed email address');
?>