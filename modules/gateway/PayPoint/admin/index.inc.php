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
|	Configure PayPoint
+--------------------------------------------------------------------------
*/

if(!defined('CC_INI_SET')){ die("Access Denied"); }

permission("settings","read",$halt=TRUE);

require($glob['adminFolder'].CC_DS."includes".CC_DS."header.inc.php");

if(isset($_POST['module'])){
	require CC_ROOT_DIR.CC_DS.'modules'.CC_DS.'status.inc.php';	
	$cache = new cache("config.".$moduleName);
	$cache->clearCache();
	//$module = fetchDbConfig($moduleName); // Uncomment this is you wish to merge old config with new
	$module = array(); // Comment this out if you don't want the old config to merge with new
	$msg = writeDbConf($_POST['module'], $moduleName, $module);
	
}
$module = fetchDbConfig($moduleName);
?>

<p><a href="http://www.paypoint.net"><img src="modules/<?php echo $moduleType; ?>/<?php echo $moduleName; ?>/admin/logo.gif" alt="" border="0" title="" /></a></p>
<?php 
if(isset($msg))
{ 
	echo msg($msg); 
} 
?>

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
    </select>
	</td>
  </tr>
   <tr>
  	<td align="left" class="tdText"><strong>Description:</strong>
	</td>
    <td class="tdText"><input type="text" name="module[desc]" value="<?php echo $module['desc']; ?>" class="textbox" size="30" /></td>
  </tr>
  <tr>
  <td align="left" class="tdText"><strong>Vendor Name:</strong></td>
    <td class="tdText"><input type="text" name="module[merchant]" value="<?php echo $module['merchant']; ?>" class="textbox" size="30" /></td>
  </tr>
  <td align="left" class="tdText"><strong>Remote Password:</strong></td>
    <td class="tdText"><input type="text" name="module[remote_password]" value="<?php echo $module['remote_password']; ?>" class="textbox" size="30" /></td>
  </tr>
  <td align="left" class="tdText"><strong>Digest Key:</strong></td>
    <td class="tdText"><input type="text" name="module[digest_key]" value="<?php echo $module['digest_key']; ?>" class="textbox" size="30" /></td>
  </tr>
   <tr>
     <td align="left" class="tdText"><strong>Testing:</strong></td>
     <td class="tdText"><select name="module[testmode]">
       <option value="true" <?php if($module['testmode'] == "true") echo "selected='selected'"; ?>>Test Mode (Success)</option>
       <option value="false" <?php if($module['testmode'] == "false") echo "selected='selected'"; ?>>Test Mode (Fail)</option>
       <option value="live" <?php if($module['testmode'] == "live") echo "selected='selected'"; ?>>Live</option>
     </select></td>
   </tr>
   <td align="left" class="tdText"><strong>Default:</strong></td>
      <td class="tdText">
	<select name="module[default]">
		<option value="1" <?php if($module['default'] == 1) echo "selected='selected'"; ?>>Yes</option>
		<option value="0" <?php if($module['default'] == 0) echo "selected='selected'"; ?>>No</option>
	</select>
	</td>
  </tr>
  <tr>
    <td align="right" class="tdText">&nbsp;</td>
    <td class="tdText"><input type="submit" class="submit" value="Edit Config" /></td>
  </tr>
</table>
</form>
