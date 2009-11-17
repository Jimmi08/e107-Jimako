<?php
/*
 * e107 website system
 *
 * Copyright (C) 2001-2009 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 *
 *
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/wmessage.php,v $
 * $Revision: 1.2 $
 * $Date: 2009-11-17 11:13:04 $
 * $Author: marj_nl_fr $
 */

if (!defined('e107_INIT')) { exit; }

$text = "This page allows you to set a message that will appear at the top of your front page all the time it's activated. You can set a different message for guests, registered/logged-in members and administrators.";
$ns -> tablerender("WMessage Help", $text);
