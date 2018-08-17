<?php  include('imports/other/config.php'); ?>
<?php include('userReg/imports/publicFunctions.php'); ?>
<?php  include('userReg/imports/registrationLogin.php'); ?>

<html>

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CSGO Tracker &mdash; Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="An application to track personal CSGO Competitive Match scores and performance based on certain criteria " />
        <meta name="keywords" content="Kieran, Molloy, Kieran Molloy, CSGO, Tracker, CSGO Tracker, Performance" />
        <meta name="author" content="Kieran Molloy" />

        <!-- 
	//////////////////////////////////////////////////////

    Title : Personal Website for Kieran Molloy
    Author : Kieran Molloy
    Date : 29/05/2018
    Page: CSGO Tracker Login

	//////////////////////////////////////////////////////
	 -->
        <?php include('imports/styleScript/root.php');?>

</head>

<body>
    <div id="csTr-wrap">
        <header id="csTr-header">
            <div class="container">


                <?php include('imports/other/navbar.php'); ?>

            </div>
        </header>

        <div class="csTr-hero" style="background-image: url(imports/images/splashBackground.png);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center csTr-table">
                        <div class="csTr-intro csTr-table-cell">
                            <div style="width: 40%; margin: 20px auto;">
                                <form method="post" action="login.php">
                                    <h2 style='color: #FFFFFF;'>Login</h2>
                                    <?php include('userReg/imports/errors.php') ?>
                                    <input type="text" name="username" value="<?php echo $username; ?>" value="" placeholder="Username">
                                    <input type="password" name="password" placeholder="Password">
                                    <button type="submit" class="btn" name="login_btn">Login</button>
                                    <p>
                                        Not yet a member? <a href="register.php">Sign up</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <!-- // container -->

</body>

</html>
