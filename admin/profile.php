<?php
session_start();
include'../config/koneksi.php';

?>
<!doctype html>
<html lang="en">

<head>
	<title>Profile | PPDB</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="">SMK WIKRAMA</a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<form class="navbar-form navbar-left">
					<div class="input-group">
						
					</div>
				</form>
				
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<?php
			                    $no=0;
			                    $sql=mysqli_query($con,"SELECT * FROM admin");
			                    while($r=mysqli_fetch_array($sql)){
			                        $no++;?>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span><?php echo $r['username'];?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
						<?php } ?>
							<ul class="dropdown-menu">
								<li><a href="" data-toggle="modal" data-target="#logoutModal"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
						
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="datasiswa.php" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<?php
			$id = $_GET['id'];
            $no=0;
            $sql=mysqli_query($con,"SELECT * FROM siswa WHERE id='$id'");
            while($r=mysqli_fetch_array($sql)){
                $no++;?>
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-profile">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							<div class="profile-center">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main">
										<h3 class="name"><?php echo $r['nama_lengkap'] ?></h3>
									</div>
								</div>
								<!-- END PROFILE HEADER -->
								<!-- PROFILE DETAIL -->
								<div class="profile-detail">
									<div class="profile-info">
										<h2 class="heading">Profil Lengkap</h2>
										<ul class="list-unstyled list-justify">
											<li>No Pendaftaran <span><?php echo $r['id'] ?></span></li>
											<li>No Tes <span><?php echo $r['id'] ?></span></li>
											<li>Jalur Penerimaan <span><?php echo $r['jalur'] ?></span></li>
											<li>Nama Panggilan <span><?php echo $r['nama_panggilan'] ?></span></li>
											<li>Tempat Tanggal Lahir <span><?php echo $r['tempat_lahir'] ?>,<?php echo $r['tgl_lahir'] ?></span></li>
											<li>Jenis Kelamin <span><?php echo $r['jk'] ?></span></li>
											<li>Agama <span><?php echo $r['agama'] ?></span></li>
											<li>Cita- Cita<span><?php echo $r['cita'] ?></span></li>
											<li>Hobby<span><?php echo $r['hoby'] ?></span></li>
											<li>Jumlah Saudara Kandung <span><?php echo $r['sodara_kandung'] ?></span></li>
											<li>Jumlah Saudara Tiri <span><?php echo $r['sodara_tiri'] ?></span></li>
											<li>Jumlah Saudara Angkat <span><?php echo $r['sodara_angkat'] ?></span></li>
											<li>Berat Badan<span><?php echo $r['berat_badan'] ?> kg</span></li>
											<li>Tinggi Badan <span><?php echo $r['tinggi_badan'] ?> cm</span></li>
											<li>Golongan Darah<span><?php echo $r['goldar'] ?></span></li>
											<li>Email <span><?php echo $r['email'] ?></span></li>
											<li>Alamat<span><?php echo $r['alamat'] ?></span></li>
											<li>No Telepon Rumah <span><?php echo $r['no_telp_rumah'] ?></span></li>
											<li>Tinggal Dengan<span><?php echo $r['tinggal_dengan'] ?></span></li>
											<li>Jumlah Saudara Tiri <span><?php echo $r['sodara_tiri'] ?></span></li>
										</ul>
										<h3 class="heading">Keterangan Kesehatan</h3>
										<ul class="list-unstyled list-justify">
											<li>Penyakit Yang Pernah Diderita<span><?php echo $r['penyakit'] ?></span></li>
											<li>Kelainan Jasmani/Lainnya<span><?php echo $r['kelainan'] ?></span></li>
										</ul>
										<h3 class="heading">Data Orangtua</h3>
										<h4 class="heading">A.Ayah</h4>
										<ul class="list-unstyled list-justify">
											<li>Nama Ayah<span><?php echo $r['nama_ayah'] ?></span></li>
											<li>TTL<span><?php echo $r['tempat_lahir_ayah'] ?>,<?php echo $r['tgl_lahir_ayah'] ?></span></li>
											<li>Pekerjaan<span><?php echo $r['pekerjaan_ayah'] ?></span></li>
											<li>Pendidikan terakhir<span><?php echo $r['pendidikan_ayah'] ?></span></li>
											<li>Kewarganegaraan/Agama<span><?php echo $r['warga_ayah'] ?>/<?php echo $r['agama_ayah'] ?></span></li>
											<li>No HP/WA<span><?php echo $r['no_hp_ayah'] ?></span></li>
										</ul>
										<h4 class="heading">B.Ibu</h4>
										<ul class="list-unstyled list-justify">
											<li>Nama ibu<span><?php echo $r['nama_ibu'] ?></span></li>
											<li>TTL<span><?php echo $r['tempat_lahir_ibu'] ?>,<?php echo $r['tgl_lahir_ibu'] ?></span></li>
											<li>Pekerjaan<span><?php echo $r['pekerjaan_ibu'] ?></span></li>
											<li>Pendidikan terakhir<span><?php echo $r['pendidikan_ibu'] ?></span></li>
											<li>Kewarganegaraan/Agama<span><?php echo $r['warga_ibu'] ?>/<?php echo $r['agama_ibu'] ?></span></li>
											<li>No HP/WA<span><?php echo $r['no_hp_ibu'] ?></span></li>
										</ul>
										<h3 class="heading">Nilai Rapor</h3>
										<ul class="list-unstyled list-justify">
											<div class="col-md-12">
							<!-- TABLE HOVER -->
							<div class="col-md-12 mb-3 mb-lg-0">
								<div align="center">
                <div class="text-center">
                	
              <table border="1">
                <tr align="center">
                  <td rowspan="2"> Mata Pelajaran </td>
                  <td colspan="2">Kelas 7</td>
                  <td colspan="2">Kelas 8</td>
                  <td>Kelas 9</td>
                </tr>
                <tr align="center">
                  <td> Smt 1 </td>
                  <td> Smt 2 </td>
                  <td> Smt 1 </td>
                  <td> Smt 2 </td>
                  <td> Smt 1 </td>
                </tr>
                <tr>
                  <td>PAI</td>
                  <td><?php echo $r['pai_sm1'] ?></td>
                  <td><?php echo $r['pai_sm2'] ?></td>
                  <td><?php echo $r['pai_sm3'] ?></td>
                  <td><?php echo $r['pai_sm4'] ?></td>
                  <td><?php echo $r['pai_sm5'] ?></td>
                </tr>
                <tr>
                  <td>Bahasa Indonesia</td>
                  <td><?php echo $r['indo_sm1'] ?></td>
                  <td><?php echo $r['indo_sm2'] ?></td>
                  <td><?php echo $r['indo_sm3'] ?></td>
                  <td><?php echo $r['indo_sm4'] ?></td>
                  <td><?php echo $r['indo_sm5'] ?></td>
                </tr>
                <tr>
                  <td>Bahasa Inggris</td>
                  <td><?php echo $r['ing_sm1'] ?></td>
                  <td><?php echo $r['ing_sm2'] ?></td>
                  <td><?php echo $r['ing_sm3'] ?></td>
                  <td><?php echo $r['ing_sm4'] ?></td>
                  <td><?php echo $r['ing_sm5'] ?></td>
                </tr>
                <tr>
                  <td>Matemamtika</td>
                  <td><?php echo $r['mtk_sm1'] ?></td>
                  <td><?php echo $r['mtk_sm2'] ?></td>
                  <td><?php echo $r['mtk_sm3'] ?></td>
                  <td><?php echo $r['mtk_sm4'] ?></td>
                  <td><?php echo $r['mtk_sm5'] ?></td>
                </tr>
                <tr>
                  <td>IPA</td>
                  <td><?php echo $r['ipa_sm1'] ?></td>
                  <td><?php echo $r['ipa_sm2'] ?></td>
                  <td><?php echo $r['ipa_sm3'] ?></td>
                  <td><?php echo $r['ipa_sm4'] ?></td>
                  <td><?php echo $r['ipa_sm5'] ?></td>
                </tr>
                <tr>
                  <td>IPS</td>
                  <td><?php echo $r['ips_sm1'] ?></td>
                  <td><?php echo $r['ips_sm2'] ?></td>
                  <td><?php echo $r['ips_sm3'] ?></td>
                  <td><?php echo $r['ips_sm4'] ?></td>
                  <td><?php echo $r['ips_sm5'] ?></td>
                </tr>
                
              </table>
            </div>
            </div>
        </div>
										</ul>
										
										<ul class="list-unstyled list-justify">
											<li>Prestasi yang pernah diraih<span><?php echo $r['prestasi'] ?></span></li>
											<li>Informasi SMK Wikrama Dari:<span><?php echo $r['info'] ?></span></li>
											<?php
						                    $no=0;
						                    $sql=mysqli_query($con,"SELECT * FROM siswa WHERE id='$id'");
						                    while($r=mysqli_fetch_array($sql)){
						                        $no++;?>
											<div class=""><a href="print.php?id=<?php echo $r['id']; ?>" class="btn btn-primary" target="_blank">Print</a></div>
										</ul>
									</div>
									<?php } ?>
									<div class="text-center"><a href="datasiswa.php" class="btn btn-primary">Kembali</a></div>
								</div>
								<!-- END PROFILE DETAIL -->
							</div>
							<!-- END LEFT COLUMN -->
						<?php } ?>
							<!-- RIGHT COLUMN -->
							
							<!-- END RIGHT COLUMN -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Modal logout -->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Akhir modal -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
	<script>
	$(function() {
		var data, options;

		// headline charts
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[23, 29, 24, 40, 25, 24, 35],
				[14, 25, 18, 34, 29, 38, 44],
			]
		};

		options = {
			height: 300,
			showArea: true,
			showLine: false,
			showPoint: false,
			fullWidth: true,
			axisX: {
				showGrid: false
			},
			lineSmooth: false,
		};

		new Chartist.Line('#headline-chart', data, options);


		// visits trend charts
		data = {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			series: [{
				name: 'series-real',
				data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
			}, {
				name: 'series-projection',
				data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
			}]
		};

		options = {
			fullWidth: true,
			lineSmooth: false,
			height: "270px",
			low: 0,
			high: 'auto',
			series: {
				'series-projection': {
					showArea: true,
					showPoint: false,
					showLine: false
				},
			},
			axisX: {
				showGrid: false,

			},
			axisY: {
				showGrid: false,
				onlyInteger: true,
				offset: 0,
			},
			chartPadding: {
				left: 20,
				right: 20
			}
		};

		new Chartist.Line('#visits-trends-chart', data, options);


		// visits chart
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[6384, 6342, 5437, 2764, 3958, 5068, 7654]
			]
		};

		options = {
			height: 300,
			axisX: {
				showGrid: false
			},
		};

		new Chartist.Bar('#visits-chart', data, options);


		// real-time pie chart
		var sysLoad = $('#system-load').easyPieChart({
			size: 130,
			barColor: function(percent) {
				return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
			},
			trackColor: 'rgba(245, 245, 245, 0.8)',
			scaleColor: false,
			lineWidth: 5,
			lineCap: "square",
			animate: 800
		});

		var updateInterval = 3000; // in milliseconds

		setInterval(function() {
			var randomVal;
			randomVal = getRandomInt(0, 100);

			sysLoad.data('easyPieChart').update(randomVal);
			sysLoad.find('.percent').text(randomVal);
		}, updateInterval);

		function getRandomInt(min, max) {
			return Math.floor(Math.random() * (max - min + 1)) + min;
		}

	});
	</script>
</body>

</html>
