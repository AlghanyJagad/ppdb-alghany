<?php
        session_start();
        include'../config/koneksi.php';
        include'../library/oop.php';
        $perintah = new oop();

@$table = "siswa";
@$where = "id = $_GET[id]";
@$redirect = "datasiswa.php";
        if (isset($_POST['update'])) {
        	$field = array('jalur' => $_POST['jalur'], 'nama_lengkap' => $_POST['nama_lengkap'], 'nama_panggilan' => $_POST['nama_panggilan'], 'jk' => $_POST['jk'], 'tempat_lahir' => $_POST['tempat_lahir'], 'tgl_lahir' => $_POST['tgl_lahir'], 'agama' => $_POST['agama'],'cita' => $_POST['cita'],'hoby' => $_POST['hoby'],'anak_ke' => $_POST['anak_ke'],'sodara_kandung' => $_POST['sodara_kandung'],'sodara_tiri' => $_POST['sodara_tiri'],'sodara_angkat' => $_POST['sodara_angkat'],'berat_badan' => $_POST['berat_badan'],'tinggi_badan' => $_POST['tinggi_badan'],'goldar' => $_POST['goldar'],'alamat' => $_POST['alamat'],'no_telp_rumah' => $_POST['no_telp_rumah'],'email' => $_POST['email'],'tinggal_dengan' => $_POST['tinggal_dengan'],'penyakit' => $_POST['penyakit'],'kelainan' => $_POST['kelainan'],'nama_ayah' => $_POST['nama_ayah'],'tempat_lahir_ayah' => $_POST['tempat_lahir_ayah'],'tgl_lahir_ayah' => $_POST['tgl_lahir_ayah'],'pekerjaan_ayah' => $_POST['pekerjaan_ayah'],'pendidikan_ayah' => $_POST['pendidikan_ayah'],'warga_ayah' => $_POST['warga_ayah'],'agama_ayah' => $_POST['agama_ayah'],'no_hp_ayah' => $_POST['no_hp_ayah'],'nama_ibu' => $_POST['nama_ibu'],'tempat_lahir_ibu' => $_POST['tempat_lahir_ibu'],'tgl_lahir_ibu' => $_POST['tgl_lahir_ibu'],'pekerjaan_ibu' => $_POST['pekerjaan_ibu'],'pendidikan_ibu' => $_POST['pendidikan_ibu'],'warga_ibu' => $_POST['warga_ibu'],'agama_ibu' => $_POST['agama_ibu'],'no_hp_ibu' => $_POST['no_hp_ibu'],'pai_sm1' => $_POST['pai_sm1'],'pai_sm2' => $_POST['pai_sm2'],'pai_sm3' => $_POST['pai_sm3'],'pai_sm4' => $_POST['pai_sm4'],'pai_sm5' => $_POST['pai_sm5'],'indo_sm1' => $_POST['indo_sm1'],'indo_sm2' => $_POST['indo_sm2'],'indo_sm3' => $_POST['indo_sm3'],'indo_sm4' => $_POST['indo_sm4'],'indo_sm5' => $_POST['indo_sm5'],'ing_sm1' => $_POST['ing_sm1'],'ing_sm2' => $_POST['ing_sm2'],'ing_sm3' => $_POST['ing_sm3'],'ing_sm4' => $_POST['ing_sm4'],'ing_sm5' => $_POST['ing_sm5'],'mtk_sm1' => $_POST['mtk_sm1'],'mtk_sm2' => $_POST['mtk_sm2'],'mtk_sm3' => $_POST['mtk_sm3'],'mtk_sm4' => $_POST['mtk_sm4'],'mtk_sm5' => $_POST['mtk_sm5'],'ipa_sm1' => $_POST['ipa_sm1'],'ipa_sm2' => $_POST['ipa_sm2'],'ipa_sm3' => $_POST['ipa_sm3'],'ipa_sm4' => $_POST['ipa_sm4'],'ipa_sm5' => $_POST['ipa_sm5'],'ips_sm1' => $_POST['ips_sm1'],'ips_sm2' => $_POST['ips_sm2'],'ips_sm3' => $_POST['ips_sm3'],'ips_sm4' => $_POST['ips_sm4'],'ips_sm5' => $_POST['ips_sm5'],'prestasi' => $_POST['prestasi'], 'info' => $_POST['info']);
        	$perintah->ubah($con, $table, $field, $where, $redirect);
        }

?>
<!doctype html>
<html lang="en">

<head>
	<title>Edit | PPDB</title>
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
				<a href="l">SMK WIKRAMA</a>
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
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7">
            <h2 class="section-title mb-3">Edit Data Siswa</h2>
            <form method="post" action="" data-aos="fade">
             <!-- <div class="form-group row">
                <div class="col-md-6 mb-3 mb-lg-0">
                  <p class="h4 text-black mb-4">No.Pendaftaran</p>
                  <input name="no_pendaftaran" type="text" class="form-control" placeholder="" value="">
                </div>
                <div class="col-md-6">
                  <p class="h4 text-black mb-4">No.Tes</p>
                  <input name="no_tes" type="text" class="form-control" placeholder="" disabled="disabled" value="">
                </div>
              </div> -->
              <?php
			       $id = $_GET['id'];
            $no=0;
            $sql=mysqli_query($con,"SELECT * FROM siswa WHERE id='$id'");
            while($r=mysqli_fetch_array($sql)){
                $no++;?>
              
               <div class="form-group row">
                <div class="col-md-6 mb-3 mb-lg-0">
                  <p class="h4 text-black mb-4">Jalur Penerimaan</p>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <select name="jalur" id="jalur" class="form-control" >
                    <option value="<?php echo $r['jalur'] ?>"><?php echo $r['jalur'] ?></option>
                    <option value="Reguler">Reguler</option>
                    <option value="Beasiswa">Beasiswa</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input name="nama_lengkap" type="text" class="form-control" placeholder="Nama Lengkap" value="<?php echo $r['nama_lengkap'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input name="nama_panggilan" type="text" class="form-control" placeholder="Nama Panggilan" value="<?php echo $r['nama_panggilan'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <select name="jk" id="jk" class="form-control" >
                    <option value="<?php echo $r['jk'] ?>"><?php echo $r['jk'] ?></option>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input name="tempat_lahir" type="text" class="form-control" placeholder="Tempat Lahir" value="<?php echo $r['tempat_lahir'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <p>Tanggal Lahir</p>
                  <input name="tgl_lahir" type="date" class="form-control" placeholder="Tanggal Lahir" value="<?php echo $r['tgl_lahir'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <select name="agama" id="agama" class="form-control" >
                    <option value="<?php echo $r['agama'] ?>"><?php echo $r['agama'] ?></option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Kong Hu Cu">Kong Hu Cu</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input name="cita" type="text" class="form-control" placeholder="Cita-Cita" value="<?php echo $r['cita'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input name="hoby" type="text" class="form-control" placeholder="Hoby" value="<?php echo $r['hoby'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input name="anak_ke" type="number" class="form-control" placeholder="Anak Ke" maxlength="2" required pattern = "[0-9]+" title = "ISI DENGAN ANGKA SAJA" value="<?php echo $r['anak_ke'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-3 mb-3 mb-lg-0">
                  <p class="h4 text-black mb-4">Jumlah Saudara</p>
                </div>
                <div class="col-md-3 mb-3 mb-lg-0">
                  <input name="sodara_kandung" type="text" class="form-control" placeholder="Kandung" value="<?php echo $r['sodara_kandung'] ?>">
                </div>
                <div class="col-md-3">
                  <input name="sodara_tiri" type="text" class="form-control" placeholder="Tiri" value="<?php echo $r['sodara_tiri'] ?>">
                </div>
                <div class="col-md-3">
                  <input name="sodara_angkat" type="text" class="form-control" placeholder="Angkat" value="<?php echo $r['sodara_angkat'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input name="berat_badan" type="text " class="form-control" placeholder="Berat Badan(KG)" maxlength="3" required pattern = "[0-9]+" title = "ISI DENGAN ANGKA SAJA" value="<?php echo $r['berat_badan'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input name="tinggi_badan" type="text " class="form-control" placeholder="Tinggi Badan(CM)" maxlength="3" required pattern = "[0-9]+" title = "ISI DENGAN ANGKA SAJA" value="<?php echo $r['tinggi_badan'] ?>">
                </div>
              </div>
               <div class="form-group row">
                <div class="col-md-12">
                  <select name="goldar" id="goldar" class="form-control" >
                    <option value="<?php echo $r['goldar'] ?>"><?php echo $r['goldar'] ?></option>
                    <option value="O">O</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input name = "alamat" class="form-control" id="alamat" cols="30" rows="10" placeholder="Alamat" value="<?php echo $r['alamat'] ?>"></input>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input name="no_telp_rumah" type="text " class="form-control" placeholder="No Telpon Rumah" maxlength="15" required pattern = "[0-9]+" title = "ISI DENGAN ANGKA SAJA" value="<?php echo $r['no_telp_rumah'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input name="email" type="email " class="form-control" placeholder="Email" value="<?php echo $r['email'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <select name="tinggal_dengan" id="tinggal_dengan" class="form-control" >
                    <option value="<?php echo $r['tinggal_dengan'] ?>"><?php echo $r['tinggal_dengan'] ?></option>
                    <option value="Orang Tua">Orang Tua</option>
                    <option value="Asrama">Asrama</option>
                    <option value="Saudara">Saudara</option>
                    <option value="Lainnya">Lainnya</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input name="penyakit" type="text" class="form-control" placeholder="Penyakit Yang Pernah Diderita (Sebutkan Kapan)" value="<?php echo $r['penyakit'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input name="kelainan" type="text" class="form-control" placeholder="Kelainan Jasmani/Lainnya" value="<?php echo $r['kelainan'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12 mb-3 mb-lg-0">
                  <h3 class="h4 text-black mb-4">Data Orangtua</h3>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12 mb-3 mb-lg-0">
                  <h3 class="h4 text-black mb-4">A.Ayah</h3>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input name="nama_ayah" type="text" class="form-control" placeholder="Nama Ayah" value="<?php echo $r['tempat_lahir'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input name="tempat_lahir_ayah" type="text" class="form-control" placeholder="Tempat Lahir Ayah" value="<?php echo $r['tempat_lahir_ayah'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <p>Tanggal Lahir Ayah</p>
                  <input name="tgl_lahir_ayah" type="date" class="form-control" placeholder="Tanggal Lahir Ayah" value="<?php echo $r['tgl_lahir_ayah'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input name="pekerjaan_ayah" type="text" class="form-control" placeholder="Pekerjaan" value="<?php echo $r['pekerjaan_ayah'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input name="pendidikan_ayah" type="text" class="form-control" placeholder="Pendidikan terakhir" value="<?php echo $r['pendidikan_ayah'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 mb-3 mb-lg-0">
                  <input name="warga_ayah" type="text" class="form-control" placeholder="Kewarganegaraan" value="<?php echo $r['warga_ayah'] ?>">
                </div>
                <div class="col-md-6">
                  <select name="agama_ayah" id="agama" class="form-control" >
                    <option value="<?php echo $r['agama_ayah'] ?>"><?php echo $r['agama_ayah'] ?></option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Kong Hu Cu">Kong Hu Cu</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input name="no_hp_ayah" type="text " class="form-control" placeholder="No HP/WA" maxlength="15" required pattern = "[0-9]+" title = "ISI DENGAN ANGKA SAJA" value="<?php echo $r['no_hp_ayah'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12 mb-3 mb-lg-0">
                  <h3 class="h4 text-black mb-4">B.Ibu</h3>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input name="nama_ibu" type="text" class="form-control" placeholder="Nama Ibu" value="<?php echo $r['nama_ibu'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input name="tempat_lahir_ibu" type="text" class="form-control" placeholder="Tempat Lahir Ibu" value="<?php echo $r['tempat_lahir_ibu'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <p>Tanggal Lahir Ibu</p>
                  <input name="tgl_lahir_ibu" type="date" class="form-control" placeholder="Tanggal Lahir Ibu" value="<?php echo $r['tgl_lahir_ibu'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input name="pekerjaan_ibu" type="text" class="form-control" placeholder="Pekerjaan" value="<?php echo $r['pekerjaan_ibu'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input name="pendidikan_ibu" type="text" class="form-control" placeholder="Pendidikan terakhir" <?php echo $r['pendidikan_ibu'] ?>>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 mb-3 mb-lg-0">
                  <input name="warga_ibu" type="text" class="form-control" placeholder="Kewarganegaraan" value="<?php echo $r['warga_ibu'] ?>">
                </div>
                <div class="col-md-6">
                  <select name="agama_ibu" id="agama" class="form-control" >
                    <option value="<?php echo $r['agama_ibu'] ?>"><?php echo $r['agama_ibu'] ?></option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Kong Hu Cu">Kong Hu Cu</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input name="no_hp_ibu" type="text " class="form-control" placeholder="No HP/WA" maxlength="15" required pattern = "[0-9]+" title = "ISI DENGAN ANGKA SAJA" value="<?php echo $r['no_hp_ibu'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12 mb-3 mb-lg-0">
                  <h3 class="h4 text-black mb-4">Nilai Rapot</h3>
                </div>
              </div>

            <div class="form-group row">
               <div class="col-md-12 mb-3 mb-lg-0">
                <div align="center" >
              <table border="1">
                <tr align="center">
                  <td rowspan="2">No</td>
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
                  <td>1. </td>
                  <td>PAI</td>
                  <td><input type="text" name="pai_sm1" size="6" value="<?php echo $r['pai_sm1'] ?>"></td>
                  <td><input type="text" name="pai_sm2" size="6" value="<?php echo $r['pai_sm2'] ?>"></td>
                  <td><input type="text" name="pai_sm3" size="6" value="<?php echo $r['pai_sm3'] ?>"></td>
                  <td><input type="text" name="pai_sm4" size="6" value="<?php echo $r['pai_sm4'] ?>"></td>
                  <td><input type="text" name="pai_sm5" size="6" value="<?php echo $r['pai_sm5'] ?>"></td>
                </tr>
                <tr>
                  <td>2. </td>
                  <td>Bahasa Indonesia</td>
                  <td><input type="text" name="indo_sm1" size="6" value="<?php echo $r['indo_sm1'] ?>"></td>
                  <td><input type="text" name="indo_sm2" size="6" value="<?php echo $r['indo_sm2'] ?>"></td>
                  <td><input type="text" name="indo_sm3" size="6" value="<?php echo $r['indo_sm3'] ?>"></td>
                  <td><input type="text" name="indo_sm4" size="6" value="<?php echo $r['indo_sm4'] ?>"></td>
                  <td><input type="text" name="indo_sm5" size="6" value="<?php echo $r['indo_sm5'] ?>"></td>
                </tr>
                <tr>
                  <td>3. </td>
                  <td>Bahasa Inggris</td>
                  <td><input type="text" name="ing_sm1" size="6" value="<?php echo $r['ing_sm1'] ?>"></td>
                  <td><input type="text" name="ing_sm2" size="6" value="<?php echo $r['ing_sm2'] ?>"></td>
                  <td><input type="text" name="ing_sm3" size="6" value="<?php echo $r['ing_sm3'] ?>"></td>
                  <td><input type="text" name="ing_sm4" size="6" value="<?php echo $r['ing_sm4'] ?>"></td>
                  <td><input type="text" name="ing_sm5" size="6" value="<?php echo $r['ing_sm5'] ?>"></td>
                </tr>
                <tr>
                  <td>4. </td>
                  <td>Matemamtika</td>
                  <td><input type="text" name="mtk_sm1" size="6" value="<?php echo $r['mtk_sm1'] ?>"></td>
                  <td><input type="text" name="mtk_sm2" size="6" value="<?php echo $r['mtk_sm2'] ?>"></td>
                  <td><input type="text" name="mtk_sm3" size="6" value="<?php echo $r['mtk_sm3'] ?>"></td>
                  <td><input type="text" name="mtk_sm4" size="6" value="<?php echo $r['mtk_sm4'] ?>"></td>
                  <td><input type="text" name="mtk_sm5" size="6" value="<?php echo $r['mtk_sm5'] ?>"></td>
                </tr>
                <tr>
                  <td>5. </td>
                  <td>IPA</td>
                  <td><input type="text" name="ipa_sm1" size="6" value="<?php echo $r['ipa_sm1'] ?>"></td>
                  <td><input type="text" name="ipa_sm2" size="6" value="<?php echo $r['ipa_sm2'] ?>"></td>
                  <td><input type="text" name="ipa_sm3" size="6" value="<?php echo $r['ipa_sm3'] ?>"></td>
                  <td><input type="text" name="ipa_sm4" size="6" value="<?php echo $r['ipa_sm4'] ?>"></td>
                  <td><input type="text" name="ipa_sm5" size="6" value="<?php echo $r['ipa_sm5'] ?>"></td>
                </tr>
                <tr>
                  <td>6. </td>
                  <td>IPS</td>
                  <td><input type="text" name="ips_sm1" size="6" value="<?php echo $r['ips_sm1'] ?>"></td>
                  <td><input type="text" name="ips_sm2" size="6" value="<?php echo $r['ips_sm2'] ?>"></td>
                  <td><input type="text" name="ips_sm3" size="6" value="<?php echo $r['ips_sm3'] ?>"></td>
                  <td><input type="text" name="ips_sm4" size="6" value="<?php echo $r['ips_sm4'] ?>"></td>
                  <td><input type="text" name="ips_sm5" size="6" value="<?php echo $r['ips_sm5'] ?>"></td>
                </tr>
                <tr rowspan="1">
                  <td>7. </td>
                  <td>Prestasi Yang Pernah Diraih</td>
                  <td colspan="5"><input type="text" name="prestasi" size="40" value="<?php echo $r['prestasi'] ?>"></td>
                </tr>
              </table>
            </div>
            </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                  <p>Informasi SMK Wikrama Dari</p>
                  <select name="info" id="info" class="form-control" >
                    <option value="<?php echo $r['info'] ?>"><?php echo $r['info'] ?></option>
                    <option value="Family">Famili</option>
                    <option value="Website">Website</option>
                    <option value="Teman">Teman</option>
                    <option value="Brosur">Brosur</option>
                    <option value="Teman Smp">Teman Smp</option>
                    <option value="Lainnya">Lainnya</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                  <input type="submit" name="update" class="btn btn-primary py-3 px-5 btn-block btn-pill" value="Update" onClick='validJk();validAgama();validGoldar();'>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </form>
    </div>
			</div>
		<?php } ?>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				
			</div>
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
