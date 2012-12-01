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
 <header> 
        <nav>
				<a class="top_nav" id="name" href="#"><b>Name</b> <span>main page</span></a>
				<span  id="languages">
						<a class="top_nav lang" id="ua" href="ua">Ua</a>
						<a class="top_nav lang" id="ru" href="ru">Ru</a>
						<a class="top_nav lang" id="en" href="en">En</a>
				</span>
				<a class="top_nav" href="#">Акції</a>
				<a class="top_nav" href="#">Ресторани</a>
				<a class="top_nav" href="#">Про нас</a>
				<a class="top_nav" href="#">Контакти</a>
				
				<span id="login">
						<a class="top_nav" href="login">Sing in</a>/<a class="top_nav" href="login">Sing up</a>
				</span>
		</nav>
 </header>
        <section>
            <article >
                <h1> Я хочу ...</h1>
                
            </article>
 
        </section>
 
        <aside><form><input type="text" value="Search"></form> </aside>
        <footer>
				<section id="fast_menu">
				<a><div><img width="90px" height="90px" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/sabayon.jpg"></div><p>sabayon</p></a>
				<a><div><img width="90px" height="90px" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/sabayon.jpg"></div><p>sabayon</p></a>
				<a><div><img width="90px" height="90px" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/sabayon.jpg"></div><p>sabayon</p></a>
				<a><div><img width="90px" height="90px" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/sabayon.jpg"></div><p>sabayon</p></a>
				<a><div><img width="90px" height="90px" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/sabayon.jpg"></div><p>sabayon</p></a>
				<a><div><img width="90px" height="90px" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/sabayon.jpg"></div><p>sabayon</p></a>
				<a><div><img width="90px" height="90px" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/sabayon.jpg"></div><p>sabayon</p></a>
				</section>
				<div id="feedback"><h3>feedback</h3></div>
		</footer>
 
</body>
</html>
