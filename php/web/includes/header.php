<header>
	<?//=$mainMenu;?>
<?php

	$mainMenu = menuBuilder("main-menu", [
		"home"=>"Home",
		"about-us"=>"About us",
		"contact"=>"contact us"
	]); 

	echo $mainMenu;
?>
</header>