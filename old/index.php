<?php
/**
 * @version    $Id: index.php 20196 2011-01-09 02:40:25Z ian $
 * @package    Joomla.Site
 * @copyright  Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/* The following line gets the application object for things like displaying the site name */
$app = JFactory::getApplication();
?>
<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
</head>

<body>
<div id="main">
	<div id="header" class="shadow_wrapper"></div>
	<div class="v_clear"></div>
	<div id="content">
		<div id="rightColumn" class="shadow_wrapper">
			<form id="search">
				<input type="text" name="address" class="shadow_wrapper">
				<input type="text" name="what" class="shadow_wrapper">
				<input type="submit" value="Find">
			</form>
			<div id="popular"> </div>
		</div>
		
		<div id="leftColumn">
			<div id="menu" class="shadow_wrapper">
				<a class="menuItem" href="#">
				<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/sabayon.jpg" width="100px" height="100px" >
				<b>Sabayon</b>
				</a>
				<a class="menuItem" href="#">
				<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/sabayon.jpg" width="100px" height="100px" >
				<b>Sabayon</b>
				</a>
				<a class="menuItem" href="#">
				<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/sabayon.jpg" width="100px" height="100px" >
				<b>Sabayon</b>
				</a>
				<a class="menuItem" href="#">
				<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/sabayon.jpg" width="100px" height="100px" >
				<b>Sabayon</b>
				</a>
				<a class="menuItem" href="#">
				<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/sabayon.jpg" width="100px" height="100px" >
				<b>Sabayon</b>
				</a>
				<a class="menuItem" href="#">
				<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/sabayon.jpg" width="100px" height="100px" >
				<b>Sabayon</b>
				</a>
				<a class="menuItem" href="#">
				<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/sabayon.jpg" width="100px" height="100px" >
				<b>Sabayon</b>
				</a>
				<a class="menuItem" href="#">
				<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/sabayon.jpg" width="100px" height="100px" >
				<b>Sabayon</b>
				</a>
				<a class="menuItem" href="#">
				<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/sabayon.jpg" width="100px" height="100px" >
				<b>Sabayon</b>
				</a>
				<a class="menuItem" href="#">
				<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/sabayon.jpg" width="100px" height="100px" >
				<b>Sabayon</b>
				</a>
				<a class="menuItem" href="#">
				<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/sabayon.jpg" width="100px" height="100px" >
				<b>Sabayon</b>
				</a>
				<a class="menuItem" href="#">
				<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/sabayon.jpg" width="100px" height="100px" >
				<b>Sabayon</b>
				</a>
				<a class="menuItem" href="#">
				<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/sabayon.jpg" width="100px" height="100px" >
				<b>Sabayon</b>
				</a>
				
				
			</div>
		</div>
	
		
	</div>
	<div class="v_clear"></div>
	<div id="footer" class="shadow_wrapper"></div>
</div>
</body>
</html>
