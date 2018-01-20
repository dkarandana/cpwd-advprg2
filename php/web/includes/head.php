<?php
	
function menuBuilder( $selectorId, $menuItems ){

	$menuHTML =  "<ul class=\"menu\" id=\"$selectorId\">";

	foreach ($menuItems as $key => $value) {

		$menuHTML .= <<<LI
		<li>
			<a href="./{$key}.php">$value</a>
		</li>
LI;
	}

	$menuHTML .= "</ul>";

	return $menuHTML;
}

?>


<link rel="stylesheet" type="text/css" href="style/main.css">