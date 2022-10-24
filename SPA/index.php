<?php
$conn =	mysqli_connect("0.0.0.0", "root", "root", "tabelmahasiswa");
$result = mysqli_query($conn, "SELECT * FROM Mahasiswa");
// while ($mhs = mysqli_fetch_assoc($result)){
// var_dump($mhs);
		?>
		<html>
			<head>
				<title>Test Page</title>
					<meta http-equiv = "Content-Type" content = "text/html; charset=utf-8">
					<style>
					*{
					  padding: 0;
					  margin: 0;
					}
					  h1{
					    text-align: center;
					  }
					  table{
					    text-align: center;
					    width: 50%;
					  }
					  td{
					    height: 50px;
					    width: 50px;
					  }
					  tr{
					    width: 100px;
					  }
					</style>
			</head>
			<body>
			  <h1> Daftar Mahasiswa </h1>
			  <center>
			  <table border="1" cellpadding="10" cellspacing="0">
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Alamat</th>
        </tr>
        <?php $i = 1; ?>
        <?php while ( $row = mysqli_fetch_assoc($result)) : ?>
        <tr>
          <td><?= $i ?></td>
          <td><?= $row["Nama_teman"]; ?></td>
          <td><?= $row["Alamat"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
				</table>
				</center>
			</body>
	</html>