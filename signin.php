<?php
include 'db.php';
session_start();
if (isset($_POST['submit'])) {
    $lga_id = $_POST['lgaid'];
    $pw = $_POST['pwd'];
    $_SESSION['username'] = $lga_id;


    $sql = "SELECT * FROM admin WHERE lga_id='$lga_id' AND password='$pw' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        echo " <script>alert('You have successfully login ');</script>";
        $_SESSION['username'] = $lga_id;
        header('location:welcome.php');
    }
}
$conn->close();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/signin.css">
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
                <li><a href="index.php">WELCOME</a></li>
                <li><a href="signin.php" class="selected">SIGN IN</a></li>

            </ul>
            <div class="clear"></div>
        </div>

        <div id="main">
            <div id="content">
                <video id="movies" onmouseover="this.play()" onmouseout="this.pause()" autobuffer="true" width="660px"
                    height="340px">
                    <source src="vid/babahafusa.mp4" type='video/mp4; codecs="theora, vorbis"'>
                    <source src="vid/babahafusa.mp4" type='video/mp4; codecs="avc1.42E01E, 
mp4a.40.2"'>
                </video>
            </div>
            <div id="side">
                <h2> &nbsp;SIGN IN</h2>
                <form action="signin.php" method="post">
                    LGA ID: &nbsp; &nbsp; &nbsp;&nbsp; &zwnj; &zwnj;<input type="textbox" name="lgaid" maxlength="40"
                        size="20" placeholder="or username">
                    <p>
                        Password &nbsp; <input type="password" name="pwd" maxlength="10" size="20"
                            placeholder="6-10 characters"></p>
                    <p><input type="checkbox" name=""> Remember my password</p>

                    <p> &zwnj; &zwnj; &zwnj; &zwnj; <img src="pic/facebook.png" width="30">
                        <img src="pic/twitter.png" width="30">
                    </p>
                    <input type="submit" name="submit" value="LOGIN" class="signinbutton">
                </form>
            </div>
        </div>
        <div id="footer"></div>
    </div>
</body>

</html>