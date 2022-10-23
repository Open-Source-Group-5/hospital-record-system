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

	$vsn = $_POST['vsn'];
	$vsn_Sql = "select * from record where vsn='$vsn'";
	$result = $conn->query($vsn_Sql);


} elseif (isset($_POST['namesearch'])) {

	$name = $_POST['name'];

	$dob = $_POST['day'] . '/' . $_POST['month'] . '/' . $_POST['year'];
	$sql = "select patients.vsn from patients where lastname='$name' AND dob='$dob'";
	$result = $conn->query($sql);
	$row = mysqli_fetch_assoc($result);

	$vs = $row['vsn'];
	$sql = "select * from record where vsn='$vs'";
	$result = $conn->query($sql);
} else {
	$sql = "select * from record where vsn='!' ";
	$result = $conn->query($sql);
}
?>


<DOCTYPE html>
	<html>

	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/patientrecord.css">
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
			<div id="main">
				<h2>PATIENT RECORD</h2>
				<div id="within">
					<p>
					<div id="main">
						<form action="patientrecord.php" method="POST">
							<fieldset>
								PATIENT VSN<input type="TEXT" max="100" min="35" name="vsn"> <br>
								<input type="submit" name="submit" value="SEARCH">
								PATIENT NAME<input type="TEXT" max="100" min="35" name="name"> <br>DATE OF BIRTH
								<select name="day" required>
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
								<input type="submit" name="namesearch" value="SEARCH">
							</fieldset>
						</form>
					</div>
					<div style="text-align: ;center">
						<table style="border:'2'; text-align:center;">
							<THEAD>
								<TR>
									<th style="text-align:center;">PATIENT VSN</th>
									<th style="text-align:center;">TEMPERATURE READING</th>
									<th style="text-align:center;">PULSE</th>
									<th style="text-align:center;">RESPIRATION READING</th>
									<th style="text-align:center;">PRESSURE</th>
									<th style="text-align:center;">DATE</th>
								</TR>
							</thead>
							<?php

while ($row = mysqli_fetch_assoc($result)) {

?>

							<tr>
								<td style="text-align:center;">
									<?php echo $row['vsn']; ?>
								</td>
								<td style="text-align:center;">
									<?php echo $row['temp']; ?>
								</td>
								<td style="text-align:center;">
									<?php echo $row['pulse']; ?>
								</td>
								<td style="text-align:center;">
									<?php echo $row['resp']; ?>
								</td>
								<td style="text-align:center;">
									<?php echo $row['press']; ?>
								</td>
								<td style="text-align:center;">
									<?php echo $row['date']; ?>
								</td>
							</tr>
							<?php } ?>
						</table>
					</div>
					</p>
				</div>
			</div>
		</div>
	</body>

	</html>