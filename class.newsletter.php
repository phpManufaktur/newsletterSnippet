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

// include language file - by default DE.php
if(!file_exists(WB_PATH .'/modules/newsletter/languages/' .LANGUAGE .'.php')) {
	require_once(WB_PATH .'/modules/newsletter/languages/DE.php'); }
else {
	require_once(WB_PATH .'/modules/newsletter/languages/' .LANGUAGE .'.php'); }

$lib = get_included_files();
foreach ($lib as $value) { $library[] = basename($value); }
if (!in_array('class.parser.php',$library)) {
  require_once(WB_PATH.'/modules/newsletter/class.parser.php'); }

/**
 * database functions for access newsletter module
 *
 */
class sql_newsletter {

  /**
   * Constructor
   *
   * @return sql_newsletter
   */
  function sql_newsletter() {
  }

  /**
   * Create table for newsletter module
   *
   * @return BOOL
   */
  function sql_createTable() {
    global $database;
    $thisQuery = 'CREATE TABLE `' .TABLE_PREFIX .'mod_newsletter` ( '
	    . '`id` INT AUTO_INCREMENT,'
	    . '`email` VARCHAR(255) NOT NULL DEFAULT \'\','
	    . '`checkSum` VARCHAR(255) NOT NULL DEFAULT \'\','
	    . 'PRIMARY KEY (id)'
	    .')';
	  $oldErrorReporting = error_reporting(0);
	  $database->query($thisQuery);
	  error_reporting($oldErrorReporting);
	  if ($database->is_error()) {
	    return false;  }
	  else {
	    return true;  }
  }

  /**
   * Delete table for newsletter module
   *
   * @return BOOL
   */
  function sql_deleteTable() {
    global $database;
    $thisQuery = "DROP TABLE IF EXISTS `".TABLE_PREFIX."mod_newsletter`";
    $oldErrorReporting = error_reporting(0);
    $database->query($thisQuery);
    error_reporting($oldErrorReporting);
    if ($database->is_error()) {
      return false;  }
    else {
      return true;   }
  }

  /**
   * Read the $checkSum for $email from table
   *
   * @param STR $email
   * @return INT or BOOL=FALSE
   */
  function sql_getCheckSumByEmail($email) {
    global $database;
    global $sql_result;
    $thisQuery = "SELECT * FROM ".TABLE_PREFIX."mod_newsletter WHERE email='$email'";
    $oldErrorReporting = error_reporting(0);
    $sql_result = $database->query($thisQuery);
    if (!$database->is_error()) {
      // kein Fehler aufgetreten
      if ($sql_result->numRows() > 0) {
        $arr = array();
        $arr = $sql_result->fetchRow();
        error_reporting($oldErrorReporting);
        return $arr['checkSum'];  }
      else {
        error_reporting($oldErrorReporting);
        return false;  } }
    else {
      // Fehler
      error_reporting($oldErrorReporting);
      return false;  }
  }

  /**
   * Read the $email for $checkSum from table
   *
   * @param INT $checkSum
   * @return STR or BOOL=FALSE
   */
  function sql_getEMailByCheckSum($checkSum) {
    global $database;
    global $sql_result;
    $thisQuery = "SELECT * FROM ".TABLE_PREFIX."mod_newsletter WHERE checkSum='$checkSum'";
    $oldErrorReporting = error_reporting(0);
    $sql_result = $database->query($thisQuery);
    if (!$database->is_error()) {
      // kein Fehler aufgetreten
      if ($sql_result->numRows() > 0) {
        $arr = array();
        $arr = $sql_result->fetchRow();
        error_reporting($oldErrorReporting);
        return $arr['email'];  }
      else {
        error_reporting($oldErrorReporting);
        return false;  } }
    else {
      // Fehler
      error_reporting($oldErrorReporting);
      return false;  }
  }

  /**
   * Add $email and $checkSum to table
   *
   * @param STR $email
   * @param INT $checkSum
   * @return BOOL
   */
  function sql_addEMailAndCheck($email,$checkSum) {
    global $database;
    if ($this->sql_getCheckSumByEmail($email) == false) {
      // ok  - Eintrag existiert noch nicht
      $thisQuery = "INSERT INTO ".TABLE_PREFIX."mod_newsletter SET email='$email',checkSum='$checkSum'";
      $oldErrorReporting = error_reporting(0);
      $database->query($thisQuery);
      error_reporting($oldErrorReporting);
      if ($database->is_error()) {
        return false;  }
      else {
        return true;  } }
    else {
      return false;   }
  }

  /**
   * Delete entry with $email from table
   *
   * @param STR $email
   * @return BOOL
   */
  function sql_deleteEMail($email) {
    global $database;
    $thisQuery = "DELETE FROM ".TABLE_PREFIX."mod_newsletter WHERE email='$email'";
    $oldErrorReporting = error_reporting(0);
    $database->query($thisQuery);
    error_reporting($oldErrorReporting);
    if ($database->is_error()) {
      return false; }
    else {
      return true;  }
  }

  /**
   * the following function are needed for accessing the
   * tables of MASSMAIL MODULE
   */

  /**
   * Check whether table MOD_MASSMAIL exists
   *
   * @return BOOL
   */
  function sql_checkMassmailExists() {
    global $database;
    $thisQuery = "DESCRIBE ".TABLE_PREFIX."mod_massmail";
    $oldErrorReporting = error_reporting(0);
    $database->query($thisQuery);
    error_reporting($oldErrorReporting);
    if ($database->is_error()) {
      return false; }
    else {
      return true; }
  }

  /**
   * get MASSMAIL GROUP_ID by GROUP_NAME
   *
   * @param STR $massmailGroup
   * @return INT or BOOL=FALSE
   */
  function sql_getMassmailGroupID($massmailGroup) {
    global $database;
    global $sql_result;
    $arr = array();
    $thisQuery = "SELECT * FROM ".TABLE_PREFIX."mod_massmail_groups WHERE group_name='$massmailGroup'";
    $oldErrorReporting = error_reporting(0);
    $sql_result = $database->query($thisQuery);
    if (!$database->is_error()) {
      // kein Fehler aufgetreten
      if ($sql_result->numRows() > 0) {
        $arr = $sql_result->fetchRow();
        error_reporting($oldErrorReporting);
        if (!empty($arr['group_id'])) {
          return $arr['group_id'];  }
        else {
          return false;  } }
      else {
        error_reporting($oldErrorReporting);
        return false;  }
    }
    else {
      error_reporting($oldErrorReporting);
      return false;  }
  }

  /**
   * check if MAIL_TO AND GROUP_ID already exists in MASSMAIL
   *
   * @param STR $email
   * @param INT $groupID
   * @return BOOL
   */
  function sql_massmailAddressExists($email,$groupID) {
    global $database;
    global $sql_result;
    $thisQuery = "SELECT * FROM ".TABLE_PREFIX."mod_massmail_addresses WHERE mail_to='$email' AND group_id='$groupID'";
    $oldErrorReporting = error_reporting(0);
    $sql_result = $database->query($thisQuery);
    if ($database->is_error()) {
      // Fehler bei der Abfrage
      error_reporting($oldErrorReporting);
      return false; }
    if ($sql_result->numRows() > 0) {
      error_reporting($oldErrorReporting);
      return true;  }
    else {
      error_reporting($oldErrorReporting);
      return false;  }
  }

  /**
   * Add MAIL_TO and GROUP_ID to MASSMAIL
   *
   * @param STR $email
   * @param INT $groupID
   * @return BOOL
   */
  function sql_massmailAddAddress($email,$groupID) {
    global $database;
    if (!$this->sql_massmailAddressExists($email,$groupID)) {
      // Adresse existiert noch nicht
      $thisQuery = "INSERT INTO ".TABLE_PREFIX."mod_massmail_addresses SET group_id='$groupID',mail_to='$email'";
      $oldErrorReporting = error_reporting(0);
      $database->query($thisQuery);
      error_reporting($oldErrorReporting);
      if ($database->is_error()) {
        return false;   }
      else {
        return true;   }
    }
    else {
      return false;  }
  }

  /**
   * Delete MAIL_TO from MASSMAIL
   *
   * @param STRING $email
   * @return BOOL
   */
  function sql_massmailDeleteAddress($email) {
    global $database;
    $thisQuery = "DELETE FROM ".TABLE_PREFIX."mod_massmail_addresses WHERE mail_to='$email'";
    $oldErrorReporting = error_reporting(0);
    $database->query($thisQuery);
    error_reporting($oldErrorReporting);
    if ($database->is_error()) {
      return false;  }
    else {
      return true;  }
  }
} // sql_newsletter


/**
 * Extends class sql_newsletter with frontend functions
 *
 */
class newsletter extends sql_newsletter {
  var $newsletterGroup;
  var $newsletterGroupID;
  var $errorStr;
  var $fromEMail;
  var $toEMail;
  var $checkSum;
  var $textOnly;
  var $infoAdmin;

  /**
   * Constructor
   *
   * @param STR $newsletterGroup
   * @param STR $fromEMail
   * @param BOOL $textOnly
   * @param BOOL $infoAdmin
   * @return newsletter
   */
  function newsletter($newsletterGroup,$fromEMail,$textOnly=true,$infoAdmin=false) {
    $this->errorStr = '';
    $this->fromEMail = $fromEMail;
    $this->newsletterGroup = $newsletterGroup;
    $this->newsletterGroupID = $this->sql_getMassmailGroupID($this->newsletterGroup);
    $this->textOnly = $textOnly;
    $this->infoAdmin = $infoAdmin;
  }

  /**
   * Check $_REQUEST[] to prevent XSS
   *
   * @param REFERENCE STRING $request
   * @return STRING
   */
  function xssPrevent(&$request) {
    $request = html_entity_decode($request);
    $request = strip_tags($request);
    $request = trim($request);
    return $request;
  }

  /**
   * Process NEWSLETTER by $_REQUEST
   *
   */
  function action() {
    // prevent XSS
    $this->xssPrevent($_REQUEST['nl_email']);
    // Pruefen, ob Massmail installiert ist...
    if (!$this->sql_checkMassmailExists()) {
      $this->printError(nl_error_mm_not_exists);  }
    elseif (!$this->sql_getMassmailGroupID($this->newsletterGroup)) {
      $this->printError(sprintf(nl_error_mm_group_not_exists,$this->newsletterGroup));  }
    else {
      // ok - Newsletter ausfuehren
      isset($_REQUEST['nl_action']) ? $action = $_REQUEST['nl_action'] : $action = 'default';
      switch ($action):
        case 'subscribe':
          if ($_REQUEST['nl_subscribe'] == 1) {
            // in Newsletter EINTRAGEN
            if (!$this->checkSubscribe()) {
              $this->printError($this->errorStr);  }
            else {
              if ($this->sendActivationKey()) {
                $this->printSuccess(sprintf(nl_text_send_activation,$this->toEMail)); }
              else {
                $this->printError(sprintf(nl_error_sending_activation,$this->toEMail)); } } }
          else {
            // aus Newsletter AUSTRAGEN
            if (!$this->checkUnsubscribe()) {
              $this->printError($this->errorStr);  }
            else {
              if ($this->sendDeActivationKey()) {
                $this->printSuccess(sprintf(nl_text_send_deactivation,$this->toEMail)); }
              else {
                $this->printError(sprintf(nl_error_sending_deactivation,$this->toEMail));  } } }
          break;
        case 'delete':
          if ($this->checkDeActivation()) {
            $this->printSuccess(sprintf(nl_text_deactivated,$this->toEMail)); }
          else {
            $this->printError($this->errorStr);  }
          break;
        case 'activate':
          if ($this->checkActivation()) {
            $this->printSuccess(sprintf(nl_text_activated,$this->toEMail));  }
          else {
            $this->printError($this->errorStr);  }
          break;
        default:
          $this->showDlg();
      endswitch;
    }
  }


  /**
   * Display SUCCESS message
   *
   * @param STR $message
   */
  function printSuccess($message) {
    $this->printMessage($message);
  }

  /**
   * Display ERROR message
   *
   * @param STR $message
   */
  function printError($message) {
    $message = sprintf('<div class="newsletter_error">%s</div>',$message);
    $this->printMessage($message);
  }

  /**
   * Display a message
   *
   * @param STR $message
   */
  function printMessage($message) {
    $parser = new templateParser();
    $parser->add('form_action',$_SERVER['PHP_SELF']);
    $parser->add('message',$message);
    $parser->add('btn_submit',nl_btn_ok);
    $parser->parseTemplateFile(WB_PATH.'/modules/newsletter/htt/message.htt');
    $parser->echoHTML();
  }

  /**
   * Replacement for $wb->mail()
   * This version sends emails in TEXT ONLY FORMAT
   *
   * @param STR $fromaddress
   * @param STR $toaddress
   * @param STR $subject
   * @param STR $message
   * @return BOOL
   */
  function mail($fromaddress, $toaddress, $subject, $message) {
    // create PHPMailer object and define default settings
		$myMail = new wbmailer();
		// switch to textmode
    $myMail->IsHTML(false);
		// set user defined from address
		if ($fromaddress!='') {
			$myMail->From = $fromaddress;                           // FROM:
			$myMail->AddReplyTo($fromaddress);                      // REPLY TO:
		}

		// define recepient and information to send out
		$myMail->AddAddress($toaddress);                            // TO:
		$myMail->Subject = $subject;                                // SUBJECT
		$myMail->Body = $message;                                   // CONTENT (HTML)

		// check if there are any send mail errors, otherwise say successful
		if (!$myMail->Send()) {
			return false;
		} else {
			return true;
		}
	}

	/**
	 * Read SETTING VALUE by $settingName from WB SETTINGS table
	 *
	 * @param STR $settingName
	 * @return MIXED or BOOL=FALSE
	 */
  function getSettingValue($settingName) {
    global $database;
    global $sql_result;
    $oldErrorReporting = error_reporting(0);
    $sql_result = $database->query("SELECT * FROM ".TABLE_PREFIX."settings WHERE name='$settingName'");
    error_reporting($oldErrorReporting);
    if ($database->is_error()) {
      return false;  }
    if ($sql_result->numRows() > 0) {
      $arr = array();
      $arr = $sql_result->fetchRow();
      return $arr['value'];  }
    else {
      return false;  }
  }

  /**
   * Get PAGE URL by $pageID
   *
   * @param INT $pageID
   * @return STR or BOOL=FALSE
   */
  function getPageURLbyPageID($pageID) {
    global $database;
    global $sql_result;
    $oldErrorReporting = error_reporting(0);
    $sql_result = $database->query("SELECT * FROM ".TABLE_PREFIX."pages WHERE page_id='$pageID'");
    error_reporting($oldErrorReporting);
    if ($database->is_error()) {
      return false;  }
    if ($sql_result->numRows() > 0) {
      $arr = array();
      $arr = $sql_result->fetchRow();
      $link = WB_URL . $this->getSettingValue('pages_directory') . $arr['link'] . $this->getSettingValue('page_extension');
      return $link;  }
    else {
      return false; }
  }

  /**
   * Create Random Value for $checkSum
   *
   * @return INT
   */
  function getRandomValue() {
    srand((double)microtime()*1000000);
    return rand(10000000,99999999);
  }

  /**
   * Show Dialog for sign on or sign off newsletter
   *
   */
  function showDlg() {
    $parser = new templateParser();
    $parser->add('form_action',$_SERVER['PHP_SELF']);
    $parser->add('intro',nl_text_intro);
    $parser->add('header_email',nl_header_email);
    $parser->add('nl_email', '');
    $parser->add('text_subscribe',nl_text_subscribe);
    $parser->add('text_unsubscribe',nl_text_unsubscribe);
    $parser->add('btn_submit',nl_btn_submit);
    $parser->parseTemplateFile(WB_PATH.'/modules/newsletter/htt/submit.htt');
    $parser->echoHTML();
  }

  /**
   * Check the email address and create $checkSum
   *
   * @return BOOL
   */
  function checkSubscribe() {
    global $wb;
    global $database;
    if (isset($_REQUEST['nl_email'])) {
      $email = strtolower($_REQUEST['nl_email']);
      if ($wb->validate_email($email)) {
        // E-Mail Adresse ist in Ordnung
        if ($this->sql_massmailAddressExists($email,$this->newsletterGroupID)) {
          // Die E-Mail Adresse ist bereits eingetragen
          $this->errorStr = sprintf(nl_error_email_already_subscribed,$email);
          return false; }
        if ($this->sql_getCheckSumByEmail($email) != false) {
          // E-Mail bereits eingetragen, wartet auf Aktivierung
          $this->errorStr = sprintf(nl_error_email_not_activated, $email);
          return false;  }
        // ok - Freischaltcode generieren
        $this->checkSum = $this->getRandomValue();
        $this->toEMail = $email;
        // in die Datenbank eintragen
        if (!$this->sql_addEMailAndCheck($email,$this->checkSum)) {
          $this->errorStr = sprintf(nl_error_database_error, $database->get_error());
          return false; }
        else {
          // Aktivierung per E-Mail verschicken
          return true; } }
      else {
        $this->errorStr = sprintf(nl_error_invalid_email_address,$email);
        return false;  } }
    else {
      $this->errorStr = nl_error_no_email_address;
      return false;  }
  }

  /**
   * Create activation key and send email to user
   *
   * @return BOOL
   */
  function sendActivationKey() {
  	global $page_id;
    global $wb;
    if (($url = $this->getPageURLbyPageID($page_id)) != false) {
      $thisLink = $url.'?nl_action=activate&nl_check='.$this->checkSum; }
    else {
      ((strpos(strtolower(WB_URL),'wwww')) != false) ? $www = 'www' : $www = '';
      $url = "http://" .$www .$_SERVER["SERVER_NAME"] .$_SERVER["SCRIPT_NAME"];
      $thisLink = $url.'?nl_action=activate&nl_check='.$this->checkSum;  }
    if ($this->textOnly) {
      // send Mails in Text Format only
      $result = $this->mail($this->fromEMail,$this->toEMail,nl_subject_activate,sprintf(nl_mail_activate,$thisLink)); }
    else {
      $result = $wb->mail($this->fromEMail,$this->toEMail,nl_subject_activate,sprintf(nl_mail_activate,$thisLink)); }
    if ($result && $this->infoAdmin) {
      if ($this->textOnly) {
        $result = $this->mail($this->fromEMail,$this->fromEMail,nl_subject_admin_send_link, sprintf(nl_mail_admin_send_link,$this->toEMail,$thisLink));  }
      else {
        $result = $wb->mail($this->fromEMail,$this->fromEMail,nl_subject_admin_send_link, sprintf(nl_mail_admin_send_link,$this->toEMail,$thisLink));  }}
    return $result;
  }

  /**
   * Check the submitted activation link, add email to MASSMAIL and delete entry in NEWSLETTER MODULE
   *
   * @return BOOL
   */
  function checkActivation() {
    global $database;
    global $wb;
    $this->checkSum = $_REQUEST['nl_check'];
    $this->toEMail = $this->sql_getEMailByCheckSum($this->checkSum);
    if ($this->toEMail == false) {
      $this->errorStr = nl_error_get_email;
      return false;   }
    // E-Mail im Verteiler eintragen
    if ($this->sql_massmailAddAddress($this->toEMail,$this->newsletterGroupID)) {
      // Admin informieren?
      if ($this->infoAdmin) {
        if ($this->textOnly) {
          $this->mail($this->fromEMail,$this->fromEMail,nl_subject_admin_activated,sprintf(nl_mail_admin_activated,$this->toEMail));  }
        else {
          $wb->mail($this->fromEMail,$this->fromEMail,nl_subject_admin_activated,sprintf(nl_mail_admin_activated,$this->toEMail)); }}
      // erfolgreich in Massmail eingetragen, Adresse im Newsletter Modul loeschen
      if ($this->sql_deleteEMail($this->toEMail)) {
        return true; }
      else {
        $this->errorStr = sprintf(nl_error_database_error,$database->get_error());
        return false;  }  }
    else {
      $this->errorStr = sprintf(nl_error_database_error,$database->get_error());
      return false;  }
  }

  /**
   * Check email for unsubscribe
   *
   * @return BOOL
   */
  function checkUnsubscribe() {
    global $database;
    if (isset($_REQUEST['nl_email'])) {
      $email = strtolower($_REQUEST['nl_email']);
      if ($this->sql_massmailAddressExists($email,$this->newsletterGroupID)) {
        // ok, Adresse existiert...
        $this->checkSum = $this->getRandomValue();
        $this->toEMail = $email;
        // in die Datenbank eintragen
        if (!$this->sql_addEMailAndCheck($this->toEMail,$this->checkSum)) {
          $this->errorStr = sprintf(nl_error_database_error,$database->get_error());
          return false; }
        else {
          // Deaktivierungscode schicken
          return true;  } }
      else {
        // Adresse ist nicht im Verteiler
        $this->errorStr = sprintf(nl_error_not_in_mailing_list,$email);
        return false; } }
    else {
      // keine E-Mail Adresse angegeben
      $this->errorStr = nl_error_no_email_address;
      return false;  }
  }

  /**
   * Create DEACTIVATION link and send email
   *
   * @return BOOL
   */
  function sendDeActivationKey() {
    global $page_id;
    global $wb;
/*    if (($url = $this->getPageURLbyPageID($page_id)) != false) {
      $thisLink = $url.'?nl_action=delete&nl_check='.$this->checkSum; }
    else {
  */    ((strpos(strtolower(WB_URL),'wwww')) != false) ? $www = 'www' : $www = '';
      $url = "http://" .$www .$_SERVER["SERVER_NAME"] .$_SERVER["SCRIPT_NAME"];
      $thisLink = $url.'?nl_action=delete&nl_check='.$this->checkSum;   //}
    if ($this->textOnly) {
      $result = $this->mail($this->fromEMail,$this->toEMail,nl_subject_delete,sprintf(nl_mail_delete,$thisLink)); }
    else {
      $result = $wb->mail($this->fromEMail,$this->toEMail,nl_subject_delete,sprintf(nl_mail_delete,$thisLink)); }
    if ($result && $this->infoAdmin) {
      if ($this->textOnly) {
        $result = $this->mail($this->fromEMail,$this->fromEMail,nl_subject_admin_send_unlink,sprintf(nl_mail_admin_send_unlink,$this->toEMail,$thisLink));  }
      else {
        $result = $wb->mail($this->fromEMail,$this->fromEMail,nl_subject_admin_send_unlink,sprintf(nl_mail_admin_send_unlink,$this->toEMail,$thisLink));  } }
    return $result;
  }

  /**
   * Check the deactivation link, delete email from MASSMAIL and NEWSLETTER
   *
   * @return BOOL
   */
  function checkDeActivation() {
    global $database;
    $this->checkSum = $_REQUEST['nl_check'];
    $this->toEMail = $this->sql_getEMailByCheckSum($this->checkSum);
    if ($this->toEMail == false) {
      $this->errorStr = nl_error_get_email;
      return false;   }
    // E-Mail aus dem Verteiler loeschen
    if ($this->sql_massmailDeleteAddress($this->toEMail)) {
      if ($this->infoAdmin) {
        if ($this->textOnly) {
          $this->mail($this->fromEMail,$this->fromEMail,nl_subject_admin_deactivated,sprintf(nl_mail_admin_deactivated,$this->toEMail));  }
        else {
          $wb->mail($this->fromEMail,$this->fromEMail,nl_subject_admin_deactivated,sprintf(nl_mail_admin_deactivated,$this->toEMail)); }}
      // in Massmail geloescht, jetzt im Newsletter Modul loeschen
      if ($this->sql_deleteEMail($this->toEMail)) {
        return true; }
      else {
        $this->errorStr = sprintf(nl_error_database_error,$database->get_error());
        return false;  }  }
    else {
      $this->errorStr = sprintf(nl_error_database_error,$database->get_error());
      return false;  }
  }
}

?>