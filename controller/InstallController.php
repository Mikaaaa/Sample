<?php
if (empty($_REQUEST['result'])) {
	$_REQUEST['result'] = "";
}

function createBlog($value){
	if ($value == "") {
		return 'veuillez saisir un nom pour le blog.';
	}	
	try {
		chdir(substr(getcwd(),0,strlen(getcwd())-6));
		return shell_exec('composer create-project --prefer-dist laravel/laravel '.$value);
	} catch (Exception $e) {
		return "Une erreur eest survenue, vérifier si il n'y a pas d'autre installation portant le même nom que ".$value;
	}	
}
?>