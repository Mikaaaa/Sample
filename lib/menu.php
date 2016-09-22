<?php
$dir = scandir(substr(getcwd(),0,strlen(getcwd())-6));
for ($i=2; $i < count($dir); $i++) { 
	if (file_exists(substr(getcwd(),0,strlen(getcwd())-6).$dir[$i].'/.env')) {
		echo '<li class=""><div class="collapsible-header"><b><i class="material-icons">website</i>'.$dir[$i].'</b></div><div class="collapsible-body"><ul>
	<li><a href="?page=controller&dir='.$dir[$i].'">Controller</a></li>
	<li><a href="?page=model&dir='.$dir[$i].'">Model</a></li>
	<li><a href="?page=middleware&dir='.$dir[$i].'">Middleware</a></li>
	<li><a href="?page=route&dir='.$dir[$i].'">Route</a></li>
</ul></div></li>';
	}	
}

?>  