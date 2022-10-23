<?php

include'db.php';

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

if(isset($_POST['submit']))
  {
 $vsn=$_POST['vsn'];       
$temp=$_POST['temp'];
$pulse=$_POST['pulse'];
$resp=$_POST['resp'];
$pres=$_POST['press'];
$date=date('Y/M/d', time());
$sql = "INSERT INTO record(vsn,temp,pulse,resp,press,date) VALUES('$vsn','$temp','$pulse','$resp','$pres','$date')";
if (mysqli_query($conn, $sql)) {
    	
		echo"successful";
		
    }
	
	else{echo"not successful";}
       
  }       
  
?>

<DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/input.css">
        <title>patient record</title>
        <title>patientrecord</title>
    </head>

    <body>
        <div id="wrap">
            <div id="header">
                <div id="logo">
                    <h1>HEALTH VITAL</h1>
                </div>
            </div>
            <div id="menu">
                <ul>
                    <li><a href="welcome.php">HOME</a></li>
                    <li><a href="profile.php">PROFILE</a></li>
                    <li><a href="patientrecord.php" class="selected">PATIENT RECORD</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                </ul>
                <div class="clear"></div>
            </div>

            <h2>TAKE VITAL SIGNS</h2>
            <div class="clear"></div>
            <div id="main">
                <form action="input.php" method="POST">
                    <fieldset>
                        PATIENT VITAL ID<input type="TEXT" max="100" min="35" name="vsn" required> <br>
                        TEMPERATURE<input type="number" max="40" min="35" name="temp" required> DEGGREES <br>
                        PULSE <input type="number" max="150" min="50" name="pulse" required> BEATS PER MINUTE<br>
                        RESPIRATON <input type="number" max="20" min="12" name="resp" required>BREATHS PER MINUTE<br>
                        BLOOD PRESSURE <input type="number" max="160" min="80" name="press" required>mmHg<br>
                        <input type="submit" name="submit" value="Go Vital">
                    </fieldset>
                </form>
            </div>
        </div>
        </div>
    </body>

    </html>