<!DOCTYPE html>
<html>
<head>
	<title>Jawaban UTS</title>
</head>
<body>
		<center><h1>Data Pemantauan COVID19 Wilayah <?php echo $_GET['namaWilayah']; ?> <br>
		<?php $dt = new DateTime('now', new DateTimezone('Asia/Jakarta')); ?>
		Per <?php echo $dt->format("d-F-y H:i:s"); ?> <br>
		<?php echo $_GET['nama']; ?> 
		<?php echo $_GET['nim']; ?>
		<table>
			<tr>
				<th>Positif</th>
				<th>Dirawat</th>
				<th>Sembuh</th>
				<th>Meninggal</th>
			</tr>
			<tr>
				<th><?php echo $_GET['jmlPositif']; ?></th>
				<th><?php echo $_GET['jmlDirawat']; ?></th>
				<th><?php echo $_GET['jmlSembuh']; ?></th>
				<th><?php echo $_GET['jmlMeninggal']; ?></th>
			</tr>
		</table></h1></center>
		<?php
			if(isset($_GET['nama']))
			{
				$namaWilayah=$_GET['namaWilayah'];
				$jmlPositif=$_GET['jmlPositif'];
				$jmlDirawat=$_GET['jmlDirawat'];
				$jmlSembuh=$_GET['jmlSembuh'];
				$jmlMeninggal=$_GET['jmlMeninggal'];
				$nama=$_GET['nama'];
				$nim=$_GET['nim'];
				$fp = fopen('data.txt', 'a');
				fwrite($fp, $namaWilayah);
				fwrite($fp, $jmlPositif);
				fwrite($fp, $jmlDirawat);
				fwrite($fp, $jmlSembuh);
				fwrite($fp, $jmlMeninggal);
				fwrite($fp, $nama);
				fwrite($fp, $nim);
				fclose($fp);
			}
		?>
	</body>
	</html>
