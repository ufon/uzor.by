<?php

function fglob($pattern)
{
	$files = glob($pattern);
	if(!$files) $files = array();
	return $files;
}

function readEntry($type, $file)
{
	$entries = json_decode(substr(file_get_contents('data/' .$type. '/' .$file. '.dat.php'), 13), true);
	foreach($entries as &$entry)
	{
		if(is_string($entry))
		{
			$entry = htmlspecialchars($entry);
		}
	}
	return $entries;
}

function readNote($name, $file)
{
	$entries = json_decode(substr(file_get_contents('data/answers/' .$name. '/' .$file. '.dat.php'), 13), true);
	foreach($entries as &$entry)
	{
		if(is_string($entry))
		{
			$entry = htmlspecialchars($entry);
		}
	}
	return $entries;
}

function saveEntry($type, $file, &$data)
{
	file_put_contents('data/' .$type. '/' .$file. '.dat.php', '<?php exit;?>' .PHP_EOL.PHP_EOL.json_encode($data));
}

function saveNote($name, $file, &$data)
{
	file_put_contents('data/hash/' .$name. '/' .$file. '.dat.php', '<?php exit;?>' .PHP_EOL.PHP_EOL.json_encode($data));
}

function savePass($name, $file, &$data)
{
	file_put_contents('data/answers/' .$name. '/' .$file. '.dat.php', '<?php exit;?>' .PHP_EOL.PHP_EOL.json_encode($data));
}

function deleteEntry($type, $file)
{
	unlink('data/' .$type. '/' .$file. '.dat.php');
}

function deletePass($type, $file)
{
	unlink('data/passwords/' .$type. '/' .$file. '.dat.php');
}

function listEntry($type)
{
	return array_map('pathToId', fglob('data/' .$type. '*.dat.php'));
}

function isValidEntry($type, $file)
{
	return is_file('data/' .$type. '/' .$file. '.dat.php');
}

function pathToId($path)
{
	return basename($path, '.dat.php');
}

?>
