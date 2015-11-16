<?php
header('Content-Type: text/html; charset=utf-8');
session_start();

require 'include/flatfile.inc.php';
require 'include/manage.inc.php';
require 'include/functions.php';
include ('header.php');

if ($_POST['submitt']) {
 if ($_POST['admin'] == 'admin'){
 $_SESSION['admin'] = true;
 }
}

if ($_SESSION['admin']) {
if ($_POST['submit']){

$vopr = $_POST['vopradd'];
$voprimg = $_POST['voprimg'];
$type = 'questions';
$name = file_newname_count('data/questions/', '');

$questdata['name'] = $vopr;
$questdata['img'] = $voprimg;

saveEntry($type, $name[1], $questdata);
echo 'Успешно добавлен '.$name[1].' вопрос';
?>

        <div class="row">
        <div class="col-md-12">
                	<center>
<div style="width:300px">
<a href="#" id="add">Добавить</a> | <a href="#" id="remove">Удалить</a>  | <a href="#" id="reset">Сбросить</a>
<form action="addques.php" method="post">
   <br>
   <p>
   <input class="form-control" type="text" name="vopradd" placeholder="Вопрос..." />  
   <input class="form-control" type="text" name="voprimg" placeholder="Картинка к вопросу URL..." />
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
<a href="#" id="add">Добавить</a> | <a href="#" id="remove">Удалить</a>  | <a href="#" id="reset">Сбросить</a>
<form action="addques.php" method="post">
   <br>
   <p>
   <input class="form-control" type="text" name="vopradd" placeholder="Вопрос..." />	
   <input class="form-control" type="text" name="voprimg" placeholder="Картинка к вопросу URL..." />
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
<form action="addques.php" method="post">
<input class="form-control" type="password" name="admin" placeholder="Пароль..." />
<input type="submit" class="btn btn-lg btn-success" name="submitt" value="Проверить!">
</form>
<?
}
include ('footer.php');
?>