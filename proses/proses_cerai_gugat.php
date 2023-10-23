<style>
	.justify{
		text-align: justify;
		vertical-align: top;
	}
</style>
<?php 
 
include '../koneksi.php';
$pengadilan_agama=$_POST['pengadilan_agama'];
$perihal=$_POST['perihal'];
$tempat_tanggal_surat=$_POST['tempat_tanggal_surat'];

//identitas pemohon/penggugat
$pemohon=$_POST['pemohon'];
$nik_pemohon=$_POST['nik_pemohon'];
$tempat_lahir_penggugat=$_POST['tempat_lahir_penggugat'];
$tanggal_lahir_penggugat=$_POST['tanggal_lahir_penggugat'];
$agama_pemohon=$_POST['agama_pemohon'];
$status_penggugat=$_POST['status_penggugat']; //penggugat = pemohon
$umur_pemohon=$_POST['umur_pemohon'];
$pendidikan_pemohon=$_POST['pendidikan_pemohon'];
$pekerjaan_pemohon=$_POST['pekerjaan_pemohon'];
$alamat_pemohon=$_POST['alamat_pemohon'];

//identitas termohon/tergugat
$termohon=$_POST['termohon'];
$tempat_lahir_tergugat=$_POST['tempat_lahir_tergugat'];
$tanggal_lahir_tergugat=$_POST['tanggal_lahir_tergugat'];
$agama_termohon=$_POST['agama_termohon'];
$status_tergugat=$_POST['status_tergugat'];
$umur_termohon=$_POST['umur_termohon'];
$pendidikan_termohon=$_POST['pendidikan_termohon'];
$pekerjaan_termohon=$_POST['pekerjaan_termohon'];
$alamat_termohon=$_POST['alamat_termohon'];


$tanggal_nikah=$_POST['tanggal_nikah'];
$kua_kecamatan=$_POST['kua_kecamatan'];
$talik_talak=$_POST['talik_talak'];
$nomor_akta_nikah=$_POST['nomor_akta_nikah'];
$tanggal_surat_nikah=$_POST['tanggal_surat_nikah'];
$tinggal_setelah_nikah=$_POST['tinggal_setelah_nikah'];
$telah_belum_anak=$_POST['telah_belum_anak'];
$nama_anak=$_POST['nama_anak'];
$nama_anak2=$_POST['nama_anak2'];
$nama_anak3=$_POST['nama_anak3'];
$nama_anak4=$_POST['nama_anak4'];
$nama_anak5=$_POST['nama_anak5'];
$sebab=$_POST['sebab'];
$jumlah_anak=$_POST['jumlah_anak'];
$mulai_selisih=$_POST['mulai_selisih'];
//$bentuk_pertengkaran=$_POST['bentuk_pertengkaran'];
// $penyebab_perselisihan=$_POST['penyebab_perselisihan'];

$akibat_selisih	=$_POST['akibat_selisih'];
$mulai_pisah=$_POST['mulai_pisah'];
$lama_pisah=$_POST['lama_pisah'];

if(isset($_POST['simpan'])){


// cetak ke word
header("Content-type:application/doc");
header("Content-Disposition:attachment;filename=cerai_gugat.doc");
 ?>

<!-- cetak ke pdf -->
<!--  <body onload="window.print()"> -->
	<center>
	<table>
		<tr>
			<td width="70"><font size="3">Hal &nbsp; &nbsp; : </font></td><td width="180"><?php echo $perihal;?></td><td width="270" align="right"><?php echo $tempat_tanggal_surat;?></td><td width="20"></td>
		</tr>
	</table>
	<br>
	<table>
		<tr>
			<td width="260"></td><td> &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; Kepada</td>
		</tr>
		<tr>
			<td></td><td>Yth. Ketua Pengadilan Agama </td>
		</tr>
		<tr>
			<td></td><td align="center"><?php echo $pengadilan_agama;?></td>
		</tr>
	</table>
	<table>
		<tr>
			<td colspan="7" width="640" align="left"> &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; Assalamu'alaikum wr.wb</td>
		</tr>
		<tr>
			<td colspan="7"> &nbsp; &nbsp; &nbsp;Saya yang bertanda tangan di bawah ini :</td>
		</tr>
	</table>
	<table>
		<tr>
			<td align="top" rowspan="2" width="640" class="justify" height="60">&nbsp; &nbsp; &nbsp;<b> <?php echo $pemohon;?></b>, NIK <?php echo $nik_pemohon;?>, lahir di <?php echo $tempat_lahir_penggugat;?>, pada <?php echo $tanggal_lahir_penggugat;?> (umur <?php echo $umur_pemohon;?> tahun), agama <?php echo $agama_pemohon;?>, pendidikan <?php echo $pendidikan_pemohon	;?>, pekerjaan <?php echo $pekerjaan_pemohon;?>, bertempat tinggal di <?php echo $alamat_pemohon;?>. Selanjutnya disebut sebagai <b>Penggugat;</b></td>
		</tr>
	</table>
	<table>
		<tr>
			<td class="justify" width="640" height="25"><font size="3">Dengan Hormat, Penggugat mengajukan gugatan perceraian berlawanan dengan:</font></td>
		</tr>
	</table>
	<table>
		<tr>
			<td align="top" rowspan="2" width="640" class="justify">&nbsp; &nbsp; &nbsp; <b><?php echo $termohon;?></b>, lahir di <?php echo $tempat_lahir_tergugat;?>, pada <?php echo $tanggal_lahir_tergugat;?> (umur <?php echo $umur_termohon;?> tahun), agama <?php echo $agama_termohon;?>, pendidikan <?php echo $pendidikan_termohon;?>, pekerjaan <?php echo $pekerjaan_termohon;?>, bertempat tinggal di <?php echo $alamat_termohon;?>. Selanjutnya disebut sebagai <b>Tergugat;</b></td>
		</tr>
	</table>
	<table>
		<tr>
			<td class="justify" width="640"><font size="3">Adapun alasan-alasan gugatan Penggugat sebagai berikut :</font></td>
		</tr>
	</table>
	<table>
		<tr>
			<td width="30" class="justify">1.</td><td rowspan="2" width="600" class="justify">Bahwa Penggugat dengan Tergugat adalah suami istri yang melasungkan pernikahan pada tanggal <?php echo $tanggal_nikah;?>, dan di catat oleh Pegawai Pencatat Nikah Kantor Urusan Agama Kecamatan <?php echo $kua_kecamatan;?>, Kutipan Akta Nikah Nomor <?php echo $nomor_akta_nikah;?> tanggal <?php echo $tanggal_surat_nikah;?>, pada waktu akad nikah Penggugat berstatus <?php echo $status_penggugat;?> dan Tergugat berstatus <?php echo $status_tergugat;?> sesaat setelah akad nikah Tergugat <?php echo $talik_talak;?> taklik talak terhadap Penggugat</td>
		</tr>
		<tr>
			<td height=""></td>
		</tr>
		<tr>
			<td width="30" class="justify">2.</td><td rowspan="2" width="600" class="justify">Bahwa setelah menikah, Penggugat dan Tergugat tinggal di <?php echo $tinggal_setelah_nikah;?> sampai berpisah;</td>
		</tr>
		<tr>
			<td height=""></td>
		</tr>
		<tr>
			<td width="" class="justify">3.</td><td rowspan="2" width="600" class="justify">Bahwa selama pernikahan tersebut Penggugat dengan Tergugat
				<?php echo $telah_belum_anak;?><?php echo $jumlah_anak;?>;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;</td>
		</tr>
	</table>
			<table>
		<tr>
			<td width="40"></td>
			<td width="630">
				<?php if(!empty($nama_anak)){
					echo "3.1. ".$nama_anak.";";
				} ?>
				<?php if(!empty($nama_anak2)){
					echo "<br>3.2. ".$nama_anak2.";";
				} ?>
				<?php if(!empty($nama_anak3)){
					echo "<br>3.3. ".$nama_anak3.";";
				} ?>
				<?php if(!empty($nama_anak4)){
					echo "<br>3.4. ".$nama_anak4.";";
				} ?>
				<?php if(!empty($nama_anak5)){
					echo "<br>3.5. ".$nama_anak5.";";
				} ?>
			</td>
		</tr>
		</table>
		<table>
		</tr>
		<tr>
			<td height=""></td>
		</tr>
		<tr>
			<td width="30" class="justify">4.</td><td rowspan="2" width="600" class="justify">Bahwa pada mulanya rumah tangga Penggugat dan Tergugat dalam keadaan rukun dan Harmonis namun sejak bulan <?php echo $mulai_selisih;?>, ketentraman rumah tangga Penggugat dengan Tergugat goyah yang disebabkan:</td>
		</tr>
		<tr>
			<td height=""></td>
		</tr>
		<!-- <tr>
			<td></td><td height="30"></td>
		</tr> -->
		<tr>
			<td width="30" class="justify"></td><td height="30" align="justify">
				<?php
					if (isset($_POST['sebab'])>0) {
						$datasebab = $_POST['sebab'];
					foreach ($datasebab as $s => $sebab) {
						echo "&nbsp; &nbsp; &nbsp; $sebab <br>";
					}
					}else{
					echo "<b>sebab harus dipilih !<b>";
					}
				 ?>
			</td>
		</tr>
		<tr>
			<td height=""></td>
		</tr>
		<tr>
			<td width="30" class="justify">5.</td><td rowspan="2" width="600" class="justify">Bahwa puncak perselisihan dan pertengkaran antara Penggugat dengan Tergugat terjadi pada <?php echo $mulai_pisah;?>, Penggugat <?php echo $akibat_selisih;?> karena sudah tidak tahan dengan sikap Tergugat, sehingga antara Penggugat dan Tergugat pisah tempat tinggal sampai sekarang sudah berjalan kurang lebih selama <?php echo $lama_pisah;?>, dan selama itu pula tidak ada hubungan baik lahir maupun batin antara Penggugat dengan Tergugat;</td>
		</tr>
		<tr>
			<td height=""></td>
		</tr>
		<tr>
			<td width="30" class="justify">6.</td><td rowspan="2" width="600" class="justify">Bahwa sejak Penggugat dengan Tergugat berpisah, selama itu pula tidak ada usaha damai dari pihak keluarga Penggugat maupun dari pihak Tergugat</td>
		</tr>
		<tr>
			<td height=""></td>
		</tr>
		<!-- <tr>
			<td width="30" class="justify">7.</td><td rowspan="2" width="600" class="justify">Bahwa Pemohon sanggup membayar seluruh biaya yang timbul akibat perkara ini;</td>
		</tr> -->
		<tr>
			<td></td>
		</tr>
	</table>

	<table>
		<tr>
			<td width="640"> &nbsp; &nbsp; &nbsp; &nbsp;Berdasarkan alasan-alasan tersebut, Penggugat memohon agar ketua Pengadilan Agama Banjarmasin c.q Majelis Hakim yang memeriksa dan mengadili perkara ini, selanjutnya menjatuhkan putusan yang amarnya berbunyi : <br>
			<br>Primer :<br></td>
		</tr>
	</table>
	<table>
		
		<tr>
			<td width="635">
				1. Mengabulkan Gugatan Penggugat; <br> 
				2. Menjatuhkan talak satu sama bain shughra Tergugat (<?php echo $pemohon;?>) terhadap Penggugat (<?php echo $termohon;?>) di depan sidang pengadilan Agama <?php echo $pengadilan_agama;?><br>
				3. Membebankan biaya perkara menurut hukum;</td>
			</tr>
	</table>
	<table>
		<tr>
			<td width="640" height="">Subsider :</td>
		</tr>
		<tr>
			<td height="30">Mohon Putusan yang seadil-adilnya;</td>
		</tr>
		<tr>
			<td height="30">Demikian atas terkabulnya pemohonan ini, Pemohon menyampaikan terima kasih.</td>
		</tr>
	</table>
	<table>
		<tr>
			<td width="400"></td><td width="200">Wasalamu'alaikum wr.wb</td>
		</tr>
		<tr>
			<td></td><td>Hormat Pemohon,</td>
		</tr>
		<tr>
			<td></td><td height="55"></td>
		</tr>
		<tr>
			<td></td><td><?php echo $pemohon;?></td>
		</tr>
	</table>
</center>


<?php

	$sql=
	"INSERT INTO cerai_gugat
		VALUES ('$pengadilan_agama','$perihal','$tempat_tanggal_surat','$pemohon','$nik_pemohon','$tempat_lahir_penggugat','$tanggal_lahir_penggugat','$agama_pemohon','$status_penggugat','$umur_pemohon','$pendidikan_pemohon','$pekerjaan_pemohon','$alamat_pemohon','$termohon','$tempat_lahir_tergugat','$tanggal_lahir_tergugat','$agama_termohon','$status_tergugat','$umur_termohon','$pendidikan_termohon','$pekerjaan_termohon','$alamat_termohon','$tanggal_nikah','$kua_kecamatan','$talik_talak','$nomor_akta_nikah','$tanggal_surat_nikah','$tinggal_setelah_nikah','$telah_belum_anak','$nama_anak','$nama_anak2','$nama_anak3','$nama_anak4','$nama_anak5','$jumlah_anak','$sebab','$mulai_selisih','$akibat_selisih','$mulai_pisah','$lama_pisah')";
	$query = mysqli_query($db, $sql);
	}

?>