<?php
session_start();

	if(!isset($_SESSION['username'])){
		echo "
									<html>
									<head>
									<meta http-equiv ='refresh' content = '0;
									url = index.php'/>
									
									</head>
									</html>";
	} 	

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/index.css">
    <title>home</title>
</head>
<body>
<div id="wrap">
    <div id="header">
        <div id="logo">
            <h1>HEALTH VITAL</h1></div>
    </div>
    <div id="menu">
    <ul>
        <li><a href="welcome.php" class="selected">HOME</a></li>
        <li><a href="signup.php">ADD NEW ADMIN</a>
		</li>
        <li><a href="faq.php">FAQ</a></li>
        <li><a href="logout.php">LOGOUT</a>
        </li>
         <div class="clear"></div>
    </div>
    <div id="main">
    <div id="content"></div>
    <div id="dcontent">
        <p>This interface displays news, informations and trends on health from major headlines from around the globe</p>
        <p>What is a vital health  record keeping all about?</p></div>
        <div id="space"></div>
        <a href="registernewpatient.php">
            <div id="registernewpatient"><center>
            REGISTER NEW PATIENT</center>
            </div></a>
        <div id="spaces"></div>
        <a href="input.php">
            <div id="patientrecord"><center>TAKE VITALS</center>
            </div></a>
        <a href="vitalrate.php">
        <div id="vitalrate"> <center>VITAL RATE</center>
            </div></a>
        <div id="spacex"></div>
        <a href="patientrecord.php">
            <div id="locations"> <center>PATIENT RECORD</center>
            </div></a>
        <div id="spacee"></div>
        <div id="chat"><center>CHAT</center></div>
    </div>

    </div>
</body>
</html>
           