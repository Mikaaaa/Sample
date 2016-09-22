<?php
function listRoutes($dir)
{
	if ($dir == "") {
		echo 'veuillez saisir un nom pour le Controller.';
	}	
	try {
		chdir(substr(getcwd(),0,strlen(getcwd())-6).$dir);
		echo shell_exec('php artisan route:list');
	} catch (Exception $e) {
		echo "Une erreur eest survenue, vérifier si il n'y a pas d'autre installation portant le même nom que ";
	}
}
?>		