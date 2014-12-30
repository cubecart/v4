<?php
/*
+--------------------------------------------------------------------------
|   CubeCart 4
|   ========================================
|	CubeCart is a registered trade mark of CubeCart Limited
|   Copyright CubeCart Limited 2014. All rights reserved.
|	UK Private Limited Company No. 5323904
|   ========================================
|   Web: http://www.cubecart.com
|   Email: sales@cubecart.com
|	License: GPL-3.0 https://www.gnu.org/licenses/quick-guide-gplv3.html
+--------------------------------------------------------------------------
|	index.inc.php
|   ========================================
|	Configure 2Checkout (v2)
+--------------------------------------------------------------------------
*/
if(!defined('CC_INI_SET')){ die("Access Denied"); }

permission('settings','read',true);

require($glob['adminFolder'].CC_DS.'includes'.CC_DS.'header.inc.php');

if(isset($_POST['module'])){
	require CC_ROOT_DIR.CC_DS.'modules'.CC_DS.'status.inc.php';
	$cache = new cache('config.'.$moduleName);
	$cache->clearCache();
	//$module = fetchDbConfig($moduleName); // Uncomment this is you wish to merge old config with new
	$module = array(); // Comment this out if you don't want the old config to merge with new
	$msg = writeDbConf($_POST['module'], $moduleName, $module);

}
$module = fetchDbConfig($moduleName);
?>
<p><a href="http://www.2checkout.com/"><img src="modules/<?php echo $moduleType; ?>/<?php echo $moduleName; ?>/admin/logo.gif" alt="" border="0" title="" /></a></p>
<?php
if(isset($msg))
{
	echo msg($msg);
}
?>
<p class="copyText">&quot;Start selling in minutes.&quot;</p>

<form action="<?php echo $glob['adminFile']; ?>?_g=<?php echo $_GET['_g']; ?>&amp;module=<?php echo $_GET['module']; ?>" method="post" enctype="multipart/form-data">
<table border="0" cellspacing="1" cellpadding="3" class="mainTable">
  <tr>
    <td colspan="2" class="tdTitle">Configuration Settings </td>
  </tr>
  <tr>
    <td align="left" class="tdText"><strong>Status:</strong></td>
    <td class="tdText">
	<select name="module[status]">
		<option value="1" <?php if($module['status']==1) echo "selected='selected'"; ?>>Enabled</option>
		<option value="0" <?php if($module['status']==0) echo "selected='selected'"; ?>>Disabled</option>
    </select>	</td>
  </tr>
   <tr>
  	<td align="left" class="tdText"><strong>Description:</strong>	</td>
    <td class="tdText"><input type="text" name="module[desc]" value="<?php echo $module['desc']; ?>" class="textbox" size="30" /></td>
  </tr>
  <tr>
  <td align="left" class="tdText"><strong>Account Number:</strong></td>
    <td class="tdText"><input type="text" name="module[acNo]" value="<?php echo $module['acNo']; ?>" class="textbox" size="30" /></td>
  </tr>
  <tr>
  <td align="left" class="tdText"><strong>Default:</strong></td>
      <td class="tdText">
	<select name="module[default]">
		<option value="1" <?php if($module['default'] == 1) echo "selected='selected'"; ?>>Yes</option>
		<option value="0" <?php if($module['default'] == 0) echo "selected='selected'"; ?>>No</option>
	</select>	</td>
  </tr>
  <tr>
  <td align="left" class="tdText"><strong>Test Mode:</strong></td>
      <td class="tdText">
	<select name="module[testMode]">
		<option value="Y" <?php if($module['testMode'] == "Y") echo "selected='selected'"; ?>>On</option>
		<option value="N" <?php if($module['testMode'] == "N") echo "selected='selected'"; ?>>Off</option>
	</select>	</td>
  </tr>
  <tr>
    <td align="right" class="tdText"><div align="left"><strong>Return URL's (All): </strong></div></td>
    <td class="tdText"><?php echo $GLOBALS['storeURL']."/index.php?_g=rm&amp;type=gateway&amp;cmd=process&amp;module=2Checkout"; ?></td>
  </tr>
  <tr>
    <td align="right" class="tdText">&nbsp;</td>
    <td class="tdText"><input type="submit" class="submit" value="Edit Config" /></td>
  </tr>
</table>
</form>
