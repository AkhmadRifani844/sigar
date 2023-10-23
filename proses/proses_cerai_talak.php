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

// pemohon
$pemohon=$_POST['pemohon'];
$nik_pemohon=$_POST['nik_pemohon'];
$tempat_lahir_pemohon=$_POST['tempat_lahir_pemohon'];
$tanggal_lahir_pemohon=$_POST['tanggal_lahir_pemohon'];
$agama_pemohon=$_POST['agama_pemohon'];
$status_pemohon=$_POST['status_pemohon'];
$umur_pemohon=$_POST['umur_pemohon'];
$pendidikan_pemohon=$_POST['pendidikan_pemohon'];
$pekerjaan_pemohon=$_POST['pekerjaan_pemohon'];
$alamat_pemohon=$_POST['alamat_pemohon'];

//termohon
$termohon=$_POST['termohon'];
$tempat_lahir_termohon=$_POST['tempat_lahir_termohon'];
$tanggal_lahir_termohon=$_POST['tanggal_lahir_termohon'];
$agama_termohon=$_POST['agama_termohon'];
$status_termohon=$_POST['status_termohon'];
$umur_termohon=$_POST['umur_termohon'];
$pendidikan_termohon=$_POST['pendidikan_termohon'];
$pekerjaan_termohon=$_POST['pekerjaan_termohon'];
$alamat_termohon=$_POST['alamat_termohon'];

//keterangan
$tanggal_nikah=$_POST['tanggal_nikah'];
$kua_kecamatan=$_POST['kua_kecamatan'];
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

$akibat_selisih	=$_POST['akibat_selisih'];
$mulai_pisah=$_POST['mulai_pisah'];
$lama_pisah=$_POST['lama_pisah'];

if(isset($_POST['simpan'])){
// cetak ke word

header("Content-type:application/doc");
header("Content-Disposition:attachment;filename=cerai_talak.doc");

 ?>

<!-- cetak ke pdf -->
<!--  <body onload="window.print()"> -->

<!-- Tampilan pada cetakan -->
	<center>
	<table>
		<tr>
			<td width="70"><font size="3">Hal  &nbsp; &nbsp;  : </font></td><td width="180"><?php echo $perihal;?></td><td width="270" align="right"><?php echo $tempat_tanggal_surat;?></td><td width="20"></td>
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
			<td colspan="7" width="640" align="left">Assalamu'alaikum wr.wb</td>
		</tr>
		<tr>
			<td colspan="7">Saya yang bertanda tangan di bawah ini :</td>
		</tr>
	</table>

<!-- perkenalan pemohon -->
	<table>
		<tr>
			<td align="top" rowspan="2" width="640" class="justify">&nbsp; &nbsp; &nbsp; <?php echo $pemohon;?>,lahir di <?php echo $tempat_lahir_pemohon;?> pada tanggal <?php echo $tanggal_lahir_pemohon;?> (umur <?php echo $umur_pemohon;?> tahun) NIK <?php echo $nik_pemohon	;?>, agama <?php echo $agama_pemohon;?>, pendidikan <?php echo $pendidikan_pemohon	;?>, pekerjaan <?php echo $pekerjaan_pemohon;?>, bertempat tinggal di <?php echo $alamat_pemohon;?>. Selanjutnya disebut sebagai <b>Pemohon</b>;</td>
		</tr>
	</table>
	<table>
		<tr>
			<td class="justify" width="640" height=""><font size="3">Dengan Hormat, Pemohon mengajukan permohonan cerai talak berlawanan dengan :</font></td>
		</tr>
	</table>

<!-- perkenalan termohon -->
	<table>
		<tr>
			<td align="top" rowspan="2" width="640" class="justify">&nbsp; &nbsp; &nbsp; <?php echo $termohon;?>, lahir di <?php echo $tempat_lahir_termohon;?> pada tanggal <?php echo $tanggal_lahir_termohon;?> (umur <?php echo $umur_termohon;?> tahun), agama <?php echo $agama_termohon;?>, pendidikan <?php echo $pendidikan_termohon;?>, pekerjaan <?php echo $pekerjaan_termohon;?>, bertempat tinggal di <?php echo $alamat_termohon;?>, Selanjutnya disebut sebagai <b>Termohon;</b></td>
		</tr>
	</table>

<!-- alasan pemohon -->
	<table>
		<tr>
			<td class="justify" width="640"><font size="3">Adapun alasan/dalil-dalil pemohon Penggugat sebagai berikut :</font></td>
		</tr>
	</table>
	<table>
		<tr>
			<td width="30" class="justify">1.</td>
			<td rowspan="2" width="600" class="justify">Bahwa Pemohon dengan Termohon adalah suami istri yang melasungkan pernikahan pada tanggal <?php echo $tanggal_nikah;?>, dan di catat oleh Pegawai Pencatat Nikah Kantor Urusan Agama Kecamatan <?php echo $kua_kecamatan;?>, Kutipan Akta Nikah Nomor: <?php echo $nomor_akta_nikah;?> pada tanggal <?php echo $tanggal_surat_nikah;?> pada waktu akad nikah Pemohon berstatus <?php echo $status_pemohon;?> dan Termohon berstatus <?php echo $status_termohon;?>;</td>
		</tr>
		<tr>
			
		</tr>
		<tr>
			<td width="30" class="justify">2.</td>
			<td rowspan="2" width="600" class="justify">Bahwa setelah menikah, Pemohon dengan Termohon bertempat tinggal di jalan <?php echo $tinggal_setelah_nikah;?>;</td>
		</tr>
		<tr>
			 
		</tr>
		<tr>
			<td width="" class="justify">3.</td>
			<td rowspan="2" width="600" class="justify">Bahwa selama pernikahan tersebut Pemohon dengan Termohon
				<?php echo $telah_belum_anak;?><?php echo $jumlah_anak;?>;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;
			</td>
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
		<tr>
			<td height=""></td>
		</tr>
		<tr>
			<td width="30" class="justify">4.</td><td rowspan="2" width="600" class="justify">Bahwa pada mulanya rumah tangga Penggugat dan Tergugat dalam keadaan rukun dan Harmonis namun sejak bulan <?php echo $mulai_selisih;?> Ketentraman rumah tangga Pemohon dengan Termohon telah goyah disebabkan :</td>
		</tr>
		<tr>
			<td height=""></td>
		</tr>
		<tr>
			<td width="30"></td><td height="30" class="lk" align="justify">
				<?php
					if (isset($_POST['sebab'])>0) {
						$datasebab = $_POST['sebab'];
					foreach ($datasebab as $s => $sebab) {
						echo "&nbsp; &nbsp; &nbsp;$sebab <br>";
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
			<td width="30" class="justify">5.</td><td rowspan="2" width="600" class="justify">Bahwa dikarenakan Pemohon dan Termohon terus bertengkar hingga akhirnya pada <?php echo $mulai_pisah;?>, <?php echo $akibat_selisih;?> selama <?php echo $lama_pisah;?> dan selama itu pula sudah tidak ada hubungan baik lahir maupun batin antara Pemohon dengan Termohon;</td>
		</tr>
		<tr>
			<td height=""></td>
		</tr>
		<tr>
			<td width="30" class="justify">6.</td><td rowspan="2" width="600" class="justify">Bahwa sejak Pemohon dengan Termohon berpisah, selama itu tdiak ada usaha damai dari pihak keluarga Pemohon maupun dari pihak keluarga Termohon;</td>
		</tr>
		<tr>
			<td height=""></td>
		</tr>
		<tr>
			<td></td>
		</tr>
	</table>
	<table>
		<tr>
			<td width="640" class="justify"> &nbsp; &nbsp; &nbsp; &nbsp;Berdasarkan alasan-alasan tersebut, Pemohon memohon agar ketua Pengadilan Agama Banjarmasin c.q Majelis Hakim yang memeriksa dan mengadili perkara ini, menjatuhkan putusan yang amarnya berbunyi :  &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;<br><br>Primer :</td>
		</tr>
	</table>
	<table>	
		<tr>
			<td width="635">1. Mengabulkan Permohonan Pemohon <br> 2. Memberi izin Pemohon (<?php echo $pemohon;?>) untuk menjatuhkan talak satu raj'i terhadap Termohon (<?php echo $termohon;?>) di depan sidang pengadilan Agama <?php echo $pengadilan_agama;?><br>3. Membebankan biaya perkara menurut hukum;</td>
			</tr>
	</table>
	<table>
		<tr>
			<td width="640" height="">Subsider</td>
		</tr>
		<tr>
			<td height="">Mohon Putusan yang seadil-adilnya;</td>
		</tr>
		<tr>
			<td></td>
		</tr>
	</table>
	<table>
		<tr>
			<td width="400"></td><td width="200">Wasalamu'alaikum wr.wb <br><div>Hormat Pemohon</div></td>
		</tr>
		<!-- <tr>
			<td></td><td>Hormat Pemohon,</td>
		</tr> -->
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
	"INSERT INTO cerai_talak
		VALUES ('$pengadilan_agama','$perihal','$tempat_tanggal_surat','$pemohon','$nik_pemohon','$tempat_lahir_pemohon','$tanggal_lahir_pemohon','$agama_pemohon','$status_pemohon','$umur_pemohon','$pendidikan_pemohon','$pekerjaan_pemohon','$alamat_pemohon','$termohon','$tempat_lahir_termohon','$tanggal_lahir_termohon','$agama_termohon','$status_termohon','$umur_termohon','$pendidikan_termohon','$pekerjaan_termohon','$alamat_termohon','$tanggal_nikah','$kua_kecamatan','$nomor_akta_nikah','$tanggal_surat_nikah','$tinggal_setelah_nikah','$telah_belum_anak','$nama_anak','$nama_anak2','$nama_anak3','$nama_anak4','$nama_anak5','$jumlah_anak','$sebab','$mulai_selisih','$akibat_selisih','$mulai_pisah','$lama_pisah')";
	$query = mysqli_query($db, $sql);
	}
 ?>
