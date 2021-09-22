<html>
<head>Saran</head>
<body>
	<h1>Saran Anda</h1>
<?php
	if(isset($_GET['submit'])){
		echo"<table border=1>
		<tr><td>Nama</td><td>:".$_GET['nama_lengkap']."</td></tr>
		<tr><td>Saran</td><td>:</td></tr>
		<tr><td colspan=2>".$_GET['saran']."</td></tr>
	</table>";
	}else{
		echo"<h2>Halaman ini tidak bisa diakses secara langsung</h2>";
	}
?>
</body> 
</html>