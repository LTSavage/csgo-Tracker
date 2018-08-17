<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>KM &mdash; CSGO Tracker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A portfolio showing the work of myself, Kieran Molloy, in my endeavour to become a full stack developer" />
    <meta name="keywords" content="Kieran, Molloy, Kieran Molloy, Portfolio, Developer" />
    <meta name="author" content="Kieran Molloy" />
    <!-- 
	//////////////////////////////////////////////////////

    Title : CSGO Tracker for Personal Website
    Author : Kieran Molloy
    Date : 17/08/2018
    Page : Table List of all entries

	//////////////////////////////////////////////////////
	 -->
    <!-- Styles and Scripts -->
    <?php include('/imports/styleScript/root.php');?>
    
    <!-- csgoFunction-->
        <?php include('imports/functions/csgoFunctions.php');?>
        <?php include('imports/other/config.php');?>
</head>

<body>
        
        <div class="container">
            <h1>CSGO Tracker - ALL ENTRIES</h1>
            <button style='padding: 1em 0 1em 0;width: 100%;' onclick="redirectHome()">Home</button>
            <?php 
                createBasicTable();
            ?>
            
        </div>
        
    <script>
    function redirectHome(){
        window.location.href = 'index.php';
        
    }
    
    </script>
    
</body>

</html>