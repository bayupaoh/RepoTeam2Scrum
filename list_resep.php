<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License
-->
<?php 
include "koneksi.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Black Fores</title>
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
	<h1>Black Forres</h1>
</div>
<div id="content">

	<div id="colOne">
		<div id="menu1">
			<ul>
				<li id="menu-01"><a href="index.html">Home</a></li>
				<li id="menu-02"><a href="sejarah.html">Sejarah</a></li>
				<li id="menu-03"><a href="cara_membuat.html">Cara Membuat Makanan</a></li>
				<li id="menu-04"><a href="galery.html">Galari Makanan</a></li>
				<li id="menu-04"><a href="dampak.html">Efek Baik dan Buruk</a></li>
				<li id="menu-04"><a href="fakta_kue.html">Fakta Kue</a></li>
				<li id="menu-04"><a href="perbandingan kandungan.html">Perbandingan Kandungan</a></li>
				<li id="menu-04"><a href="cara_makan.html">Cara Makann</a></li>
			</ul>
		</div>

	</div>

	<div id="colTwo">
		<h2>Black Forres</h2>

		<p><img src="https://amaliayunus.files.wordpress.com/2015/01/eggless-black-forest-cake-1.png?w=509&h=609" alt="" width="130" height="110" class="img1" /></p>
		<h2>List Resep Black Forest</h2>

        
        <?php 
            $sql = "select * from resep";
            $query = mysql_query($sql);
            while($b = mysql_fetch_array($query)){
                $id[] = $b['id'];
                $nama[] = $b['nama'];
                $resep[] = $b['resep'];
                $foto[] = $b['foto'];
            }

            $jumlah = count($id);
            $baris = floor($jumlah/3);
            if(($jumlah%3) > 0){
                $baris = $baris + 1;
            }
        ?>
        <table border="0" cellpadding="10" cellspacing="0" style="font-family:arial;">
            <tr>
                <td><?php echo $foto[$k] ?></td>
                <td><?php echo $nama[$k] ?></td>
            </tr>
            <tr>
                <td  colspan="2" valign=bottom>
                <a href="keterangank.php?id=<?php echo $id[$k]?>" >See More</a></td>
            </tr>
        </table>
            		
                
                
                
		</div>
	<div style="clear: both;">&nbsp;</div>
</div>
<div id="footer">
	<p>Black Forrees</a></p>
</div>
</body>
</html>