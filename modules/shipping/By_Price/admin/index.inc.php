<?php
/*
+--------------------------------------------------------------------------
|   CubeCart 4
|   ========================================
|	CubeCart is a Trade Mark of CubeCart Limited
|   Copyright CubeCart Limited 2014. All rights reserved.
|	UK Private Limited Company No. 5323904
|   ========================================
|   Web: http://www.cubecart.com
|   Date: Friday, 15 April 2005
|   Email: info@cubecart.com
|	License: GPL-3.0 https://www.gnu.org/licenses/quick-guide-gplv3.html
+--------------------------------------------------------------------------
|	index.inc.php
|   ========================================
|	Configure Shipping Based on Free Price Level
+--------------------------------------------------------------------------
*/

if(!defined('CC_INI_SET')){ die("Access Denied"); }

permission('shipping','read',true);

require $glob['adminFolder'].CC_DS.'includes'.CC_DS.'header.inc.php';

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

<p class="pageTitle">By Price</p>
<?php
if(isset($msg))
{
	echo msg($msg);
}
?>
<p class="copyText">This shipping method is used to give free shipping on orders over a certain amount.</p>

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
  <td align="left" class="tdText"><strong>Free Shipping Level:<br />
    </strong>(Orders equal or over this are free!)  </td>
    <td class="tdText"><input type="text" name="module[level]" value="<?php echo $module['level']; ?>" class="textbox" size="10" /></td>
  </tr>
    <td align="left" class="tdText"><strong>Shipping Cost:</strong></td>
    <td class="tdText">
	<input name="module[amount]" type="text" value="<?php echo $module['amount']; ?>" size="10" />	</td>
  </tr>
  <tr>
    <td align="left" class="tdText"><strong>Handling Fee: </strong></td>
    <td class="tdText"><input name="module[handling]" type="text" value="<?php echo $module['handling']; ?>" size="9" /></td>
  </tr>
  	<tr>
    <td align="left" class="tdText"><strong>Tax Class:</strong></td>
    <td class="tdText">
	<?php
	$tax = $db->select("SELECT * FROM ".$glob['dbprefix']."CubeCart_taxes");
	?>
	<select name="module[tax]">
	<?php for($i = 0, $maxi = count($tax); $i < $maxi; ++$i){ ?>
	<option value="<?php echo $tax[$i]['id']; ?>" <?php if($module['tax'] == $tax[$i]['id']) echo "selected='selected'"; ?>>
	<?php echo $tax[$i]['taxName']; ?>
	</option>
	<?php } ?>
	</select>
	</td>
  </tr>
    <tr>
    <td align="right" class="tdText">&nbsp;</td>
    <td class="tdText"><input type="submit" class="submit" value="Edit Config" /></td>
  </tr>
</table>
</form>
