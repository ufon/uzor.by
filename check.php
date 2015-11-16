<?php 
header('Content-Type: text/html; charset=utf-8');
session_start();
require 'include/flatfile.inc.php';
require 'include/manage.inc.php';
$sitename = 'victory.ru';
$admin = false;


if ($_POST['otvet']) {
	
	$inc = $_SESSION['number'][$_SESSION['i']+1];
	$test = file_exists('data/questions/'.$inc.'.dat.php');
	
	if ($test == FALSE){
	
	$answers = listEntry('answers/'.$_SESSION['number'][$_SESSION['i']].'/');
	
	if($answers) {
							
							$oneAns = readNote($_SESSION['number'][$_SESSION['i']], $_POST['otvet']);
							
							if ($oneAns['true'] == 1)
							{
								$_SESSION['mark']++;
							}
							
							else
							{
								$_SESSION['badmark']++;								
							}
					}
	else {		
						$error = 'Что то не то.';
						$goto = '/test';
						include ('error.php');
		}
	$error = '<center><img src="preloader.gif" alt="" /></center>';
	$goto = '/end';	
	include ('error.php');
	
	}

	else {
	
	$answers = listEntry('answers/'.$_SESSION['number'][$_SESSION['i']].'/');
	
	if($answers) {
							
							$oneAns = readNote($_SESSION['number'][$_SESSION['i']], $_POST['otvet']);
							
							if ($oneAns['true'] == 1)
							{

								$_SESSION['mark']++;
								$_SESSION['i'] = $_SESSION['i'] + 1;
								header( 'Location: /test', true, 303 );

							}
							
							else
							{
								$_SESSION['badmark']++;								
								$_SESSION['i'] = $_SESSION['i'] + 1;
								header( 'Location: /test', true, 303 );
							}	
					}
	else {		
						$error = 'Что то не то.';
						$goto = '/error';
						include ('error.php');
						
		}
}
}

else {

	$error = 'Не пришел ответ';
	$goto = '/test';
	include ('error.php');

}
?>					