<?php
$dir = ['Controlleur','Liste route','Middleware','Modèle','Migration'];
echo '<div class="collapsible-body"><ul>';
for ($i=2; $i < count($dir); $i++) { 
	echo '<li><a href=""><i class="material-icons">code</i>'.$dir[$i].'</a></li>';	
}
echo "</ul></div></li>";
?>