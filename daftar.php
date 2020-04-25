<?php
 include "config/koneksi.php";
 include "library/oop.php";

$perintah = new oop();
 $folder = "foto";
if(isset($_POST['simpan'])) {
        $sql = mysqli_query($con,"INSERT INTO siswa VALUES('','$_POST[jalur]','$_POST[nama_lengkap]','$_POST[nama_panggilan]','$_POST[jk]','$_POST[tempat_lahir]','$_POST[tgl_lahir]','$_POST[agama]','$_POST[cita]','$_POST[hoby]','$_POST[anak_ke]','$_POST[sodara_kandung]','$_POST[sodara_tiri]','$_POST[sodara_angkat]','$_POST[berat_badan]','$_POST[tinggi_badan]','$_POST[goldar]','$_POST[alamat]','$_POST[no_telp_rumah]','$_POST[email]','$_POST[tinggal_dengan]','$_POST[penyakit]','$_POST[kelainan]','$_POST[nama_ayah]','$_POST[tempat_lahir_ayah]','$_POST[tgl_lahir_ayah]','$_POST[pekerjaan_ayah]','$_POST[pendidikan_ayah]','$_POST[warga_ayah]','$_POST[agama_ayah]','$_POST[no_hp_ayah]','$_POST[nama_ibu]','$_POST[tempat_lahir_ibu]','$_POST[tgl_lahir_ibu]','$_POST[pekerjaan_ibu]','$_POST[pendidikan_ibu]','$_POST[warga_ibu]','$_POST[agama_ibu]','$_POST[no_hp_ibu]','$_POST[pai_sm1]','$_POST[pai_sm2]','$_POST[pai_sm3]','$_POST[pai_sm4]','$_POST[pai_sm5]','$_POST[indo_sm1]','$_POST[indo_sm2]','$_POST[indo_sm3]','$_POST[indo_sm4]','$_POST[indo_sm5]','$_POST[ing_sm1]','$_POST[ing_sm2]','$_POST[ing_sm3]','$_POST[ing_sm4]','$_POST[ing_sm5]','$_POST[mtk_sm1]','$_POST[mtk_sm2]','$_POST[mtk_sm3]','$_POST[mtk_sm4]','$_POST[mtk_sm5]','$_POST[ipa_sm1]','$_POST[ipa_sm2]','$_POST[ipa_sm3]','$_POST[ipa_sm4]','$_POST[ipa_sm5]','$_POST[ips_sm1]','$_POST[ips_sm2]','$_POST[ips_sm3]','$_POST[ips_sm4]','$_POST[ips_sm5]','$_POST[prestasi]','$_POST[info]')");
       if ($sql) {
            echo "<script>alert('Data Berhasil Disimpan');
            document.location.href='index.php';</script>";
        }else{
           echo "<script>alert('Data Gagal Disimpan');
           document.location.href='index.php';</script>";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PPDB | FORM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/radio.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo mr-auto w-25"><a href="index.html">SMK WIKRAMA</a></div>

          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
              </ul>
            </nav>
          </div>

          <div class="ml-auto w-25">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                <li class="cta"><a href="index.php" class="nav-link"><span>Keluar</span></a></li>
              </ul>
            </nav>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>
      
    </header>

    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7">
            <h2 class="section-title mb-3">PPDB ONLINE</h2>
            <p class="mb-5">Penerimaan peserta didik baru SMK WIKRAMA</p>
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
              
              <div class="form-group row">
                <div class="col-md-12">
                  <select name="jalur" id="jalur" class="form-control" >
                    <option value="">Pilih Jalur Penerimaan</option>
                    <option value="Reguler">Reguler</option>
                    <option value="Beasiswa">Beasiswa</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input name="nama_lengkap" type="text" class="form-control" placeholder="Nama Lengkap">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input name="nama_panggilan" type="text" class="form-control" placeholder="Nama Panggilan">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <select name="jk" id="jk" class="form-control" >
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input name="tempat_lahir" type="text" class="form-control" placeholder="Tempat Lahir">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <p>Tanggal Lahir</p>
                  <input name="tgl_lahir" type="date" class="form-control" placeholder="Tanggal Lahir">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <select name="agama" id="agama" class="form-control" >
                    <option value="">Pilih Agama</option>
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
                  <input name="cita" type="text" class="form-control" placeholder="Cita-Cita">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input name="hoby" type="text" class="form-control" placeholder="Hoby">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input name="anak_ke" type="number" class="form-control" placeholder="Anak Ke" maxlength="2" required pattern = "[0-9]+" title = "ISI DENGAN ANGKA SAJA">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-3 mb-3 mb-lg-0">
                  <p class="h4 text-black mb-4">Jumlah Saudara</p>
                </div>
                <div class="col-md-3 mb-3 mb-lg-0">
                  <input name="sodara_kandung" type="text" class="form-control" placeholder="Kandung">
                </div>
                <div class="col-md-3">
                  <input name="sodara_tiri" type="text" class="form-control" placeholder="Tiri">
                </div>
                <div class="col-md-3">
                  <input name="sodara_angkat" type="text" class="form-control" placeholder="Angkat">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input name="berat_badan" type="text " class="form-control" placeholder="Berat Badan(KG)" maxlength="3" required pattern = "[0-9]+" title = "ISI DENGAN ANGKA SAJA">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input name="tinggi_badan" type="text " class="form-control" placeholder="Tinggi Badan(CM)" maxlength="3" required pattern = "[0-9]+" title = "ISI DENGAN ANGKA SAJA">
                </div>
              </div>
               <div class="form-group row">
                <div class="col-md-12">
                  <select name="goldar" id="goldar" class="form-control" >
                    <option value="">Pilih Golongan Darah</option>
                    <option value="O">O</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name = "alamat" class="form-control" id="alamat" cols="30" rows="10" placeholder="Alamat"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input name="no_telp_rumah" type="text " class="form-control" placeholder="No Telpon Rumah" maxlength="15" required pattern = "[0-9]+" title = "ISI DENGAN ANGKA SAJA">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input name="email" type="email " class="form-control" placeholder="Email">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <select name="tinggal_dengan" id="tinggal_dengan" class="form-control" >
                    <option value="">Tinggal Dengan</option>
                    <option value="Orang Tua">Orang Tua</option>
                    <option value="Asrama">Asrama</option>
                    <option value="Saudara">Saudara</option>
                    <option value="Lainnya">Lainnya</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input name="penyakit" type="text" class="form-control" placeholder="Penyakit Yang Pernah Diderita (Sebutkan Kapan)">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input name="kelainan" type="text" class="form-control" placeholder="Kelainan Jasmani/Lainnya">
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
                  <input name="nama_ayah" type="text" class="form-control" placeholder="Nama Ayah">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input name="tempat_lahir_ayah" type="text" class="form-control" placeholder="Tempat Lahir Ayah">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <p>Tanggal Lahir Ayah</p>
                  <input name="tgl_lahir_ayah" type="date" class="form-control" placeholder="Tanggal Lahir Ayah">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input name="pekerjaan_ayah" type="text" class="form-control" placeholder="Pekerjaan">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input name="pendidikan_ayah" type="text" class="form-control" placeholder="Pendidikan terakhir">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 mb-3 mb-lg-0">
                  <input name="warga_ayah" type="text" class="form-control" placeholder="Kewarganegaraan">
                </div>
                <div class="col-md-6">
                  <select name="agama_ayah" id="agama" class="form-control" >
                    <option value="">Pilih Agama</option>
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
                  <input name="no_hp_ayah" type="text " class="form-control" placeholder="No HP/WA" maxlength="15" required pattern = "[0-9]+" title = "ISI DENGAN ANGKA SAJA">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12 mb-3 mb-lg-0">
                  <h3 class="h4 text-black mb-4">B.Ibu</h3>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input name="nama_ibu" type="text" class="form-control" placeholder="Nama Ibu">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input name="tempat_lahir_ibu" type="text" class="form-control" placeholder="Tempat Lahir Ibu">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <p>Tanggal Lahir Ibu</p>
                  <input name="tgl_lahir_ibu" type="date" class="form-control" placeholder="Tanggal Lahir Ibu">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input name="pekerjaan_ibu" type="text" class="form-control" placeholder="Pekerjaan">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input name="pendidikan_ibu" type="text" class="form-control" placeholder="Pendidikan terakhir">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 mb-3 mb-lg-0">
                  <input name="warga_ibu" type="text" class="form-control" placeholder="Kewarganegaraan">
                </div>
                <div class="col-md-6">
                  <select name="agama_ibu" id="agama" class="form-control" >
                    <option value="">Pilih Agama</option>
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
                  <input name="no_hp_ibu" type="text " class="form-control" placeholder="No HP/WA" maxlength="15" required pattern = "[0-9]+" title = "ISI DENGAN ANGKA SAJA">
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
                  <td><input type="text" name="pai_sm1" size="6"></td>
                  <td><input type="text" name="pai_sm2" size="6"></td>
                  <td><input type="text" name="pai_sm3" size="6"></td>
                  <td><input type="text" name="pai_sm4" size="6"></td>
                  <td><input type="text" name="pai_sm5" size="6"></td>
                </tr>
                <tr>
                  <td>2. </td>
                  <td>Bahasa Indonesia</td>
                  <td><input type="text" name="indo_sm1" size="6"></td>
                  <td><input type="text" name="indo_sm2" size="6"></td>
                  <td><input type="text" name="indo_sm3" size="6"></td>
                  <td><input type="text" name="indo_sm4" size="6"></td>
                  <td><input type="text" name="indo_sm5" size="6"></td>
                </tr>
                <tr>
                  <td>3. </td>
                  <td>Bahasa Inggris</td>
                  <td><input type="text" name="ing_sm1" size="6"></td>
                  <td><input type="text" name="ing_sm2" size="6"></td>
                  <td><input type="text" name="ing_sm3" size="6"></td>
                  <td><input type="text" name="ing_sm4" size="6"></td>
                  <td><input type="text" name="ing_sm5" size="6"></td>
                </tr>
                <tr>
                  <td>4. </td>
                  <td>Matemamtika</td>
                  <td><input type="text" name="mtk_sm1" size="6"></td>
                  <td><input type="text" name="mtk_sm2" size="6"></td>
                  <td><input type="text" name="mtk_sm3" size="6"></td>
                  <td><input type="text" name="mtk_sm4" size="6"></td>
                  <td><input type="text" name="mtk_sm5" size="6"></td>
                </tr>
                <tr>
                  <td>5. </td>
                  <td>IPA</td>
                  <td><input type="text" name="ipa_sm1" size="6"></td>
                  <td><input type="text" name="ipa_sm2" size="6"></td>
                  <td><input type="text" name="ipa_sm3" size="6"></td>
                  <td><input type="text" name="ipa_sm4" size="6"></td>
                  <td><input type="text" name="ipa_sm5" size="6"></td>
                </tr>
                <tr>
                  <td>6. </td>
                  <td>IPS</td>
                  <td><input type="text" name="ips_sm1" size="6"></td>
                  <td><input type="text" name="ips_sm2" size="6"></td>
                  <td><input type="text" name="ips_sm3" size="6"></td>
                  <td><input type="text" name="ips_sm4" size="6"></td>
                  <td><input type="text" name="ips_sm5" size="6"></td>
                </tr>
                <tr rowspan="1">
                  <td>7. </td>
                  <td>Prestasi Yang Pernah Diraih</td>
                  <td colspan="5"><input type="text" name="prestasi" size="40"></td>
                </tr>
              </table>
            </div>
            </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                  <p>Informasi SMK Wikrama Dari</p>
                  <select name="info" id="info" class="form-control" >
                    <option value="">Pilih</option>
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
                  <input type="submit" name="simpan" class="btn btn-primary py-3 px-5 btn-block btn-pill" value="Daftar" onClick='validJk();validAgama();validGoldar();'>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </form>
    </div>
    
   
<script language='javascript'>

function validJk()
{
 if (document.ppdb.jk.value == "") 
 {
  alert("Jenis Kelamin masih kosong");
 }
}
function validAgama()
{
 if (document.ppdb.agama.value == "") 
 {
  alert("Agama masih kosong");
 }
}
function validGoldar()
{
 if (document.ppdb.goldar.value == "") 
 {
  alert("Golongan Darah masih kosong");
 }
}
function validInfo()
{
 if (document.ppdb.info.value == "") 
 {
  alert("Info masih kosong");
 }
}
</script>

    <footer class="footer-section bg-white">

        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  
    
  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>
    
  </body>
</html>