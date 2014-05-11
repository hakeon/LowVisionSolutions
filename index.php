<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" media="screen" href="css/<?php echo($thestyle);?>.css" >

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<title>Low Vision Solutions | Certified Low Vision Occupational Therapy</title>
	<!--<?php include("inc/htmlhead");?>-->
	<?php
		$thestyle = $_GET['set'];
	if ($thestyle == "style1")
	{
		$thestyle = "style2";
	}
	else
	{
		$thestyle = "style1";
	}
	?>
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