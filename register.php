<?php  include('imports/other/config.php'); ?>
    <?php include('userReg/imports/publicFunctions.php'); ?>
        <?php  include('userReg/imports/registrationLogin.php'); ?>
            <!DOCTYPE html>
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
                <?php include('imports/styleScript/-1.php');?>
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
                                            <form method="post" action="register.php">
                                                <h2 style='color: #FFFFFF;'>Register on KM Blog</h2>
                                                <?php include('userReg/imports/errors.php') ?>
                                                    <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username">
                                                    <input type="email" name="email" value="<?php echo $email ?>" placeholder="Email">
                                                    <input type="password" name="password_1" placeholder="Password">
                                                    <input type="password" name="password_2" placeholder="Password confirmation">
                                                    <button type="submit" class="btn" name="reg_user">Register</button>
                                                    <p> Already a member? <a href="login.php">Sign in</a> </p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </body>

            </html>