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
  TRADUCTION : Marie Kuntz / LCM
**/


define('nl_error_create_table',         '<p>Une erreur est survenue pendant la création d\'une table pour le <strong>Module Newsletter </strong>:</p><p><strong>%s</strong></p>');
define('nl_error_database_error',		'<p>Une erreur DB est survenue:</p><p><strong>%s</strong></p>');
define('nl_error_delete_table',			'<p>Une erreur est survenue pendant la suppression d\'une table du<strong>Module Newsletter</strong>:</p><p><strong>%s</strong></p>');
define('nl_error_email_already_subscribed','<p>L\'adresse email <strong>%s</strong> existe déjà dans la liste d\'envoi.</p>');
define('nl_error_email_not_activated',	'<p><strong>Erreur:</strong> L\'adresse email <strong>%s</strong> est toujours en attente d\'activation par le lien d\'activation qui vous a été transmis.</p>');
define('nl_error_get_email',			'<p><strong>Erreur:</strong> L\'adresse email n\'a pas pu être associée, merci de contacter l\'administrateur!</p>');
define('nl_error_invalid_email_address','<p><strong>Erreur:</strong> L\'adresse email <strong>%s</strong> n\'est pas valide!</p>');
define('nl_error_mm_not_exists',		'<p><strong>Erreur fatale:</strong> Massmail n\est pas installé, le Module Newsletter ne peut pas être exécuté!</p>');
define('nl_error_mm_group_not_exists',	'<p><strong>Erreur fatale:</strong> Le groupe Massmail "<strong>%s</strong>" n\'existe pas, veuillez vérifier la configuration de Massmail!</p>');
define('nl_error_no_email_address',		'<p><strong>Erreur:</strong> Vous avez oublié d\'indiquer votre adresse email.</p>');
define('nl_error_not_in_mailing_list',	'<p><strong>Erreur:</strong> L\'adresse email <strong>%s</strong> n\'existe pas dans la liste d\'envoi.</p>');
define('nl_error_sending_activation',	'<p><strong>Erreur:</strong> Une erreur est survenue pendant l\'envoi du lien d\'activation à l\'adresse email <strong>%s</strong>.</p><p>Merci de contacter l\'administrateur.</p>');
define('nl_error_sending_deactivation', '<p><strong>Erreur:</strong> Une erreur est survenue pendant l\'envoi du lien de désactivation à l\'adresse email <strong>%s</strong>.</p><p>Merci de contacter l\'administrateur.</p>');

define('nl_btn_submit',					'Soumettre');
define('nl_btn_ok',						'OK');

define('nl_header_email',				'Votre adresse email');

define('nl_text_activated',				'<p>L\'adresse email <strong>%s</strong> a été ajoutée à la liste d\'envoi.</p><p>Merci!</p>');
define('nl_text_deactivated',			'<p>L\'adresse email <strong>%s</strong> a été supprimée de la liste d\'envoi.</p><p>Merci!</p>');
define('nl_text_intro',					'La <strong>newsletter</strong> vous informe périodiquement à propos du site.');
define('nl_text_send_activation',		'<p>Un email vous a été envoyé à <strong>%s</strong>.</p><p>Pensez à vérifier votre boite et utilisez le lien pour valider votre inscription à la newsletter.</p><p>Merci!</p>');
define('nl_text_send_deactivation',		'<p>Un email vous a été envoyé à <strong>%s</strong>.</p><p>Pensez à vérifier votre boite et utilisez le lien pour valider votre désinscription à la newsletter.</p><p>Merci!</p>');
define('nl_text_subscribe',				'S\'inscrire');
define('nl_text_unsubscribe',			'Se désinscrire');

define('nl_mail_activate',				"Merci pour votre intérêt pour notre newsletter!\r\nPour activer votre inscription, utilisez le lien ci-dessous:\r\n\r\n--> %s\r\n\r\nMerci !");
define('nl_mail_delete',				"Vous souhaitez être désinscrit de notre newsletter.\r\nPour confirmer votre désinscription, utilisez le lien ci-dessous:\r\n\r\n--> %s\r\n\r\nMerci!");
define('nl_mail_admin_send_link',		"A l'adresse email %s a été envoyé le lien d\'activation :\r\n\r\n%s");
define('nl_mail_admin_activated',		"L'adresse email %s a été ajouté à la liste d'envoi.");
define('nl_mail_admin_send_unlink',		"A l'adresse email %s a été envoyé le lien de suppression:\r\n\r\n%s");
define('nl_mail_admin_deactivated',		"L'adresse email %s a été supprimé de la liste d'envoi.");

define('nl_subject_activate',			'Activation Newsletter');
define('nl_subject_delete',				'Désinscription Newsletter');
define('nl_subject_admin_send_link',	'Newsletter: envoyer le lien d\'activation');
define('nl_subject_admin_activated',	'Newsletter: adresse email ajoutée');
define('nl_subject_admin_send_unlink',	'Newsletter: envoyer le lien de désinscription');
define('nl_subject_admin_deactivated',	'Newsletter: adresse email supprimée');



?>