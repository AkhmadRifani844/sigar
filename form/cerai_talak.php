<!DOCTYPE html>
<html>
<head>
	<title>Cerai_Talak</title>
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
	<hr>
	<h1 align="center">Form Cerai Talak</h1>
	<h5 align="center">(Suami yang mengajukan izin cerai)</h5>

	<hr>

	<div class="container">

		<!-- form -->
		<form method="POST"  action="../proses/proses_cerai_talak.php">
			<table>
				<tr>
					<td>Pengadilan Agama </td><td>:</td><td><input value="Banjarmasin Kelas IA" class="lk" type="text" name="pengadilan_agama"></td>
				</tr>
				<tr>
					<td>Hal</td><td>:</td><td><input class="lk" type="text" name="perihal" value="Cerai Talak"></td>
				</tr>
				<tr>
					<td>Tempat, Tanggal</td><td>:</td><td><input class="lk" type="text" name="tempat_tanggal_surat" placeholder="tempat dan tanggal hari ini" required></td>
				</tr>
				<tr>
					<td>Pemohon</td><td>:</td><td><input class="lk" type="text" name="pemohon" placeholder="nama Pemohon" required></td>
				</tr>
				<tr>
					<td>NIK Pemohon </td><td>:</td><td><input class="lk" type="text" name="nik_pemohon" required></td>
				</tr>
				<tr>
					<td>Tempat Lahir Pemohon </td><td>:</td><td><input class="lk" type="text" name="tempat_lahir_pemohon" required></td>
				</tr>
				<tr>
					<td>Tanggal Lahir Pemohon </td><td>:</td><td><input class="lk" type="text" name="tanggal_lahir_pemohon" placeholder="Contoh : 31 Juli 1990" required></td>
				</tr>
				<tr>
					<td>Agama Pemohon</td><td>:</td><td><input class="lk" type="text" name="agama_pemohon" required></td>
				</tr>
				<tr>
					<td>Status Pemohon sebelum menikah </td><td>:</td><td><input class="lk" type="text" name="status_pemohon" placeholder="jejaka/duda"></td>
				</tr>
				<tr>
					<td>Umur Pemohon</td><td>:</td><td><input class="lk" type="number" name="umur_pemohon" placeholder="masukkan angka saja" required></td>
				</tr>
				<tr>
					<td>Pendidikan Pemohon</td><td>:</td><td><input class="lk" type="text" name="pendidikan_pemohon" required></td>
				</tr>
				<tr>
					<td>Pekerjaan Pemohon </td><td>:</td><td><input class="lk" type="text" name="pekerjaan_pemohon"></td>
				</tr>
				<tr>
					<td>Alamat Pemohon </td><td>:</td><td><textarea class="lk" type="text" name="alamat_pemohon" required></textarea></td>
				</tr>
				<tr>
					<td>Termohon </td><td>:</td><td><input class="lk" type="text" name="termohon" placeholder="nama Termohon" required></td>
				</tr>
				<tr>
					<td>Tempat Lahir Termohon </td><td>:</td><td><input class="lk" type="text" name="tempat_lahir_termohon" required></td>
				</tr>
				<tr>
					<td>Tanggal Lahir Termohon </td><td>:</td><td><input class="lk" type="text" name="tanggal_lahir_termohon" placeholder="Contoh : 31 Juli 1990" required></td>
				</tr>
				<tr>
					<td>Agama Termohon </td><td>:</td><td><input class="lk" type="text" name="agama_termohon"></td>
				</tr>
				<tr>
					<td>Status Termohon sebelum menikah </td><td>:</td><td><input class="lk" type="text" name="status_termohon" placeholder="perawan/janda"></td>
				</tr>
				<tr>
					<td>Umur Termohon</td><td>:</td><td><input class="lk" type="number" name="umur_termohon" placeholder="masukan angka saja"></td>
				</tr>
				<tr>
					<td>Pendidikan Termohon </td><td>:</td><td><input class="lk" type="text" name="pendidikan_termohon"></td>
				</tr>
				<tr>
					<td>Perkerjaan Termohon</td><td>:</td><td><input class="lk" type="text" name="pekerjaan_termohon"></td>
				</tr>
				<tr>
					<td>Alamat Termohon</td><td>:</td><td><textarea class="lk" type="text" name="alamat_termohon"></textarea></td>
				</tr>
				<tr>
					<td>Tanggal Nikah</td><td>:</td><td><input class="lk" type="text" name="tanggal_nikah" placeholder="Contoh : 27 september 2010" required></td>
				</tr>
				<tr>
					<td>KUA Kecamatan</td><td>:</td><td><input class="lk" type="text" name="kua_kecamatan" required></td>
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
				<tr> <!-- pilihan ke 1 -->
					<td colspan="3">Sudah/Belum punya Anak</td> 
				</tr>
				<tr>
					<td><input type="radio" name="telah_belum_anak" value="yang telah dikaruniai anak berjumlah " class="detail"> sudah  &nbsp;
						<input type="radio" name="telah_belum_anak" value="yang belum dikaruniai keturunan" class="detail" checked> belum
					</td>
				</tr>
				<td colspan="2">
					<div id="form-input">
						Jumlah Anak <input type="text" name="jumlah_anak" placeholder="3 anak"><br>
						Nama dan tempat tanggal lahir anak <br> <input class="lk" type="text" name="nama_anak"  placeholder="contoh : Aditya bin safianor lahir di Banjarmasin pada tanggal 23 Juni 2012"><br><br>
						<!-- pilihan ke 2 -->
						Masih ada lagi? <br>
						<input type="radio" name="tanya2" value="2" class="detail2">ada lagi &nbsp; 
						<input type="radio" name="tanya2" value="cukup" class="detail2">cukup <br>
					</td>
					<tr>
						<td>	
							<div id="form-input2">
								Nama dan tempat tanggal lahir anak ke 2<br> <input class="lk" type="text" name="nama_anak2"  placeholder="contoh : Azkia binti safianor lahir di Banjarmasin pada tanggal 23 Juni 2012"><br><br>

								<!-- pilihan ke 3 -->
								Masih ada lagi? <br>
								<input type="radio" name="tanya3" value="3" class="detail3">ada lagi &nbsp; 
								<input type="radio" name="tanya3" value="cukup" class="detail3">cukup

								<tr>	
									<td>
										<div id="form-input3">
											Nama dan tempat tanggal lahir anak ke 3<br> <input class="lk" type="text" name="nama_anak3"placeholder=""><br><br>

											<!-- pilihan ke 4 -->
											Masih ada lagi? <br>
											<input type="radio" name="tanya4" value="4" class="detail4">ada lagi &nbsp; 
											<input type="radio" name="tanya4" value="cukup" class="detail4">cukup
										</td>
										<tr>	
											<td>
												<div id="form-input4">	
													Nama dan tempat tanggal lahir anak ke 4<br> <input class="lk" type="text" name="nama_anak4" placeholder=""><br><br>

													<!-- pilihan ke 5 -->
													Masih ada lagi? <br>
													<input type="radio" name="tanya5" value="5" class="detail5">ada lagi &nbsp; 
													<input type="radio" name="tanya5" value="cukup" class="detail5">cukup
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

</table><br>	

<table>	
	<tr>
		<td width="220">Mulai Selisih </td><td>:</td><td><input class="lk" type="text" name="mulai_selisih" value="bulan.... tahun..."></td>
	</tr>
					<!-- <tr>
						<td>Bentuk Pertengkaran</td><td>:</td><td><input class="lk" type="text" name="bentuk_pertengkaran"></td>
					</tr> -->
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
							<input type="checkbox" name="sebab[]" value="Termohon tidak melaksanakan kewajiban sebagai seorang ibu rumah tangga yang baik seperti melayani segala keperluan Pemohon;">
						</td>
						<td width="750"> 
							-Termohon tidak melaksanakan kewajiban sebagai seorang ibu rumah tangga yang baik seperti melayani segala keperluan Pemohon.
						</td>
					</tr>
					<tr>
						<td valign="top">
							<input type="checkbox" name="sebab[]" value="Termohon memiliki sikap cemburu yang berlebihan terhadap Pemohon;">
						</td>
						<td width="750"> 
							-Termohon memiliki sikap cemburu yang berlebihan terhadap Pemohon.
						</td>
					</tr>
					<tr>
						<td valign="top">
							<input type="checkbox" name="sebab[]" value="Termohon memliki sikap mudah emosi, sedikit saja Pemohon melakukan kesalahan, Termohon selalu marah-marah;">
						</td>
						<td width="750"> 
							-Termohon memliki sikap mudah emosi, sedikit saja Pemohon melakukan kesalahan, Termohon selalu marah-marah.
						</td>
					</tr>
					<tr>	
						<td valign="top">
							<input type="checkbox" name="sebab[]" value="Termohon sekarang sudah menikah lagi dan hal tersebut diakui oleh Termohon sendiri;">
						</td>
						<td>
							-Termohon sekarang sudah menikah lagi dan hal tersebut diakui oleh Termohon sendiri.
						</td>
					</tr>
					<tr>	
						<td valign="top">
							<input type="checkbox" name="sebab[]" value="Termohon sangat egois dan mau menang sendiri;">
						</td>
						<td>
							-Termohon sangat egois dan mau menang sendiri.
						</td>
					</tr>
					<tr>
						<td valign="top">
							<input type="checkbox" name="sebab[]" value="Orang tua Termohon suka ikut campur dalam urusan rumah tangga Pemohon dengan Termohon;">
						</td>
						<td>
							-Orang tua Termohon suka ikut campur dalam urusan rumah tangga Pemohon dengan Termohon.
						</td>
					</tr>
					<tr>	
						<td valign="top">
							<input type="checkbox" name="sebab[]" value="Termohon menjalin hubungan asmara dengan orang lain;">
						</td>
						<td>
							-Termohon menjalin hubungan asmara dengan orang lain.
						</td>
					</tr>
					<tr>	
						<td valign="top">
							<input type="checkbox" name="sebab[]" value="Bahwa apabila terjadi perselisihan dan pertengkaran Termohon sering memaki-maki Pemohon dengan nada tinggi;">
						</td>
						<td>
							-Bahwa apabila terjadi perselisihan dan pertengkaran Termohon sering memaki-maki Pemohon dengan nada tinggi.
						</td>
					</tr>
					<tr>	
						<td valign="top">
							<input type="checkbox" name="sebab[]" value="Pemohon dan Termohon sudah merasa tidak ada kecocokan lagi dalam hal membangun rumah tangga, sehingga Pemohon dan Termohon sepakat ingin secepatnya bercerai secara resmi;">
						</td>
						<td>
							-Pemohon dan Termohon sudah merasa tidak ada kecocokan lagi dalam hal membangun rumah tangga, sehigga Pemohon dan Termohon sepakat ingin secepatnya bercerai secara resmi.
						</td>
					</tr>
				</table>
				<table>
					<tr>
						<td width="220">Akibat Selisih </td><td>:</td><td><input class="lk" type="text" name="akibat_selisih" placeholder="pergi meninggalkan rumah"></td>
					</tr>
					<tr>
						<td>Mulai Pisah </td><td>:</td><td><input class="lk" type="mulai" name="mulai_pisah" value="bulan.... tahun...."></td>
					</tr>
					<tr>
						<td>Lamanya Pisah </td><td>:</td><td><input class="lk" type="text" name="lama_pisah" placeholder="Contoh : 4 bulan"></td>
					</tr>
				</table>
				<hr>
				<center>
					<button type="submit" name="simpan" class="btn btn-success" onclick = "unduh()">Unduh</button>
					<!-- <input type="submit" name="simpan" value="Unduh"> -->
					<button type="reset" class="btn btn-primary" onclick = "resetdata()">Reset</button>
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

