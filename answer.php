<?php 
header('Content-Type: text/html; charset=utf-8');
session_start();

$ar_rang = array(); $ar_rand = range(1, 12); shuffle($ar_rand); $ar_rand = array_slice($ar_rand, 0, 5 );
if(empty($_SESSION['number']) or empty($_SESSION['i'])){
$_SESSION['i'] = 0;
$_SESSION['number'] = $ar_rand;
}
require 'include/flatfile.inc.php';
require 'include/manage.inc.php';
require 'include/functions.php';

$listNote = readEntry('questions', $_SESSION['number'][$_SESSION['i']]);
$l = $listNote['name'];
$img = $listNote['img'];
include ('header.php');
?>

<script>
var count
var options = {
	bg: 'rgb(255, 170, 170)',
	id: 'mynano'
};

var nanobar = new Nanobar( options );

// move bar
nanobar.go(<?=$_SESSION['i']?>*20); // size bar 30%
</script>
<div class="mdl-layout-spacer"></div>
<section class="animated fadeIn section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
			<? if ($img==true){ ?>
            <header style="background: url(<?=$img?>) no-repeat center center;" class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--3-col-tablet mdl-cell--4-col-phone mdl-color--white mdl-color-text--white">            
            </header>
            <? } ?>
            <div style="<?if($img==false){  ?> width:100%; <? } ?>" class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--5-col-tablet mdl-cell--4-col-phone">
              <div class="mdl-card__supporting-text">
                <h4><?
					echo '<h3>'.$l.'</h3>';
					?>
				</h4>
              </div>

            </div>

</section>
<br>
<center>
<section class="animated fadeIn section--center mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone mdl-shadow--2dp">
				<?
				$answers = listEntry('answers/'.$_SESSION['number'][$_SESSION['i']].'/');
				shuffle($answers);
				foreach($answers as &$answer) {
				$oneAns = readNote($_SESSION['number'][$_SESSION['i']], $answer);
				?>
				<section style="margin-bottom: 0;" class="section--center mdl-grid mdl-grid--no-spacing border_line">
				<div style="<?if($oneAns['img']==false){  ?> width:100%; min-height: 80px; <? } else { ?> min-height: 200px; <? } ?>" arr="<?=$oneAns['name']?>" id="place" class="place mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone">
				  <div class="mdl-card__supporting-text">
					<h4><?=$oneAns['pass']?></h4>
				  </div>
				</div>
				<? if ($oneAns['img']==true) { ?>
				<header style="background: url(<?=$oneAns['img']?>) no-repeat center center;" class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-color--white mdl-color-text--white">
				</header>
				<? } ?>
			  </section>
			  	<?
				}
				?>	 
</section>
<br><form method="POST" action="check.php" >
 <center> 
 <div style="height:100px;text-align: center;        width: 190px;">

	            <div>
				<input style="display:none;" id="sendradio"  type="text" name="otvet" value="" />
				</div>
                <input class="action-button shadow animate red" type="submit" value="Далее" />
				</div>
 </center>
</form>
        <br>
  </div>

<br>
<br>
<?

include ('footer.php');

?>		
					