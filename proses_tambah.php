<?php
include "config/koneksi.php";
 include "library/oop.php";

 $gambar_produk = $_FILES['foto']['name'];

 if($gambar_produk != "") {
  $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $gambar_produk); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['foto']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$gambar_produk; //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, 'images/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "INSERT INTO siswa VALUES('','$nama_gambar_baru','$_POST[jalur]','$_POST[nama_lengkap]','$_POST[nama_panggilan]','$_POST[jk]','$_POST[tempat_lahir]','$_POST[tgl_lahir]','$_POST[agama]','$_POST[cita]','$_POST[hoby]','$_POST[anak_ke]','$_POST[sodara_kandung]','$_POST[sodara_tiri]','$_POST[sodara_angkat]','$_POST[berat_badan]','$_POST[tinggi_badan]','$_POST[goldar]','$_POST[alamat]','$_POST[no_telp_rumah]','$_POST[email]','$_POST[tinggal_dengan]','$_POST[penyakit]','$_POST[kelainan]','$_POST[nama_ayah]','$_POST[tempat_lahir_ayah]','$_POST[tgl_lahir_ayah]','$_POST[pekerjaan_ayah]','$_POST[pendidikan_ayah]','$_POST[warga_ayah]','$_POST[agama_ayah]','$_POST[no_hp_ayah]','$_POST[nama_ibu]','$_POST[tempat_lahir_ibu]','$_POST[tgl_lahir_ibu]','$_POST[pekerjaan_ibu]','$_POST[pendidikan_ibu]','$_POST[warga_ibu]','$_POST[agama_ibu]','$_POST[no_hp_ibu]','$_POST[pai_sm1]','$_POST[pai_sm2]','$_POST[pai_sm3]','$_POST[pai_sm4]','$_POST[pai_sm5]','$_POST[indo_sm1]','$_POST[indo_sm2]','$_POST[indo_sm3]','$_POST[indo_sm4]','$_POST[indo_sm5]','$_POST[ing_sm1]','$_POST[ing_sm2]','$_POST[ing_sm3]','$_POST[ing_sm4]','$_POST[ing_sm5]','$_POST[mtk_sm1]','$_POST[mtk_sm2]','$_POST[mtk_sm3]','$_POST[mtk_sm4]','$_POST[mtk_sm5]','$_POST[ipa_sm1]','$_POST[ipa_sm2]','$_POST[ipa_sm3]','$_POST[ipa_sm4]','$_POST[ipa_sm5]','$_POST[ips_sm1]','$_POST[ips_sm2]','$_POST[ips_sm3]','$_POST[ips_sm4]','$_POST[ips_sm5]','$_POST[prestasi]','$_POST[info]')";
                  $result = mysqli_query($con, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($con).
                           " - ".mysqli_error($con));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
                  }

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='daftar.php';</script>";
            }
} else {
   $query = "INSERT INTO siswa VALUES('','$nama_gambar_baru','$_POST[jalur]','$_POST[nama_lengkap]','$_POST[nama_panggilan]','$_POST[jk]','$_POST[tempat_lahir]','$_POST[tgl_lahir]','$_POST[agama]','$_POST[cita]','$_POST[hoby]','$_POST[anak_ke]','$_POST[sodara_kandung]','$_POST[sodara_tiri]','$_POST[sodara_angkat]','$_POST[berat_badan]','$_POST[tinggi_badan]','$_POST[goldar]','$_POST[alamat]','$_POST[no_telp_rumah]','$_POST[email]','$_POST[tinggal_dengan]','$_POST[penyakit]','$_POST[kelainan]','$_POST[nama_ayah]','$_POST[tempat_lahir_ayah]','$_POST[tgl_lahir_ayah]','$_POST[pekerjaan_ayah]','$_POST[pendidikan_ayah]','$_POST[warga_ayah]','$_POST[agama_ayah]','$_POST[no_hp_ayah]','$_POST[nama_ibu]','$_POST[tempat_lahir_ibu]','$_POST[tgl_lahir_ibu]','$_POST[pekerjaan_ibu]','$_POST[pendidikan_ibu]','$_POST[warga_ibu]','$_POST[agama_ibu]','$_POST[no_hp_ibu]','$_POST[pai_sm1]','$_POST[pai_sm2]','$_POST[pai_sm3]','$_POST[pai_sm4]','$_POST[pai_sm5]','$_POST[indo_sm1]','$_POST[indo_sm2]','$_POST[indo_sm3]','$_POST[indo_sm4]','$_POST[indo_sm5]','$_POST[ing_sm1]','$_POST[ing_sm2]','$_POST[ing_sm3]','$_POST[ing_sm4]','$_POST[ing_sm5]','$_POST[mtk_sm1]','$_POST[mtk_sm2]','$_POST[mtk_sm3]','$_POST[mtk_sm4]','$_POST[mtk_sm5]','$_POST[ipa_sm1]','$_POST[ipa_sm2]','$_POST[ipa_sm3]','$_POST[ipa_sm4]','$_POST[ipa_sm5]','$_POST[ips_sm1]','$_POST[ips_sm2]','$_POST[ips_sm3]','$_POST[ips_sm4]','$_POST[ips_sm5]','$_POST[prestasi]','$_POST[info]')";
                  $result = mysqli_query($con, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($con).
                           " - ".mysqli_error($con));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
                  }
}

?>