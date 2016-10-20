<?php 
	include "koneksi.php";

		$nama = $_POST['nama'];
		$resep = $_POST['resep'];
		$nama_file = $_FILES['foto']['name'];
		$tmp_file = $_FILES['foto']['tmp_name'];
		echo $nama;
		$path = "images/".$nama_file;
			move_uploaded_file($tmp_file, $path);
            $query = "INSERT INTO resep (nama,resep,foto) VALUES('".$nama."','".$resep."','".$nama_file."')";
            $sql = mysqli_query($konek, $query);
            if($sql){
            ?>
            <script>
            	document.location.href="list_resep.php";
            </script>
<?php
            }else{
            	echo "gagal";
            }
?>