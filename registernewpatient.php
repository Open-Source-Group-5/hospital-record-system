<?php

include'db.php';

if(isset($_POST['submit']))
  {
 $lastname=$_POST['lastname'];       
$firstname=$_POST['firstname'];
$othername=$_POST['othername'];
$p_sex=$_POST['p_sex'];
$dob=$_POST['day'].'/'.$_POST['month'].'/'.$_POST['year'];
    $job=$_POST['job'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$home=$_POST['homeaddress'];
	$work=$_POST['workaddress'];
	$nextkin=$_POST['nextofkin'];
	$vsn=$_POST['vsn'];
    
    if  (mysql_query("INSERT INTO patients(vsn,lastname,firstname,othername,p_sex,dob,job,mobile,email,homeaddress,workaddress,nextofkin) 
    VALUES('$vsn','$lastname','$firstname','$othername','$p_sex','$dob','$job','$mobile','$email','$home','$work','$nextkin')")or die(mysql_error()))
    
    {
    	
		echo"successful";
		
    }
	
	else {
		echo"not successful";
	
	}
       
  }       
  
?>

<!Doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/registernewpatient.css">
    <title>register_new_patient</title>
    </head>
    <body>
    <div id="wrap">
        <div id="header">
        <div id="logo">
            <h1> HEALTH VITAL</h1></div>
        </div>
        <div id ="menu">
        <ul>
            <li><a href="welcome.php">HOME</a></li>
            <li><a href=".php" class="selected">REGISTER NEW PATIENT</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="logout.php">LOGOUT</a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <div id="main">
        <div id="content">
        	<?php
								function randomString($length=20) {
									
									$characters=array_merge(range('1','7'),range('2','8'),range('0','9'));
									$max=count($characters)-1;
									$min=count($characters)-4;
									
									for($i=0;$i<$length;$i++){
										
											$rand=mt_rand(0, $max);
										    $ran=mt_rand(0, $min);
											$str=$characters[$rand].$characters[$ran];
										$str="VSN".$str;
									}
									return $str;
								}
								
								?>
        	
            <form action="registernewpatient.php" method="POST">
            	PATIENT ID : &nbsp;<input type="text" name="vsn" value="<?php echo randomString();?>" readonly><br>
            LAST NAME &nbsp; &zwnj; &nbsp; &zwnj; &nbsp;<input type="textbox" name="lastname"  maxlength="40" size="20" placeholder="surname" required></br>
            FIRST NAME &nbsp; &nbsp; &zwnj; &zwnj; &zwnj;<input type="textbox" name="firstname"  maxlength="40" size="20" placeholder="middle name" required></br>
            OTHER NAME &nbsp; &zwnj; <input type="textbox" name="othername"  maxlength="40" size="20" placeholder="other name" required></br>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &zwnj;
                
                MALE <input type="radio" name="p_sex" value="male" required> &zwnj; &zwnj; FEMALE <input type="radio" name="p_sex" value="female" required></p>
				DATE OF BIRTH
				<select name="day" required >
				<option>1</option>
				<option>30</option>
				</select>
				<select name="month" required>
				<option>September</option>
				</select>
				<select name="year" required>
				<option>2015</option>
				</select>
				</br>
				NEXT OF KIN &nbsp; &nbsp; &nbsp; <input type="text" name="nextofkin" maxlength="40" size="20"  placeholder="next of kin"  required></br>
				JOB &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &zwnj; &nbsp; &nbsp; &nbsp; &zwnj; <input type="textbox" name="job"  maxlength="40" size="20"                   placeholder="current profession"></br>
                MOBILE &nbsp;&zwnj;&nbsp;&nbsp;&zwnj;&zwnj;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="mobile" maxlength="11" size="20"                  placeholder="phone number"></br>
                
                EMAIL &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="email" name="email" maxlength="60" size="52"                                            placeholder="email"></br>            
            <p>HOME ADDRESS</br>
                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &zwnj;
			  <textarea name="homeaddress" rows="2" cols="40" placeholder="permanent address" ></textarea></br>
			  
                OFFICE ADDRESS</br>
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &zwnj;
			 <textarea name="workaddress" rows="2" cols="40" ></textarea></p>
			
        <input class ="newpatient" type ="submit" name="submit" value="CREATE PATIENT ACCOUNT">
            



</form>
            </div>
        </div>            
        </div>
    </body>
</html>