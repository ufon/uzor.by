<?php

function showCaptcha()
{
	return date('j'). ' + ' .(date('N') + date('g')). ' = ? <input type = "text" name = "bot"/required>';
}

function checkCaptcha()
{
	return isset($_POST['bot'][0]) && $_POST['bot'] == date('j') + date('N') + date('g');
}

?>
