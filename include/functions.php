<?php

session_start();

function file_newname($path, $filename) {
    if ($pos = strrpos($filename, '.')) {
           $name = substr($filename, 0, $pos);
           $ext = substr($filename, $pos);
    } else {
           $name = $filename;
    }

    $hello = array();
    $newpath = $path.'/'.$filename.'.dat'.'.php';
    $newname = $filename;
    $counter = 0;
    
    while (file_exists($newpath)) {
           $newname =  $counter .'_'. $name;
           $newpath = $path.'/'.$newname.'.dat'.'.php';
           $counter++;
     }

     $hello[1] = $newname;
     $hello[2] = $counter;

    return $hello;
}

function removeDirectory($dir) {
    if ($objs = glob($dir."/*")) {
       foreach($objs as $obj) {
         is_dir($obj) ? removeDirectory($obj) : unlink($obj);
       }
    }
    rmdir($dir);
  }

function file_newname_count($path, $filename) {

    $hello = array();
    $newpath = $path.'/1'.$filename.'.dat'.'.php';
    $newname = '1'.$filename;
    $counter = 2;
    
    while (file_exists($newpath)) {
           $newname =  $counter .''.$filename.'';
           $newpath = $path.'/'.$newname.'.dat'.'.php';
           $counter++;
     }

     $hello[1] = $newname;
     $hello[2] = $counter-1;

    return $hello;
}

?>