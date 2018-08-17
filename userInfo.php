<!-- Initial Load  -->
<?php include("imports/other/config.php") ?>
<?php require_once('userReg/imports/publicFunctions.php') ?>
<?php require_once( 'userReg/imports/registrationLogin.php') ?>

<!DOCTYPE html>
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
    Page: CSGO Tracker User Info

	//////////////////////////////////////////////////////
	 -->
        <?php include('imports/styleScript/root.php');?>


	</head>

<body>
    <!-- container - wraps whole page -->
    <div class="container">

        
        <!-- Content -->
        <div class="content">
        <?php $userInformation = getUserInfo() ?>
        
        <h1>User Information</h1>
        <table class='table'>
            <tr>
                <td class="titlecol">Username:</td>
                <td><?php echo $userInformation[1] ?></td>
                <td class="changecol"><a href="">Change</a></td>
            </tr>
            <tr>
                <td class="titlecol">Password:</td>
                <td>&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;</td>
                <td class="changecol"><a href="">Change</a></td>
            </tr>
            <tr>
                <td class="titlecol">Email:</td>
                <td><?php echo $userInformation[2] ?></td>
                <td class="changecol"><a href="">Change</a></td>
            </tr>
            <tr>
                <td class="titlecol">User Since:</td>
                <td><?php echo date("F j, Y ", strtotime($userInformation[5])); ?></td>
                <td class="changecol"></td>
            </tr>
            
        </table>
            
        <button style='padding: 1em 0 1em 0;width: 100%;' onclick="goHome()">Home</button>
        <button style='padding: 1em 0 1em 0;width: 100%;' onclick="goLogout()">Logout</button>
        
        <!-- // footer -->
        </div>
        <!--// content -->
    </div>
    <!-- // container -->
    
    <script>
    function goLogout(){
        window.location.href = '/userReg/logout.php';
        
    }
        
    function goHome(){
        window.location.href = '/index.php'; 
            
    }
    
    
    </script>

</body>

</html>

