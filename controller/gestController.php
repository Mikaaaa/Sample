<?php
function listControllers($dir)
{
	$file = scandir(substr(getcwd(),0,strlen(getcwd())-6).$dir.'/app/Http/Controllers');
	for ($i=0; $i < count($file); $i++) { 
		if (filetype(substr(getcwd(),0,strlen(getcwd())-6).$dir.'/app/Http/Controllers/'.$file[$i]) == "file") {
			echo '<li class="collection-item blue-grey darken-1"><div>'.$file[$i].'<a href="?page=controller&dir='.$dir.'&file='.$file[$i].'" class="secondary-content"><i class="material-icons">folder_open</i></a></div></li>';
		}
		
		
	}
}
function openfile($dir,$value)
{
	if ($value == "") {
		return 'veuillez sélectionner un controller.';
	}	
	try {
		$var = substr(getcwd(),0,strlen(getcwd())-6).$dir.'\app\Http\Controllers';
		return shell_exec('explorer '.str_replace("/", "\\", $var));
	} catch (Exception $e) {
		return "Une erreur eest survenue, vérifier si il n'y a pas d'autre installation portant le même nom que ".$value;
	}
}
function createController($dir,$value)
{
	if ($value == "") {
		return 'veuillez saisir un nom pour le Controller.';
	}	
	try {
		chdir(substr(getcwd(),0,strlen(getcwd())-6).$dir);
		return shell_exec('php artisan make:controller '.$value);
	} catch (Exception $e) {
		return "Une erreur eest survenue, vérifier si il n'y a pas d'autre installation portant le même nom que ".$value;
	}
}

?>