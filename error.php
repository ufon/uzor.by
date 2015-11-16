<? 
if ($_POST['error']){
	$error = $_POST['error'];
	$goto = $_POST['goto'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta  http-equiv="refresh" content="2;<?=$goto?>">
    <title>Ошибка</title>

    <!-- Bootstrap core CSS -->
    <link href="styles/css/bootstrap.css" rel="stylesheet">

</head>

<body>

    <div class="container">

        <div class="row">
        <div class="col-md-12">
                	<h1><?=$error?></h1>
                    
</div>
    </div>
    <!-- /.container -->

    <!-- JavaScript -->
    <script src="styles/js/jquery-1.10.2.js"></script>
    <script src="styles/js/bootstrap.js"></script>

</body>

</html>