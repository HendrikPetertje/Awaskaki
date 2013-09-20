<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php Loader::element('header_required'); ?>
<link href="<?=$this->getThemePath()?>/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="head-container">
	<div id="head-content">
    	<div id="head-content-logo">
   	    <a href="/" title="Awas Kaki - Home"><img src="<?=$this->getThemePath()?>/images/head-content-logo.png" width="420" height="127" alt="Awas Kaki" /></a></div>
        <div id="head-content-meta">
        <form action="/index.php/zoeken/">
        <input name="search_paths[]" type="hidden" value="">
        <div class="search-box"><input type="text" class="search-input" name="query" value="Zoeken" onblur="if (this.value=='') { this.value='Zoeken' }" onfocus="if (this.value=='Zoeken') { this.value='' };"></div><div class="submit-box"><input type="submit" class="submit-input" value="" /></div><div id="cleardiv"></div>
        </form>
        </div>
        <div id="cleardiv"></div>
    </div>
</div>

<div id="nav-container">
	<div id="nav-content">
    	<div id="nav-content-navigation">
         <?php  
		$a = new GlobalArea('Nav');
		$a->display();
		?>
        </div>
        <div id="nav-content-meta">
        <a href="/index.php/login" title="Inloggen op site">Inloggen</a>
        </div>
        <div id="cleardiv"></div>
    </div>
</div>

<div id="main-container">
	<div id="main-content">
    	<div id="main-content-3x1">
    		<div id="main-content-3x1-top">
        	<h1><?php echo $c->getCollectionName() ?></h1>
            <?php $a = new Area('Main'); $a->display($c); ?>
            <div id="cleardiv"></div>
    		</div>
        	<div id="main-content-3x1-bottom">
    		</div>
        </div>
        <div id="cleardiv"></div> 
        
        <div id="main-content-1x1">
        	<div id="main-content-1x-top">
            <?php $a = new Area('Block 1'); $a->display($c); ?>
            </div>
            <div id="main-content-1x-bottom">
            </div>
        </div>
        
        <div id="main-content-1x2">
        	<div id="main-content-1x-top">
            <?php $a = new Area('Block 2'); $a->display($c); ?>
            </div>
            <div id="main-content-1x-bottom">
            </div>
        </div>

        <div id="main-content-1x3">
        	<div id="main-content-1x-top">
            <?php $a = new Area('Block 3'); $a->display($c); ?>
            </div>
            <div id="main-content-1x-bottom">
            </div>
        </div>
        <div id="cleardiv"></div>
    </div>
</div>

<div id="footer-container">
	<div id="footer-content">
	    <div id="footer-content-123">
        <font class="footertitle">SITEMAP</font><br /><br />
        <?php  
		$a = new GlobalArea('FooterNav');
		$a->display();
		?>
    	</div>
        <div id="footer-content-123">
        <font class="footertitle">AWAS KAKI</font><br /><br />
        Stichting Awas Kaki<br />
        Groustins 25<br />
        9251 PD  BURGUM
        Tel: 06 13 69 56 72<br /><br />
        <font class="footertitle">POWERED BY</font><br /><br />
        <a href="http://www.amonfog.nl" title="Ga naar Amonfog Design Life and More">Amonfog Design Life and More</a>
    	</div>
        <div id="footer-content-123">
        <font class="footertitle">TWITTER</font><br /><br />
        <?php  
		$a = new GlobalArea('Twitter');
		$a->display();
		?>
    	</div>
        <div id="footer-content-4">
        <font class="footertitle">VIND ONS OOK OP</font><br /><br />
        <a href="http://twitter.com/#!/awaskakindonesi"><img src="<?=$this->getThemePath()?>/images/socialmedia/twitter.png" width="32" height="32" alt="Twitter" /></a> 
        <a href="http://www.facebook.com/profile.php?id=1352589656&sk=info"><img src="<?=$this->getThemePath()?>/images/socialmedia/facebook.png" width="32" height="32" alt="Facebook" /></a> 
        <a href="http://www.youtube.com/user/Qviv01"><img src="<?=$this->getThemePath()?>/images/socialmedia/youtube.png" width="32" height="32" alt="Youtube" /></a>
    	</div>
        <div id="cleardiv"></div>
    </div>
</div>
<?php  require(DIR_FILES_ELEMENTS_CORE . '/footer_required.php'); ?>
</body>
</html>
