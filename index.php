<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<?php include("inc/htmlhead.php");?>
</head>
<body>
<?php
	if ($thestyle == "style1") {
		echo "<a href=\"index.php?set=style1\">Switch to Style Sheet Two</a>";
	}
	else {
		echo "<a href=\"index.php?set=style2\">Switch to Style Sheet One</a>";
	}
?>

<div id="mainbody">
  <h1>Conference report</h1>
  <p>Last week's conference presented an impressive line-up of speakers...</p>
</div>
	
</body>
</html>