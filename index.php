<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<?php include("inc/htmlhead.php");?>
</head>
<body id="home">
<div id="container">
	<?php include("inc/header.php");?>
	<?php include("inc/nav.php");?>

  <h1>Conference report</h1>
  <p>Last week's conference presented an impressive line-up of speakers...</p>
<div id="colorswitch">
<p>Change colors:</p>
	<ul class="inline">
		<li><a href="#" onClick="javascript:changeColors('css/altColors1.css');return false;" id="altColors1">dark blue on white</a></li>
		<li><a href="#" onClick="javascript:changeColors('css/altColors2.css');return false;" id="altColors2">yellow on black</a></li>
		<li><a href="#" onClick="javascript:changeColors('css/altColors3.css');return false;" id="altColors3">black on pale yellow</a></li>
		<li><a href="#" onClick="javascript:changeColors('css/altColors4.css');return false;" id="altColors4">black on white</a></li>
		<li><a href="#" onClick="javascript:changeColors('css/defaultColors.css');return false;" id="default">Reset to default</a></li>
	</ul>
</div>
  <?php include("inc/footer.php");?>
</div>	
</body>
</html>