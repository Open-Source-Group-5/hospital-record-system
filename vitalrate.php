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
	$date = $_POST['date'];
	$data =
		"SELECT * FROM record WHERE `vsn` = '$vsn' AND date='$date'";
	$sql = $conn->query($data);
	print_r($sql);

	while ($row = mysqli_fetch_assoc($sql)) {
		$id = $row['temp'];
	}
	$l1 = $id;
	print_r($l1);

	$sql = $conn->query("SELECT * FROM record WHERE `vsn` = '$vsn' AND date='$date'");
	while ($row = mysqli_fetch_assoc($sql)) {
		$q = $row['pulse'];
	}
	$l2 = $q;

	$sql = $conn->query("SELECT * FROM record WHERE `vsn` = '$vsn' AND date='$date'");
	while ($row = mysqli_fetch_assoc($sql)) {
		$id = $row['resp'];
	}
	$l3 = ($id);

	$sql = $conn->query("SELECT * FROM record WHERE `vsn` = '$vsn' AND date='$date'");
	while ($row = mysqli_fetch_assoc($sql)) {
		$id = $row['press'];
	}
	$l4 = ($id);
} else {
	$date = date('y:m:d', time());
	$l4 = 0;
	$l3 = 0;
	$l2 = 0;
	$l1 = 0;

}

?>

<DOCTYPE html>
	<html>

	<head>
		<meta charset="UTF-8">
		<script src="Chart.js"></script>
		<link rel="stylesheet" type="text/css" href="css/graph.css">
		<link rel="stylesheet" href="css/vitalrate.css">

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

			<ul>
				<form action="vitalrate.php" method="POST">
					<INPUT type="search" placeholder="VSN ID" autofocus="true" name="vsn" />
					<INPUT type="date" placeholder="yyyy-mm-d" autofocus="true" name="date" />
					<input type="submit" name="submit" value="GENERATE LIST" class="btn-danger">

				</form>
			</ul>


			<div id="main">
				<h2>HEALTH STATISTICS<ul>
						DATE :
						<?php echo $date; ?>
						<li class="first">TEMPERATURE =
							<?php echo $l1; ?>
						</li>
						<li class="second">PULSE=
							<?php echo $l2; ?>
						</li>
						<li class="third">RESPIRATORY =
							<?php echo $l3; ?>
						</li>
						<li class="fourth">PRESSURE =
							<?php echo $l4; ?>
						</li>
					</ul>
				</h2>

				<canvas id="canvas" height="650" width="750"></canvas>


				<script>

					var barChartData = {
						labels: ['GRAPH'],
						datasets: [
							{
								fillColor: "rgba(44 ,151, 223, 0.5)",
								strokeColor: "rgba(44 ,151, 223, 1)",
								data: ['<?php echo $l1; ?>']
							},
							{
								fillColor: "rgba(232, 76, 61,0.5)",
								strokeColor: "rgba(232, 76, 61,1)",
								data: ['<?php echo $l2; ?>']
							},
							{
								fillColor: "rgba(241, 197, 17,0.5)",
								strokeColor: "rgba(241, 197, 17,1)",
								data: ['<?php echo $l3; ?>']
							},
							{
								fillColor: "rgba(156, 86, 184, 0.5)",
								strokeColor: "rgba(156, 86, 184, 1)",
								data: ['<?php echo $l4; ?>']
							}
						]

					}

					var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Bar(barChartData);

				</script>


			</div>
		</div>
	</body>

	</html>