<?php
/*
+--------------------------------------------------------------------------
|   CubeCart 4
|   ========================================
|	CubeCart is a registered trade mark of CubeCart Limited
|   Copyright CubeCart Limited 2006. All rights reserved.
|   5 Bridge Street,
|   Bishops Stortford,
|   HERTFORDSHIRE.
|   CM23 2JU
|   UNITED KINGDOM
|	UK Private Limited Company No. 5323904
|   ========================================
|   Web: http://www.cubecart.com
|   Email: sales@cubecart.com
|	License: GPL-3.0 https://www.gnu.org/licenses/quick-guide-gplv3.html
+--------------------------------------------------------------------------
|	transfer.inc.php
|   ========================================
|	Core functions for the PayJunction Gateway
+--------------------------------------------------------------------------
*/
if (!defined('CC_INI_SET')) die("Access Denied");
function repeatVars() {
	return false;
}

function fixedVars() {
	return false;
}

///////////////////////////
// Other Vars
////////
$formAction = 'index.php?_g=co&amp;_a=step3&amp;process=1&amp;cart_order_id='.$_GET['cart_order_id'];
$formMethod = 'post';
$formTarget = '_self';
$transfer = 'manual';
?>