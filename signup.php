<?php
include 'db.php';
session_start();

if (!isset($_SESSION['username'])) {
    echo "
									<html>
									<head>
									<meta http-equiv ='refresh' content = '0;
									url = index.php'/>
									
									</head>
									</html>";
}
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $pwd = $_POST['password'];
    $email = $_POST['email'];
    $sex = $_POST['sex'];
    $phone = $_POST['mobile'];
    $lga_id = $_POST['lgauserid'];
    #sql syntax
    $sql = "INSERT INTO admin(lga_id,name,password,sex,email,phone) VALUES('$lga_id','$name','$pwd','$sex','$email','$phone')";


    if (mysqli_query($conn, $sql)) {

        echo " <script>alert('You have successfully registered ');</script>";
        header('location:signin.php');

    } else {
        echo " <script>alert('NOT SUCCESSFUL ');</script>";
    }

}
?>

<html>

<head>
    <meta http-equiv="content-type" content="text/html" ; charset="UTF-8">
    <link rel="stylesheet" href="css/signup.css">
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
                <li><a href="welcome.php">WELCOME</a></li>

                <li><a href="signup.php" class="selected">SIGN UP</a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <div id="main">
            <div id="content1"></div>
            <div id="content2">
                <h2>WELCOME TO VITAL FRIENDLY</h2>
                <form action="signup.php" method="post">
                    NAME &zwnj; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &zwnj; &zwnj;&nbsp; <input type="text" name="name"
                        maxlength="30" size="20">
                    <p>
                        PASSWORD &nbsp; <input type="password" name="password" maxlength="20" size="20"></p>
                    <p>
                        EMAIL &zwnj; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &zwnj; <input type="email" name="email"
                            size="20"></p>
                    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &zwnj;

                        MALE <input type="radio" name="sex" value="male"> &zwnj; &zwnj; FEMALE <input type="radio"
                            name="sex" value="female"></p>

                    MOBILE &zwnj; &zwnj; &zwnj; &nbsp; &zwnj;&nbsp;&nbsp;&nbsp;<input type="text" size="20"
                        maxlength="11" name="mobile">
                    <p>LGA USER ID <input ype="text" name="lgauserid"></p>
                    <hr width="80%">
                    GET STARTED</br><input class="triangle" type="submit" name="submit" value="">

            </div>

            </form>
</body>

</html>
<!paramedic for measuring gate parameters