<?php 
	ini_set('display_errors', 1);

	//define('BASE_URL', 'http://www.bootstrap.vm/');
	define('BASE_URL', 'http://bootstrap/');
	define('IMAGE_ROOT_URL', BASE_URL.'images/');

	define('HELPER_ROOT', getcwd());
	
	include_once HELPER_ROOT.'/helpers/html_helper.php';
?>