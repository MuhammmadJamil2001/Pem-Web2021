<!DOCTYPE html>
<html>
<head>
<title>CitraComputer</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	*{ box-sizing: border-box;
	}
	body{
	background-image: url("bukutamu.jpg");
	margin:0;}
	/* Style the header */
	.header{
	background-image: url("index1.jpg");
	padding:20px;
	text-align:center;
	color: white;
	}
	/* Style the top navigation bar */
	.topnav{
	overflow:hidden;
	background-color:#696969;
	border-radius: 5px;
	}
	/* Style the topnav links */
	.topnav a{
	float:left;
	display:block;
	font-size:13px;
	font-family:'Open Sans', Tahoma, sans-serif;
	font-weight:700;
	position:relative;
	color:#fff;
	text-align:center;
	padding:14px 16px;
	text-decoration:none;
	}
	/* Change color on hover */
	.topnav a:hover{
	background-color:gray;
	color:#40E0D0;
	}
	
	/* Form */
	* {
	box-sizing: border-box;
	}
	input[type=text], select, textarea {
	width: 100%;
	padding: 12px;
	border: 1px solid #ccc;
	border-radius: 4px;
	resize: vertical;
	}

	label {
	padding: 12px 12px 12px 0;
	display: inline-block;
	}

	input[type=submit] {
	background-color: #778899;
	color: white;
	padding: 12px 20px;
	border: none;
	font-weight: bold;
	border-radius: 6px;
	cursor: pointer;
	float: right;
	}

	input[type=submit]:hover {
	background-color: #696969;
	color:#40E0D0;
	}
	
	div.kotak{
	margin: 7px 4px 4px 4px;
	border-radius: 5px;
	background-image: url("galerry.jpg");
	border: 1px solid #ccc;
	width: 300px;
	float: left;
	}
	div.kotak:hover{
	border: 1px solid #777;
	}
	div.dari{
	color: black;
	padding: 8px 8px 0px 8px;
	text-align: center;
	font-size: 15px;
	}
	div.nama{
	color: black;
	padding: 8px 8px 0px 8px;
	text-align: justify;
	text-justify: inter-word;
	font-size: 15px;
	}
	div.desc{
	color: #483D8B;
	padding: 2px 8px 8px 8px;
	text-align: justify;
	text-justify: inter-word;
	font-size: 14px;
	}

	.container {
	border-radius: 5px;
	background-image: url("galerry.jpg");
	padding: 20px;
	}

	.menu{
	text-align: center;
	}

	.report{
	height: 40px;
	float: left;
	width: 100%;
	margin: 0px; 
	padding: 12px;
	background-color : #708090;
	color: white;
	border-radius: 6px;
	font-weight: bold;
	font-style: italic;
	text-align: center;
	}

	.col-25 {
	float: left;
	width: 25%;
	margin-top: 6px;
	}

	.col-75 {
	float: left;
	width: 75%;
	margin-top: 6px;
	}
	
	.bkt{
	text-align: center;
	color: white;
	}

	/* Clear floats after the columns */
	.row:after {
	content: "";
	display: table;
	clear: both;
	}
	
	/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
	@media screen and (max-width: 600px) {
	.col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
	}
}
	</style>
</head>
<body>
	<div class="header">
		<h1>Citra Computer</h1>
		<p>Menjual Laptop | Peripherals | Accesories | Service</p>
		<p>Alamat : Jl.KyaiNawawi no63/64 Jepara 59452</p>
		<p>CP : 082242023609</p>
	</div>
	<div class="topnav">
		<a href="http://localhost/toko">Home</a>
		<a href="http://localhost/toko/pesan.php">Pemesanan</a>
		<a href="http://localhost/toko/bukutamu.php">Buku Tamu</a>
	</div>
	<h1 class="bkt">Buku Tamu</h1>
	
			<?php error_reporting (E_ALL ^ E_NOTICE);
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "uas";
			$id_barang = "";

				if (isset($_GET['submit'])){
				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}

				$sql = "INSERT INTO bk_tamu (id_tamu, nama, alamat, nohp, email, tau, saran)
				VALUES ('".$_GET['id_tamu']."', '".$_GET['nama']."', '".$_GET['alamat']."', '".$_GET['nohp']."', '".$_GET['email']."', '".$_GET['tau']."', '".$_GET['saran']."')";
				

				if ($conn->query($sql) === TRUE) {
					echo '
						<div class="row">
							<div class="report">
								Data Anda telah tersubmit ke Database
							</div>
						</div>
					';
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}

				$conn->close();
			}
			?>
		<div class="container">
			<form action="bukutamu.php">
			<div class="row">
				<div class="col-25">
					<label for="nama">Nama</label>
				</div>
				<div class="col-75">
					<input type="text" id="nama" name="nama" placeholder="Nama Anda..">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="alamat">Alamat</label>
				</div>
				<div class="col-75">
					<input type="text" id="alamat" name="alamat" placeholder="Alamat..">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="nohp">Nomor HP</label>
				</div>
				<div class="col-75">
					<input type="text" id="nohp" name="nohp" placeholder="Nomor HP Anda..">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="email">E-Mail</label>
				</div>
				<div class="col-75">
					<input type="text" id="email" name="email" placeholder="E-Mail Anda..">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="tau">Mengetahui Toko Dari ?</label>
				</div>
				<div class="col-75">
					<select id="tau" name="tau">
						<option value="Teman/Saudara">Teman/Saudara</option>
						<option value="SosialMedia">Sosial Media</option>
						<option value="Iklan">Iklan</option>
						<option value="Browsing">Browsing Internet</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="saran">Saran</label>
				</div>
				<div class="col-75">
					<textarea id="saran" name="saran" placeholder="Saran anda.." style="height:150px"></textarea>
				</div>
			</div>
			<div class="row">
				<input type="submit" name="submit" value="Submit">
			</div>
			</form>
		</div>
			<?php
				$host = "localhost";
				$username = "root";
				$password = "";
				$dbname = "uas";
					
				$conn = new mysqli($host, $username, $password, $dbname);

				if ($conn->connect_error)	die("Connection failed: " . $conn->connect_error);

				$sql = "SELECT * FROM bk_tamu";
				$result = $conn->query($sql);
	 
				if (isset($result->num_rows) && $result->num_rows > 0) {
				  while($row = $result->fetch_assoc()) {
					echo'
					<div class="kotak">
						<div class="dari">Saran Dari:</div>
						<div class="nama">Nama: '.$row['nama'].'</div>
						<div class="desc">Saran: '.$row['saran'].'</div>
					</div>
					';
				  }
				} else {
				  echo "0 results";
				}
				$conn->close();
			?>
</body>
</html>