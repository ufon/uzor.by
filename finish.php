<? 
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Белорусский узор</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->
    
    <link href='//fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Marck+Script&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="styles/css/material.min.css">
	<link rel="stylesheet" href="styles/css/animate.css">
    <link rel="stylesheet" href="styles/css/styles_index.css">
    <style>
	body {background: url('img/eight_horns.png') ;}
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
	.mdl-layout__content {
    display: -webkit-flex;
	display: flex;
    -webkit-flex-direction: column;
	        flex-direction: column;
	}
		animate
	{
		transition: all 0.1s;
		-webkit-transition: all 0.1s;
	}

	.action-button
	{
		position: relative;
		padding: 20px 50px;
		margin: 0px 10px 10px 0px;
		float: left;
		border-radius: 10px;
		font-family: 'Marck Script', cursive;
		font-size: 30px;
		color: #FFF;
		text-decoration: none;	
	}

	.blue
	{
		background-color: #3498DB;
		border-bottom: 5px solid #2980B9;
		text-shadow: 0px -2px #2980B9;
	}

	.red
	{
		background-color: #E74C3C;
		border-bottom: 5px solid #BD3E31;
		text-shadow: 0px -2px #BD3E31;
	}

	.green
	{
		background-color: #82BF56;
		border-bottom: 5px solid #669644;
		text-shadow: 0px -2px #669644;
	}

	.yellow
	{
		background-color: #F2CF66;
		border-bottom: 5px solid #D1B358;
		text-shadow: 0px -2px #D1B358;
	}

	.action-button:active
	{
		transform: translate(0px,5px);
	  -webkit-transform: translate(0px,5px);
		border-bottom: 1px solid;
	}
    </style>
  </head>
  <body>
    <div style="background: url('img/eight_horns.png');" class="demo-layout mdl-layout mdl-layout--fixed-header mdl-js-layout mdl-color--grey-100">
      <header class="demo-header mdl-layout__header mdl-layout__header--scroll mdl-color--grey-100 mdl-color-text--grey-800">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Белорусский узор</span>
          <div class="mdl-layout-spacer"></div>          
        </div>
      </header>
      <div style="background-color: #B53F3F;" class="animated fadeIn demo-ribbon"></div>
      <main class="animated fadeIn demo-main mdl-layout__content">
        <div class="demo-container mdl-grid">
          <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
          <div  class="demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">

		  <? if ($_SESSION['mark']<0 or $_SESSION['badmark']<0 or empty($_SESSION['number']) or empty($_SESSION['i']))
		  	{ ?>
		  	<h1 style="text-align: center;">Тест не пройден</h1>
		  	<?
			} 
			else
			{
			?> 
				<p style="font-size:21pt;">Правильно отвечено: <?=$_SESSION['mark']?><br></p>
				<div id="p1" style="text-align: center;" class="mdl-progress mdl-js-progress "></div>			
				<p style="font-size:21pt;"><br>Неправильно отвечено: <?=$_SESSION['badmark']?></p>
				<div id="p2" style="text-align: center;" class="mdl-progress mdl-js-progress"></div><br> <?}?>

           <center> <div style="height:100px;text-align: center;        width: 190px;"><a href="/test" class="action-button shadow animate blue">Начать</a></div></center>
          </div>
        </div>
        <div class="mdl-layout-spacer"></div>
		<footer style="background-color: #48884A;" class="mdl-mini-footer">
		  <div class="mdl-mini-footer__left-section">
			<div class="mdl-logo">
			  &copy; Николойчук Никита 2015
			</div>
			<ul class="mdl-mini-footer__link-list">
			  <li><a href="">Link 1</a></li>
			  <li><a href="">Link 2</a></li>
			  <li><a href="">Link 3</a></li>
			</ul>
		  </div>
		  <div class="mdl-mini-footer__right-section">
			<button class="mdl-mini-footer__social-btn"></button>
			<button class="mdl-mini-footer__social-btn"></button>
			<button class="mdl-mini-footer__social-btn"></button>
		  </div>
		</footer>
      </main>
    </div>
    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
    <script>
				  document.querySelector('#p1').addEventListener('mdl-componentupgraded', function() {
				    this.MaterialProgress.setProgress(<?=$_SESSION['mark']?>*20);
				  });
	</script>
	<script>
				  document.querySelector('#p2').addEventListener('mdl-componentupgraded', function() {
				    this.MaterialProgress.setProgress(<?=$_SESSION['badmark']?>*20);
				  });
	</script>
  </body>
</html>
<?
	$_SESSION['mark'] = 0;
	$_SESSION['badmark'] = 0;
	$_SESSION['i'] = 0;
	$_SESSION['number'] = 0;
?>