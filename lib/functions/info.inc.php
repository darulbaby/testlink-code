<?php
/** 
 * TestLink Open Source Project - http://testlink.sourceforge.net/
 * This script is distributed under the GNU General Public License 2 or later. 
 *
 * Functions for GUI support
 * 
 * @package 	  TestLink
 * @author 		  Martin Havlat
 * @copyright 	2005-2009, TestLink community 
 * @filesource  info.inc.php,v 1.9 2010/05/15 11:11:51 franciscom Exp $
 * @link 		    http://www.teamst.org/index.php
 * @uses 		    common.php
 *
 * @internal revisions
 * 
 */

/** @uses email_api.php */
require_once("../functions/email_api.php");


/**
 * Display simple info and exit
 *
 * @param string $title
 * @param string $message
 */
function displayInfo($title, $message)
{
	$smarty = new TLSmarty;
  $gui = new stdClass();
	$gui->title = $title;
	$gui->content = $message;

	$gui->hint_text = $gui->link_to_op = '';
	$smarty->assign('gui',$gui);
	$smarty->display('workAreaSimple.tpl');
	exit();
}
?>