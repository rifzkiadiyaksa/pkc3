<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
	<style type="text/css">
	body{
		font-family: roboto;
	}
 
	table{
		margin: 0px auto;
	}
	</style>
 
 
	<center>
		<h2>Dashboard</h2>
	</center>
 
 
	<?php 
	include 'koneksi.php';
	?>
 
	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart"></canvas>
	</div>
 
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Staff", "SPV", "K.Bagian", "Manager", "GM"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_teknik = mysqli_query($koneksi,"select * from m_jabatan where DESC='Staff'");
					echo mysqli_num_rows($jumlah_Staff);
					?>, 
                    <?php 
					$jumlah_teknik = mysqli_query($koneksi,"select * from m_jabatan where DESC='SPV'");
					echo mysqli_num_rows($jumlah_SPV);
					?>, 
                    <?php 
					$jumlah_teknik = mysqli_query($koneksi,"select * from m_jabatan where DESC='Staff'");
					echo mysqli_num_rows($jumlah_Kbagian);
					?>, 
                    <?php 
					$jumlah_teknik = mysqli_query($koneksi,"select * from m_jabatan where DESC='Manager'");
					echo mysqli_num_rows($jumlah_Manager);
					?>, 
					<?php 
					$jumlah_pertanian = mysqli_query($koneksi,"select * from m_jabatan where DESC='General'");
					echo mysqli_num_rows($jumlah_General);
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
</body>
</html>