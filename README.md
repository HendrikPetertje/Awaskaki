
![Creative Commons BY, NC, ND][1]
#Theme Package for AwasKaki main pages.

This is the official Theme package for the Concrete5 based website www.awaskaki.com

##Setup
Follow the steps below to setup this theme on your own Concrete5 installation

 1. Download this repository to your local computer make sure to call the folder you put the default.php and other files in `awas kaki` Github will do this by default. Downloading can be done using the download button on the right or by pasting `git clone git@github.com:PicoReclame/Awaskaki.git` in your favorite git enabled console.
 2. Upload the folder to your Concrete5 installation and put it in `/themes/`. This themes folder should be in the root of your hosting. the adress of the new theme will then become `/themes/awaskaki`.
 3. Log in to the webiste using `www.example.com/index.php/login` or `www.example.com/login` on fancy-url enabled servers
 4. Go to the Themes dashboard using the button in the top of the page and select, install and enable the theme for all your pages.

##Rules of customisation

The design of the page is made by default.php and style.css in the the themes folder. I use the index.html file to make local previews of pages.

To make a default-page only editable field paste the following code in the page and change the example text to you desired name. never build 2 fields with the same name on 1 page, unless you want items from one block to show up in the other as well.

	<?php $a = new Area('Example'); $a->display($c); ?>

To make a global editable field (blocks placed in these global field will copy to all pages on your site) paste the code below and change the Example text to your desired name. In the awaskaki theme the header and the navigation are global fields. when editing the header in one page the changes will take effect on other pages to.

	<?php $a = new GlobalArea('FooterNav');	$a->display(); ?>

To point the browser to an image in the theme folder paste the code bellow to get the url for the theme folder.

	<?=$this->getThemePath()?>/ 

example:

	<img src="<?=$this->getThemePath()?>/example.png" />

The to the user streamed code will be:
	
	<img src="http://www.example.com/themes/awaskaki/example.png" />

To put the current page title in the page use the code bellow
You can put `<h1></h1>` wrappers around the code to ;)

	<?php echo $c->getCollectionName() ?>

For more info on Concrete5 refer to their documentation on their [website][2]

##Conact and more

New partner with Awas Kaki? contact me for more details regarding Hosting, E-mail management and more. Contact me using this site or [mine][3]


  [1]: http://i.creativecommons.org/l/by-nc-nd/3.0/88x31.png
  [2]: http://www.concrete5.org/documentation/using-concrete5/
  [3]: http://www.picoreclame.nl