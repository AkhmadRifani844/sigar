<!DOCTYPE html>
<html>
<head>
	<title>Cerai_Gugat</title>
	<link rel="stylesheet" type="text/css" href="../boot/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../boot/css/bootstrap.css">
	<script type="text/javascript" src="../boot/js/jquery.js"></script>
	<script type="text/javascript" src="../boot/js/bootstrap.js"></script>

	<style>
		
		.lk{ /*lk = lebar kolom pada bagian input*/
			width: 	600px; 
		}
	</style>
</head>
<body>
	<!-- header -->
	<hr><h1 align="center">Form Cerai Gugat</h1>
	<h5 align="center">(Isteri yang mengajukan gugatan cerai)</h5>
	<hr>

	
	<div class="container">

		<!-- form -->
		<form method="POST"  action="../proses/proses_cerai_gugat.php">
			<table>
				<tr>
					<td>Pengadilan Agama </td><td>:</td><td><input value="Banjarmasin Kelas IA" class="lk" type="text" name="pengadilan_agama"></td>
				</tr>
				<tr>
					<td>Perihal</td><td>:</td><td><input class="lk" type="text" name="perihal" value="Cerai Gugat"></td>
				</tr>
				<tr>
					<td>Tempat, Tanggal</td><td>:</td><td><input class="lk" type="text" name="tempat_tanggal_surat" placeholder="tempat dan tanggal hari ini" required></td>
				</tr>
				<tr>
					<td>Penggugat</td><td>:</td><td><input class="lk" type="text" name="pemohon" placeholder="nama penggugat" required></td>
				</tr>
				<tr>
					<td>NIK Penggugat </td><td>:</td><td><input class="lk" type="text" name="nik_pemohon" required></td>
				</tr>
				<tr>
					<td>Tempat Lahir Penggugat</td><td>:</td><td><input class="lk" type="text" name="tempat_lahir_penggugat" required></td>
				</tr>
				<tr>
					<td>Tanggal lahir Penggugat</td><td>:</td><td><input class="lk" type="date" name="tanggal_lahir_penggugat" placeholder="Contoh : 31 Juli 1990" required></td>
				</tr>
				<tr>
					<td>Agama Penggugat</td><td>:</td><td><input class="lk" type="text" name="agama_pemohon" required></td>
				</tr>
				<tr>
					<td>Status Penggugat sebelum menikah</td><td>:</td><td><input class="lk" type="text" name="status_penggugat" placeholder="perawan/janda"></td>
				</tr>
				<tr>
					<td>Umur Penggugat</td><td>:</td><td><input class="lk" type="number" name="umur_pemohon" placeholder="masukan angka saja" required></td>
				</tr>
				<tr>
					<td>Pendidikan Penggugat</td><td>:</td><td><input class="lk" type="text" name="pendidikan_pemohon" required></td>
				</tr>
				<tr>
					<td>Pekerjaan Penggugat </td><td>:</td><td><input class="lk" type="text" name="pekerjaan_pemohon"></td>
				</tr>
				<tr>
					<td>Alamat Penggugat </td><td>:</td><td><textarea class="lk" type="text" name="alamat_pemohon" required></textarea></td>
				</tr>
				<tr>
					<td>Tergugat </td><td>:</td><td><input class="lk" type="text" name="termohon" placeholder="nama tergugat" required></td>
				</tr>
				<tr>
					<td>Tempat Lahir Tergugat</td><td>:</td><td><input class="lk" type="text" name="tempat_lahir_tergugat" required></td>
				</tr>
				<tr>
					<td>Tanggal lahir Tergugat</td><td>:</td><td><input class="lk" type="date" name="tanggal_lahir_tergugat" placeholder="Contoh : 31 Juli 1990"></td>
				</tr>
				<tr>
					<td>Agama Tergugat </td><td>:</td><td><input class="lk" type="text" name="agama_termohon" required></td>
				</tr>
				<tr>
					<td>Status Tergugat sebelum menikah</td><td>:</td><td><input class="lk" type="text" name="status_tergugat" placeholder="jejaka/duda"></td>
				</tr>
				<tr>
					<td>Umur Tergugat</td><td>:</td><td><input class="lk" type="number" name="umur_termohon" placeholder="masukan angka saja" required></td>
				</tr>
				<tr>
					<td>Pendidikan Tergugat </td><td>:</td><td><input class="lk" type="text" name="pendidikan_termohon"></td>
				</tr>
				<tr>
					<td>Perkerjaan Tergugat</td><td>:</td><td><input class="lk" type="text" name="pekerjaan_termohon"></td>
				</tr>
				<tr>
					<td>Alamat Tergugat</td><td>:</td><td><textarea class="lk" type="text" name="alamat_termohon"></textarea></td>
				</tr>
				<tr>
					<td>Tanggal Nikah</td><td>:</td><td><input class="lk" type="text" name="tanggal_nikah" placeholder="Contoh : 27 september 2010" required></td>
				</tr>
				<tr>
					<td>KUA Kecamatan</td><td>:</td><td><input class="lk" type="text" name="kua_kecamatan" required></td>
				</tr>
				<tr>
					<td>Taklik Talak</td><td>:</td><td><input class="lk" type="text" name="talik_talak" placeholder="mengucapkan/tidak mengucapkan" required></td>
				</tr>
				<tr>
					<td>Nomor Akta Nikah </td><td>:</td><td><input class="lk" type="text" name="nomor_akta_nikah" required></td>
				</tr>
				<tr>
					<td>Tanggal Surat Nikah </td><td>:</td><td><input class="lk" type="text" name="tanggal_surat_nikah" placeholder="Contoh : 1 Oktober 2010"></td>
				</tr>
				<tr>
					<td>Tinggal Setalah Nikah</td><td>:</td><td><input class="lk" type="text" name="tinggal_setelah_nikah"></td>
				</tr>
			</table><br>
			<!-- radio button -->
			<table id="tampilan">	
				<tr>
					<td colspan="3">Sudah/Belum punya Anak</td> 
				</tr>
				<tr>
					<td>
						<input type="radio" name="telah_belum_anak" value="yang telah dikaruniai anak berjumlah " class="detail"> sudah &nbsp;
						<input type="radio" name="telah_belum_anak" value="yang belum dikaruniai keturunan" class="detail" checked> belum
					</td>
				</tr>
				<td colspan="2"><div id="form-input">
					Jumlah Anak : <input type="text" name="jumlah_anak" placeholder="3 anak"><br>
					Nama dan tempat tanggal lahir anak :<br> <input class="lk" type="text" name="nama_anak" placeholder="contoh : contoh : Aditya bin safianor lahir di Banjarmasin pada tanggal 23 Juni 2012"><br>
					<br>
					<!-- pilihan ke 2 -->
					Masih ada lagi? <br>
					<input type="radio" name="tanya2" value="2" class="detail2"> ada lagi &nbsp; 
					<input type="radio" name="tanya2" value="cukup" class="detail2"> cukup <br>
				</td>
				<tr>
					<td>	
						<div id="form-input2">
							Nama dan tempat tanggal lahir anak ke 2<br> <input class="lk" type="text" name="nama_anak2"  placeholder="contoh : Azkia binti safianor lahir di Banjarmasin pada tanggal 23 Juni 2012"><br><br>

							<!-- pilihan ke 3 -->
							Masih ada lagi? <br>
							<input type="radio" name="tanya3" value="3" class="detail3"> ada lagi &nbsp; 
							<input type="radio" name="tanya3" value="cukup" class="detail3"> cukup

							<tr>	
								<td>
									<div id="form-input3">
										Nama dan tempat tanggal lahir anak ke 3<br> <input class="lk" type="text" name="nama_anak3"placeholder=""><br><br>

										<!-- pilihan ke 4 -->
										Masih ada lagi? <br>
										<input type="radio" name="tanya4" value="4" class="detail4"> ada lagi &nbsp; 
										<input type="radio" name="tanya4" value="cukup" class="detail4"> cukup
									</td>
									<tr>	
										<td>
											<div id="form-input4">	
												Nama dan tempat tanggal lahir anak ke 4<br> <input class="lk" type="text" name="nama_anak4" placeholder=""><br><br>

												<!-- pilihan ke 5 -->
												Masih ada lagi? <br>
												<input type="radio" name="tanya5" value="5" class="detail5"> ada lagi &nbsp; 
												<input type="radio" name="tanya5" value="cukup" class="detail5"> cukup
											</td>
											<tr>
												<td>
													<div id="form-input5">
														Nama dan tempat tanggal lahir anak ke 5<br> <input class="lk" type="text" name="nama_anak5" placeholder=""><br><br>

														<!-- pilihan ke 6 -->
														<!-- Masih ada lagi? <br>
														<input type="radio" name="tanya6" value="ada_lagi" class="detail6">ada lagi &nbsp; 
														<input type="radio" name="tanya6" value="cukup" class="detail6">cukup -->
													</div>
												</td>
											</tr>
										</tr>
									</tr>
									
								</tr>
							</td>
						</div>
						
					</tr>

				</td>

			</td>	
		</div>
	</tr>
</div>
</table><br>	

<table>	
	<tr>
		<td width="220">Mulai Selisih </td><td>:</td><td><input class="lk" type="text" name="mulai_selisih" value="bulan...tahun.."></td>
	</tr>
</table><br>
<table>	
	<tr>
		<td colspan="2">Penyebab Perselisihan : </td><td></td>
	</tr>
	<tr>
		<td colspan="2"><i>*Wajib di isi, boleh pilih lebih dari satu*</i></td><td></td>
	</tr>
	<tr>
		<td valign="top">
			<input type="checkbox" name="sebab[]" value="Masalah Ekonomi, Tergugat sesuka hati memberikan nafkah kepada Penggugat, sehingga untuk mencukupi keperluan rumah tangga sebagian besar menggunakan penghasilan penggugat. Hal ini membuat Penggugat merasa kalau Tergugat kurang bertanggung jawab sebagai seorang kepala keluarga;">
		</td>
		<td width="750"> 
			-Masalah Ekonomi, Tergugat sesuka hati memberikan nafkah kepada Penggugat, sehingga untuk mencukupi keperluan rumah tangga sebagian besar menggunakan penghasilan penggugat. Hal ini membuat Penggugat merasa kalau Tergugat kurang bertanggung jawab sebagai seorang kepala keluarga.
		</td>
	</tr>
	<tr>	
		<td valign="top">
			<input type="checkbox" name="sebab[]" value="Keluarga Tergugat seringkali ikut campur dalam urusan rumah tangga Penggugat dan Tergugat;">
		</td>
		<td>
			-Bahwa keluarga Tergugat juga seringkali ikut campur dalam urusan rumah tangga Penggugat dan Tergugat.
		</td>
	</tr>
	<tr>
		<td valign="top">
			<input type="checkbox" name="sebab[]" value="Tergugat memiliki sikap yang mudah emosi, sedikit saja Penggugat melakukan kesalahan, tergugat selalu marah-marah;">
		</td>
		<td>
			-Bahwa Tergugat memiliki sikap yang mudah emosi, sedikit saja Penggugat melakukan kesalahan, tergugat selalu marah-marah.
		</td>
	</tr>
	<tr>
		<td valign="top">
			<input type="checkbox" name="sebab[]" value="Tergugat sangat egois dan mau menang sendiri;">
		</td>
		<td>
			-Bahwa Tergugat sangat egois dan mau menang sendiri.
		</td>
	</tr>
	<tr>	
		<td valign="top">
			<input type="checkbox" name="sebab[]" value="Bahwa apabila terjadi perselisihan dan pertengkaran Tergugat sering berkata kasar yang menyakiti hati Penggugat;">
		</td>
		<td>
			-Bahwa apabila terjadi perselisihan dan pertengkaran Tergugat sering berkata kasar yang menyakiti hati Penggugat.
		</td>
	</tr>
	<tr>	
		<td valign="top">
			<input type="checkbox" name="sebab[]" value="Tergugat menjalin hubungan asmara dengan wanita lain;">
		</td>
		<td>
			-Tergugat menjalin hubungan asmara dengan wanita lain.
		</td>
	</tr>
	<tr>	
		<td valign="top">
			<input type="checkbox" name="sebab[]" value="Penggugat dan Tergugat sudah merasa tidak ada kecocoklan lagi dalam hal membangun rumah tangga;">
		</td>
		<td>
			-Penggugat dan Tergugat sudah merasa tidak ada kecocoklan lagi dalam hal membangun rumah tangga.
		</td>
	</tr>
</table>
<br>	
<table>
	<tr>
		<td width="	220">Akibat Selisih </td><td>:</td><td><input class="lk" type="text" name="akibat_selisih" placeholder="pergi meninggalkan rumah"></td>
	</tr>
	<tr>
		<td>Mulai Pisah </td><td>:</td><td><input class="lk" type="mulai" name="mulai_pisah" value="bulan...tahun..."></td>
	</tr>
	<tr>
		<td>Lamanya Pisah </td><td>:</td><td><input class="lk" type="text" name="lama_pisah" placeholder="Contoh: 4 bulan"></td>
	</tr>
</table>
<hr>
<center>
	<button type="submit" name="simpan" class="btn btn-success" onclick = "unduh()">Unduh</button>
	<!-- <input type="submit" name="simpan" value="Unduh"> -->
	<button type="reset" class="btn btn-primary" onclick = "resetdata()">Reset</button>
	<!-- <input type="submit" name="simpan" value="Unduh"> -->
	<!-- <input type="reset" name="reset"> -->
	<a href="../index/index.html">kembali</a>
</center>
<hr>
</form>
</div>

<script type="text/javascript">
	function unduh(){
		if (confirm("Apakah Data yang dimasukan sudah benar?") == true)
			return true;
		else 
			return false;
	}

	function resetdata(){
		if (confirm("Apakah data yang dimasukan ingin di reset?") == true)
			return true;
		else 
			return false;
	}
</script>


<script>
	$(document).ready(function(){
$("#form-input").css("display","none"); //Menghilangkan form-input ketika pertama kali dijalankan
$(".detail").click(function(){ //Memberikan even ketika class detail di klik (class detail ialah class radio button)
if ($("input[name='telah_belum_anak']:checked").val() == "yang telah dikaruniai anak berjumlah " ) { //Jika radio button "berbeda" dipilih maka tampilkan form-inputan
$("#form-input").slideDown("fast"); //Efek Slide Down (Menampilkan Form Input)
} else {
$("#form-input").slideUp("fast"); //Efek Slide Up (Menghilangkan Form Input)
}
});
});
</script>

<script>
	$(document).ready(function(){
$("#form-input2").css("display","none"); //Menghilangkan form-input ketika pertama kali dijalankan
$(".detail2").click(function(){ //Memberikan even ketika class detail di klik (class detail ialah class radio button)
if ($("input[name='tanya2']:checked").val() == "2" ) { //Jika radio button "berbeda" dipilih maka tampilkan form-inputan
$("#form-input2").slideDown("fast"); //Efek Slide Down (Menampilkan Form Input)
} else {
$("#form-input2").slideUp("fast"); //Efek Slide Up (Menghilangkan Form Input)
}
});
});
</script>

<script>
	$(document).ready(function(){
$("#form-input3").css("display","none"); //Menghilangkan form-input ketika pertama kali dijalankan
$(".detail3").click(function(){ //Memberikan even ketika class detail di klik (class detail ialah class radio button)
if ($("input[name='tanya3']:checked").val() == "3" ) { //Jika radio button "berbeda" dipilih maka tampilkan form-inputan
$("#form-input3").slideDown("fast"); //Efek Slide Down (Menampilkan Form Input)
} else {
$("#form-input3").slideUp("fast"); //Efek Slide Up (Menghilangkan Form Input)
}
});
});
</script>

<script>
	$(document).ready(function(){
$("#form-input4").css("display","none"); //Menghilangkan form-input ketika pertama kali dijalankan
$(".detail4").click(function(){ //Memberikan even ketika class detail di klik (class detail ialah class radio button)
if ($("input[name='tanya4']:checked").val() == "4" ) { //Jika radio button "berbeda" dipilih maka tampilkan form-inputan
$("#form-input4").slideDown("fast"); //Efek Slide Down (Menampilkan Form Input)
} else {
$("#form-input4").slideUp("fast"); //Efek Slide Up (Menghilangkan Form Input)
}
});
});
</script>

<script>
	$(document).ready(function(){
$("#form-input5").css("display","none"); //Menghilangkan form-input ketika pertama kali dijalankan
$(".detail5").click(function(){ //Memberikan even ketika class detail di klik (class detail ialah class radio button)
if ($("input[name='tanya5']:checked").val() == "5" ) { //Jika radio button "berbeda" dipilih maka tampilkan form-inputan
$("#form-input5").slideDown("fast"); //Efek Slide Down (Menampilkan Form Input)
} else {
$("#form-input5").slideUp("fast"); //Efek Slide Up (Menghilangkan Form Input)
}
});
});
</script>
</body>
</html>



