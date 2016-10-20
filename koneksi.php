
	<?php 
		$host = "localhost";
		$user = "root";
		$pass = "";
		$db   = "black_forrest";
		$konek = mysqli_connect($host,$user,$pass);		
		$dbs = mysqli_select_db($konek,$db);
		
?>
