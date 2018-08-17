<html>

	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CSGO Tracker &mdash; Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="An application to track personal CSGO Competitive Match scores and performance based on certain criteria " />
    <meta name="keywords" content="Kieran, Molloy, Kieran Molloy, CSGO, Tracker, CSGO Tracker, Performance" />
    <meta name="author" content="Kieran Molloy" />

    <!-- 
	//////////////////////////////////////////////////////

    Title : Personal Website for Kieran Molloy
    Author : Kieran Molloy
    Date : 29/05/2018
    Page: CSGO Tracker Home

	//////////////////////////////////////////////////////
	 -->
        <?php include('imports/styleScript/root.php');?>
        <?php include('imports/functions/csgoFunctions.php');?>
        <?php include('imports/other/config.php');?>

	</head>
	<body>
	
	<div id="csTr-wrap">
		<header id="csTr-header">
			<div class="container">

                
				<?php include('imports/other/navbar.php'); ?>
                
			</div>
		</header>

		  <?php 
            
            createDatabaseEntry($_POST);
    
                
          ?>
            <a href='index.php'>If you are not directed within 3 seconds click here...</a>

	</div> <!-- END csTr-wrap -->


	</body>
</html>

