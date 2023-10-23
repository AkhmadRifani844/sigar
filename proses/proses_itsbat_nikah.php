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
$tempat_tanggal=$_POST['tempat_tanggal'];
$pemohon_I=$_POST['pemohon_I'];
$nik_pemohon_I=$_POST['nik_pemohon_I'];
$agama_pemohon_I=$_POST['agama_pemohon_I'];
$umur_pemohon_I=$_POST['umur_pemohon_I'];
$pendidikan_pemohon_I=$_POST['pendidikan_pemohon_I'];
$pekerjaan_pemohon_I=$_POST['pekerjaan_pemohon_I'];
$alamat_pemohon_I=$_POST['alamat_pemohon_I'];
$pemohon_II=$_POST['pemohon_II'];
$nik_pemohon_II=$_POST['nik_pemohon_II'];
$agama_pemohon_II=$_POST['agama_pemohon_II'];
$umur_pemohon_II=$_POST['umur_pemohon_II'];
$pendidikan_pemohon_II=$_POST['pendidikan_pemohon_II'];
$pekerjaan_termohon_II=$_POST['pekerjaan_pemohon_II'];
$alamat_termohon_II=$_POST['alamat_pemohon_II'];
$tanggal_nikah=$_POST['tanggal_nikah'];
$tempat_nikah_dilangsungkan=$_POST['tempat_nikah_dilangsungkan'];
$wali_nikah=$_POST['wali_nikah'];
$hubungan_dengan_wali=$_POST['hubungan_dengan_wali'];
$alasan_wali=$_POST['alasan_wali'];
$pembantu_nikah=$_POST['pembantu_nikah'];
$nama_saksi_nikah=$_POST['nama_saksi_nikah'];
$mahar=$_POST['mahar'];
$alasan_tidak_dicatat=$_POST['alasan_tidak_dicatat'];
$telah_belum_anak=$_POST['telah_belum_anak'];
$nama_anak=$_POST['nama_anak'];
$jumlah_anak=$_POST['jumlah_anak'];
$mulai_selisih=$_POST['mulai_selisih'];
$bentuk_pertengkaran=$_POST['bentuk_pertengkaran'];
// $penyebab_perselisihan=$_POST['penyebab_perselisihan'];

$akibat_selisih	=$_POST['akibat_selisih'];
$mulai_pisah=$_POST['mulai_pisah'];
$lama_pisah=$_POST['lama_pisah'];

// $sebab1=$_POST['sebab1'];
// $sebab2=$_POST['sebab2'];
// $sebab3=$_POST['sebab3'];
// $sebab4=$_POST['sebab4'];
// $sebab5=$_POST['sebab5'];
// $sebab6=$_POST['sebab6'];

if(isset($_POST['simpan'])){
	$sql=
	"INSERT INTO itsbat_nikah
		VALUES ('$pengadilan_agama','$perihal','$tempat_tanggal','$pemohon_I','$nik_pemohon_I','$agama_pemohon_I','$umur_pemohon_I','$pendidikan_pemohon_I','$pekerjaan_pemohon_I','$alamat_pemohon_I','$pemohon_II','$nik_pemohon_II','$agama_pemohon_II','$umur_','$pendidikan_termohon','$pekerjaan_termohon','$alamat_termohon','$tanggal_nikah','$kua_kecamatan','$nomor_akta_nikah','$tanggal_surat_nikah','$tinggal_setelah_nikah','$telah_belum_anak','$nama_anak','$jumlah_anak','$mulai_selisih','$bentuk_pertengkaran','$akibat_selisih','$mulai_pisah','$lama_pisah')";
	$query = mysqli_query($db, $sql);
	}

// cetak ke word
header("Content-type:application/doc");
header("Content-Disposition:attachment;filename=cerai_talak.doc");

 ?>

<!-- cetak ke pdf -->
<!--  <body onload="window.print()"> -->
	<center>
	<table>
		<tr>
			<td width="70"><font size="3">Perihal : </font></td><td width="180"><?php echo $perihal;?></td><td width="270" align="right"><?php echo $tempat_tanggal_surat;?></td><td width="20"></td>
		</tr>
	</table>
	<br><br>
	<table>
		<tr>
			<td>Kepada</td><td width="260"></td><td width="50"></td>
		</tr>
		<tr>
			<td>Yth. Ketua Pengadilan agama </td><td><?php echo $pengadilan_agama;?></td><td></td>
		</tr>
	</table>
	<table>
		<tr>
			<td width="30">di</td><td width="300"></td><td width="100"></td>
		</tr>
	</table>
	<table>
		<tr>
			<td width="40"></td><td width="400">PENGADILAN AGAMA</td><td width="200"></td>
		</tr>
	</table>
	<br><br><br>
	<table>
		<tr>
			<td colspan="7" width="640" align="left">Assalamu'alaikum wr.wb</td>
		</tr>
		<tr>
			<td colspan="7">Saya yang bertanda tangan di bawah ini :</td>
		</tr>
	</table>
	<table>
		<tr>
			<td align="top" rowspan="2" width="640" class="justify" height="60">&nbsp; &nbsp; &nbsp; <?php echo $pemohon;?>,  Umur <?php echo $umur_pemohon	;?> NIK <?php echo $nik_pemohon	;?>, Agama <?php echo $agama_pemohon;?>, Pendidikan <?php echo $pendidikan_pemohon	;?>, Pekerjaan <?php echo $pekerjaan_pemohon;?>, Alamat <?php echo $alamat_pemohon;?>, Sebagai Pemohon;</td>
		</tr>
		
	</table>
	<table>
		<tr>
			<td class="justify" width="640" height="25"><font size="3">Dengan Hormat, Pemohon mengajukan permohonan cerai talak berlawanan dengan :</font></td>
		</tr>
	</table>
	<table>
		<tr>
			<td align="top" rowspan="2" width="640" class="justify">&nbsp; &nbsp; &nbsp; <?php echo $termohon;?> Umur <?php echo $umur_termohon	;?> NIK <?php echo $nik_termohon;?>, Agama <?php echo $agama_termohon;?>, Pendidikan <?php echo $pendidikan_termohon;?>, Pekerjaan <?php echo $pekerjaan_termohon;?>, Alamat <?php echo $alamat_termohon;?>, Sebagai Termohon;</td>
		</tr>
	</table>
	<table>
		<tr>
			<td class="justify" width="640"><font size="3">Adapun alasan/dalil-dalil pemohon Penggugat sebagai berikut :</font></td>
		</tr>
	</table>
	<table>
		<tr>
			<td width="30" class="justify">1.</td><td rowspan="2" width="600" class="justify">Bahwa pada tanggal <?php echo $tanggal_nikah;?>, Pemohon dengan Termohon melangsungkan pernikahan yang dicatat oleh Pegawai Pencatat Nikah Kantor Urusan Agama Kecamatan <?php echo $kua_kecamatan;?> (Kutipan Akta Nikah Nomor <?php echo $nomor_akta_nikah;?> <?php echo $tanggal_surat_nikah;?>);</td>
		</tr>
		<tr>
			<td height=""></td>
		</tr>
		<tr>
			<td width="30" class="justify">2.</td><td rowspan="2" width="600" class="justify">Bahwa setelah pernikahan tersebut Pemohon dengan Termohon bertempat tinggal di <?php echo $tinggal_setelah_nikah;?></td>
		</tr>
		<tr>
			<td height=""></td>
		</tr>
		<tr>
			<td width="" class="justify">3.</td><td rowspan="2" width="600" class="justify">Bahwa selama pernikahan tersebut Pemohon denggan Termohon telah hidup rukun sebagaimana layaknya suami istri 
				<?php echo $telah_belum_anak;?><?php echo $jumlah_anak;?><?php echo $nama_anak;?></td>
		</tr>
		<tr>
			<td height=""></td>
		</tr>
		<tr>
			<td width="30" class="justify">4.</td><td rowspan="2" width="600" class="justify">Bahwa sejak <?php echo $mulai_selisih;?> antara Pemohon dan Termohon mulai terjadi perselisihan dan pertengkaran yang terus-menerus disebabkan :</td>
		</tr>
		<tr>
			<td height=""></td>
		</tr>
		<!-- <tr>
			<td></td><td height="30"></td>
		</tr> -->
		<tr>
			<td width="30" class="justify"></td><td height="30">
				<?php
					if (isset($_POST['sebab'])>0) {
						$datasebab = $_POST['sebab'];
					foreach ($datasebab as $s => $value) {
						echo "$value <br>";
					}
					}else{
					echo "tidak ada sebab";
					}
				 ?>
			</td>
		</tr>
		<tr>
			<td width="30" class="justify">5.</td><td rowspan="2" width="600" class="justify">Bahwa perselisihan Pemohon dengan Termohon adalah <?php echo $bentuk_pertengkaran;?> (pertengkaran mulut/kekerasan mulut/kekerasan fisik/saling mendiamkan) yang sering dan berkepanjangan;</td>
		</tr>
		<tr>
			<td height=""></td>
		</tr>
		<tr>
			<td width="30" class="justify">6.</td><td rowspan="2" width="600" class="justify">Bahwa akibat perselisihan dan pertengkaran tersebut lebih kurang pada <?php echo $mulai_pisah;?>, <?php echo $akibat_selisih;?> selama <?php echo $lama_pisah;?> hingga sekarang;</td>
		</tr>
		<tr>
			<td height=""></td>
		</tr>
		<tr>
			<td width="30" class="justify">7.</td><td rowspan="2" width="600" class="justify">Bahwa Pemohon meresa keutuhan rumah tangga Pemohon dan Termohon tidak mungkin lagi dipertahankan akibat hal tersebut di atas dan tidak ada harapan untuk hidup rukun dalam rumah tangga. kondisi ini sejalan dengan alasan perceraian sebagaimana yang terdapat pada PP No 9 Tahun 1975 pasal 19 huruf (f) dan KHI pasal 116 huruf (f)</td>
		</tr>
		<tr>
			<td height=""></td>
		</tr>
		<tr>
			<td width="30" class="justify">8.</td><td rowspan="2" width="600" class="justify">Bahwa Pemohon sanggup membayar seluruh biaya yang timbul akibat perkara ini;</td>
		</tr>
		<tr>
			<td></td>
		</tr>
	</table>
	<table>
		<tr>
			<td width="640"> &nbsp; &nbsp; &nbsp; &nbsp;Berdasarkan alasan/dalil-dalil di atas, Pemohon mohon agar ketua Pengadilan Agama Banjarmasin. Majelis Hakim yang memeriksa dan mengadili perkara ini, menjatuhkan putusan yang amarnya : <br><br>Primer :<br></td>
		</tr>
	</table>
	<table>
		
		<tr>
			<td width="635">1. Mengabulkan Permohonan Pemohon <br> 2. Menetapkan memberi izin kepada Pemohon (<?php echo $pemohon;?>) untuk menjatuhkan talak satu raji terhadap termohon (<?php echo $termohon;?>) di depan sidang pengadilan Agama <?php echo $pengadilan_agama;?><br>3. Membebankan biaya perkara menurut hukum;</td>
			</tr>
	</table>
	<table>
		<tr>
			<td width="640" height="30">Subsider</td>
		</tr>
		<tr>
			<td height="30">Mohon Putusan yand seadil-adilnya;</td>
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


<?php// header("location:../form/cerai_talak.php?") ?>