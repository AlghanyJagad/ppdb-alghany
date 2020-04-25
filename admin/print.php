<?php
include "../config/koneksi.php";
include "../library/oop.php";
$perintah = new oop();
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
                   $id = $_GET['id'];
            $no=0;
            $sql=mysqli_query($con,"SELECT * FROM siswa WHERE id='$id'");
            while($r=mysqli_fetch_array($sql)){
                $no++;?>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title> Data <?php echo $r['nama_lengkap'] ?></title>
    <?php } ?>
    </head>

    <body>

        <style>
            .utama{
                margin:0 auto;
                border:thin solid #000;
                width:750px;
            }
            .print{
                margin:0 auto;
                width:700px;
            }
            a{
                text-decoration: none;

            }
        </style>

        <div class="print">
            <a href="#" onclick="document.getElementById('print').style.display='none';window.print();"><img src="../images/print-icon.png" id="print" width="25" height="25" border="0" /></a>
        </div>
        <div class="utama">
            <table width="98%" border="0" cellspacing="0" cellpadding="0" align="center" style="margin-top:10px;">
                <tr>
                    <td width="7%" rowspan="3" align="center" valign="top"><img src="../images/logo.png" width="55" height="55" />
                    </td>
                    <td width="93%" valign="top"><strong>&nbsp;Yayasan Prawitama </strong></td>
                </tr>
                <tr>
                    <td valign="top">&nbsp;SMK Wikrama Kota Bogor </td>
                </tr>
                <tr>
                    <td valign="top">&nbsp;Ilmu yang Amaliah, Amal yang Ilmiah, Akhlakul Karimah</td>
                </tr>
               
            </table>
            <?php
                   $id = $_GET['id'];
            $no=0;
            $sql=mysqli_query($con,"SELECT * FROM siswa WHERE id='$id'");
            while($r=mysqli_fetch_array($sql)){
                $no++;?>
            <table>
                 <tr>
                    <td valign="top"><h1>Formulir Pendaftaran Peserta Didik Baru 2020-2021</h1></td>
                </tr>
                
            </table>

            <table width="98%">
                <tr><td><hr></td></tr>
            </table>

            <table>
                <tr>
                    <td valign="top"><h3>Jalur Penerimaan :</h3></td>
                    <td><strong ><?php echo $r['jalur'] ?></strong></td>
                </tr>
            </table>

            <table width="98%">
                <tr><td><hr></td></tr>
            </table>

            <table>
                <tr>
                    <td >No.Pendaftaran </td>
                    <td>:</td>
                    <td><?php echo $r['id'] ?></td>
                </tr>
                <tr>
                    <td >No.Tes </td>
                    <td>:</td>
                    <td><?php echo $r['id'] ?></td>
                </tr>
                <tr>
                    <td> <strong>I. Data Calon Murid</strong></td>
                </tr>
                <tr>
                    <td>1. Nama Lengkap </td>
                    <td>:</td>
                    <td><?php echo $r['nama_lengkap'] ?></td>
                </tr>
                <tr>
                    <td>2. Nama Panggilan </td>
                    <td>:</td>
                    <td><?php echo $r['nama_panggilan'] ?></td>
                </tr>
                <tr>
                    <td>3.Jenis Kelamin </td>
                    <td>:</td>
                    <td><?php echo $r['jk'] ?></td>

                </tr>
                <tr>
                    <td>4. Tempat, Tanggal Lahir </td>
                    <td>:</td>
                    <td><?php echo $r['tempat_lahir'] ?>,<?php echo $r['tgl_lahir'] ?></td>
                </tr>
                <tr>
                    <td>5. Agama </td>
                    <td>:</td>
                    <td><?php echo $r['agama'] ?></td>
                </tr>
                <tr>
                    <td>6. Cita-Cita </td>
                    <td>:</td>
                    <td><?php echo $r['cita'] ?></td>
                </tr>
                <tr>
                    <td>7. Hoby </td>
                    <td>:</td>
                    <td><?php echo $r['hoby'] ?></td>
                </tr>
                <tr>
                    <td>8. Anak Ke </td>
                    <td>:</td>
                    <td><?php echo $r['anak_ke'] ?></td>
                </tr>
                <tr>
                    <td>9. Jumlah Saudara  </td>
                    <td>:</td>
                    <td> Kandung :<?php echo $r['sodara_kandung'] ?></td>
                    <td> Tiri :<?php echo $r['sodara_tiri'] ?></td>
                    <td></td>
                    <td> Angkat :</td>
                    <td><?php echo $r['sodara_angkat'] ?></td>
                </tr>
                <tr>
                    <td>10. Berat Badan </td>
                    <td>:</td>
                    <td><?php echo $r['berat_badan'] ?></td>
                </tr>
                <tr>
                    <td>11.Tinggi Badan </td>
                    <td>:</td>
                    <td><?php echo $r['tinggi_badan'] ?></td>
                </tr>
                <tr>
                    <td>12. Golongan Darah </td>
                    <td>:</td>
                    <td><?php echo $r['goldar'] ?></td>
                </tr>
            </table>
                <table width="98%">
                    <tr><td><br></td></tr>
                </table>
            <table>
                <tr>
                    <td><strong>II.KETERANGAN TEMPAT TINGGAL</strong></td>
                </tr>
                <tr>
                    <td>1. Alamat </td>
                    <td>:</td>
                    <td><?php echo $r['alamat'] ?></td>
                </tr>
                <tr>
                    <td>-No.Telpon Rumah </td>
                    <td>:</td>
                    <td><?php echo $r['no_telp_rumah'] ?></td>
                </tr>
                <tr>
                    <td>-E-mail </td>
                    <td>:</td>
                    <td><?php echo $r['email'] ?></td>
                </tr>
                <tr>
                    <td>2. Tinggal Dengan </td>
                    <td>:</td>
                    <td><?php echo $r['tinggal_dengan'] ?></td>
                </tr>
            </table>
                 <table width="98%">
                    <tr><td><br></td></tr>
                </table>
            <table>
                <tr>
                    <td><strong>III. KETERANGAN KESEHATAN</strong></td>
                </tr>
                <tr>
                    <td>1. Penyakit Yang Pernah Diderita </td>
                    <td>:</td>
                    <td><?php echo $r['penyakit'] ?></td>
                </tr>
                <tr>
                    <td>2. Kelainan Jasmani/Lainnya </td>
                    <td>:</td>
                    <td><?php echo $r['kelainan'] ?></td>
                </tr>
            </table>
                <table width="98%">
                    <tr><td><br></td></tr>
                </table>
            <table>
                <tr>
                    <td><strong>IV.DATA ORANG TUA</strong></td>
                </tr>
                <tr>
                    <td><strong>A.Ayah</strong></td>
                </tr>
                <tr>
                    <td>1. Nama Ayah</td>
                    <td>:</td>
                    <td><?php echo $r['nama_ayah'] ?></td>
                </tr>
                <tr>
                    <td>2. Tempat,Tanggal Lahir</td>
                    <td>:</td>
                    <td><?php echo $r['tempat_lahir_ayah'] ?>,<?php echo $r['tgl_lahir_ayah'] ?></td>
                </tr>
                <tr>
                    <td>3. Pekerjaan</td>
                    <td>:</td>
                    <td><?php echo $r['pekerjaan_ayah'] ?></td>
                </tr>
                <tr>
                    <td>4. Pendidikan Terakhir</td>
                    <td>:</td>
                    <td><?php echo $r['pendidikan_ayah'] ?></td>
                </tr>
                <tr>
                    <td>5. Kewarganegaraan / Agama</td>
                    <td>:</td>
                    <td><?php echo $r['warga_ayah'] ?> / <?php echo $r['agama_ayah'] ?></td>
                </tr>
                <tr>
                    <td>6. No.HP/WA</td>
                    <td>:</td>
                    <td><?php echo $r['no_hp_ayah'] ?></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td><strong>B.Ibu</strong></td>
                </tr>
                <tr>
                    <td>1. Nama Ibu</td>
                    <td>:</td>
                    <td><?php echo $r['nama_ibu'] ?></td>
                </tr>
                <tr>
                    <td>2. Tempat,Tanggal Lahir</td>
                    <td>:</td>
                    <td><?php echo $r['tempat_lahir_ayah'] ?>,<?php echo $r['tgl_lahir_ibu'] ?></td>
                </tr>
                <tr>
                    <td>3. Pekerjaan</td>
                    <td>:</td>
                    <td><?php echo $r['pekerjaan_ibu'] ?></td>
                </tr>
                <tr>
                    <td>4. Pendidikan Terakhir</td>
                    <td>:</td>
                    <td><?php echo $r['pendidikan_ibu'] ?></td>
                </tr>
                <tr>
                    <td>5. Kewarganegaraan / Agama</td>
                    <td>:</td>
                    <td><?php echo $r['warga_ibu'] ?> / <?php echo $r['agama_ibu'] ?></td>
                </tr>
                <tr>
                    <td>6. No.HP/WA</td>
                    <td>:</td>
                    <td><?php echo $r['no_hp_ibu'] ?></td>
                </tr>
            </table>
                <table width="98%">
                    <tr><td><br></td></tr>
                </table>
            <table>
                <tr>
                    <td><strong>V.Nilai Rapot</strong></td>
                </tr>
            </table>
            <table border="1" align="center">
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
               <table width="98%">
                    <tr><td><br></td></tr>
                </table>
              <table>
                  <tr>
                    <td>Prestasi yang Pernah Diraih</td>
                    <td>:</td>
                    <td><?php echo $r['prestasi'] ?></td>
                </tr>
                <tr>
                    <td>Informasi SMK Wikrama Dari</td>
                    <td>:</td>
                    <td><?php echo $r['info'] ?></td>
                </tr>
              </table>
<?php } ?>
             <table width="98%">
                    <tr><td><br></td></tr>
                </table>
            <table>
            <tr>
                <td><strong>Berkas Yang Dibawa saat mengikuti test seleksi :</strong></td>
            </tr>
            <tr>
                <td> - Fotokopi Rapot SMP Kelas 7-9 Semester 1</td>
            </tr>
            <tr>
                <td> - Fotokopi Akte Kelahiran</td>
            </tr>
            <tr>
                <td> - Fotokopi Kartu keluarga</td>
            </tr>
            <tr>
                <td> - Pas Photo Berwarna (Berkemeja) Ukuran : 3 X 4 (6 Lembar)</td>
            </tr>
        </table>
                <table width="98%">
                    <tr><td><br></td></tr>
                </table>
                 <table width="98%">
                    <tr><td><br></td></tr>
                </table>
        <table>
            <tr>
                <td>.................. , .................</td>
            </tr>
             <table width="98%">
                    <tr><td><br></td></tr>
            </table>
            <tr>
                <td>.......................................</td>
            </tr>
             <table width="98%">
                    <tr><td></td></tr>
                </table>
            <tr>
                <td>Orang tua/ Wali Murid</td>
            </tr>
        </table>
            <br />
            
        </div>
    <center><p>&copy; <?php echo date('Y'); ?> SMK WIKRAMA BOGOR</p></center>
</body>
</html>

