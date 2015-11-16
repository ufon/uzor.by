<?php
header('Content-Type: text/html; charset=utf-8');
session_start();

require 'include/flatfile.inc.php';
require 'include/manage.inc.php';
require 'include/functions.php';
include ('header.php');
if ($_POST['submitt']) {
 if ($_POST['admin'] == 'admin') {
 $_SESSION['admin'] = true;
 }
}

if ($_SESSION['admin']) {
if ($_POST['submit']){

$vopr = $_POST['vopradd'];
$pass1 = $_POST['1'];
$pass1img = $_POST['img1'];
$true1 = 1;
$pass2 = $_POST['2'];
$pass2img = $_POST['img2'];
$true2 = 0;
$pass3 = $_POST['3'];
$pass3img = $_POST['img3'];
$true3 = 0;

$name = file_newname_count('data/answers/'.$vopr.'/', '');

if (!is_dir('data/answers/'.$vopr.'/')) {
	mkdir('data/answers/'.$vopr, 0700);
}

$questdata1['name'] = 1;
$questdata1['pass'] = $pass1;
$questdata1['true'] = $true1;
$questdata1['img'] = $pass1img;

$questdata2['name'] = 2;
$questdata2['pass'] = $pass2;
$questdata2['true'] = $true2;
$questdata2['img'] = $pass2img;

$questdata3['name'] = 3;
$questdata3['pass'] = $pass3;
$questdata3['true'] = $true3;
$questdata3['img'] = $pass3img;

savePass($vopr, 1, $questdata1);
savePass($vopr, 2, $questdata2);
savePass($vopr, 3, $questdata3);


echo "Успешно добавлено 3 ответов на $vopr вопрос";
?>
        <div class="row">
        <div class="col-md-12">
                	<center>
<div style="width:300px">
<form action="addpass.php" method="post">
    <div style="width:100px">
   <select name="vopradd">
   <option selected="selected" value="1"></option>
    <? 
    for ($i=1; $i<=20; $i++)  {
      echo '<option value='.$i.'>'.$i.'</option>'; 
    }
    ?>
   </select></div>
   <br>
   <p>
   <input class="form-control" type="text" name="1" placeholder="Ответ..." /> 
   <input class="form-control" type="text" name="img1" placeholder="URL картинки..." /> 
   </p>
   <hr>
   <br>
   <p>
   <input class="form-control" type="text" name="2" placeholder="Ответ..." />
      <input class="form-control" type="text" name="img2" placeholder="URL картинки..." /> 
   <br>
   <input class="form-control" type="text" name="3" placeholder="Ответ..." />
      <input class="form-control" type="text" name="img3" placeholder="URL картинки..." /> 
   </p>
   <p><input type="submit" class="btn btn-lg btn-success" name="submit" value="Проверить!"></p>
 </form>  
</div>
</center>
</div>
    </div>
<?
}

else {


?>
         <div class="row">
        <div class="col-md-12">
                	<center>
<div style="width:300px">
<form action="addpass.php" method="post">
		<div style="width:100px">
   <select name="vopradd">
   <option selected="selected" value="1"></option>
    <? 
    for ($i=1; $i<=20; $i++)  {
    	echo '<option value='.$i.'>'.$i.'</option>'; 
    }
    ?>
   </select></div>
   <br>
   <p>
   <input class="form-control" type="text" name="1" placeholder="Ответ..." />	
   <input class="form-control" type="text" name="img1" placeholder="URL картинки..." /> 
   </p>
   <hr>
   <br>
   <p>
   <input class="form-control" type="text" name="2" placeholder="Ответ..." />
      <input class="form-control" type="text" name="img2" placeholder="URL картинки..." /> 
   <br>
   <input class="form-control" type="text" name="3" placeholder="Ответ..." />
      <input class="form-control" type="text" name="img3" placeholder="URL картинки..." /> 
   </p>
   <p><input type="submit" class="btn btn-lg btn-success" name="submit" value="Проверить!"></p>
 </form>	
</div>
</center>
</div>
    </div>
<?

}
}
else {
?>
<form action="addpass.php" method="post">
<input class="form-control" type="password" name="admin" placeholder="Пароль..." />
<input type="submit" class="btn btn-lg btn-success" name="submitt" value="Проверить!">
</form>
<?
}
include ('footer.php');
?>