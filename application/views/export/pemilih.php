<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php
$tanggal = date('d-m-Y');
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Pemilih ".$tanggal.".xls");
?>
<body>
	<center><h1>Data Pemilih <?php echo $tanggal; ?></h1></center>
	<table border="1">
		<thead>
			<tr>
				<th>NO</th>
				<th>NAMA</th>
				<th>NIM</th>
				<th>EMAIL</th>
				<th>ANGKATAN</th>
				<th>STATUS</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$no = 0;
			foreach ($datauser as $key => $datauser) { 
				$no++;
				$nim = $datauser['nim'];
				?>
				<tr>
					<td><?= $no ?></td>
					<td><?= $datauser['nama']; ?></td>
					<td><?=  '"'.$nim.'"'; ?></td>
					<td><?= $datauser['email']; ?></td>
					<td>20<?= substr($datauser['nim'],5,2); ?></td>
					<td><?php
					if ($datauser['status'] == 0) {
						echo "<b style='color:red;'>BELUM REGISTRASI ULANG</b>";
					}elseif ($datauser['status'] == 1) {
						echo "<b style='color:green;'>SUDAH REGISTRASI ULANG</b>";
					}else{
						echo "SUDAH VOTING";
					}
					 ?></td>
					
				</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>