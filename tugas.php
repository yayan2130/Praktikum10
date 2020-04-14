<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style>
		.warning{color:#FF0000;}
	</style>
</head>
<body>
	<?php

	$error_nama="";
	$error_gender="";
	$error_nisn="";
	$error_nik="";
	$error_tmpt_lahir="";
	$error_tgl_lahir="";
	$error_no_akta="";
	$error_agama="";
	$error_kwn="";
	$error_khusus="";
	$error_alamat="";
	$error_RT="";
	$error_RW="";
	$error_dusun="";
	$error_kelurahan="";
	$error_kecamatan="";
	$error_kode_pos="";
	$error_tempat_tinggal="";
	$error_transportasi="";
	$error_kks="";
	$error_anake="";
	$error_kps="";
	$error_no_kps="";


	$nama="";
	$gender="";
	$nisn="";
	$nik="";
	$tmpt_lahir="";
	$tgl_lahir="";
	$no_akta="";
	$agama="";
	$kwn="";
	$khusus="";
	$alamat="";
	$RT="";
	$RW="";
	$dusun="";
	$kelurahan="";
	$kecamatan="";
	$kode_pos="";
	$tempat_tinggal="";
	$transportasi="";
	$kks="";
	$anake="";
	$kps="";
	$no_kps="";

	

	if ($_SERVER["REQUEST_METHOD"]=="POST") 
	{
		//NAMA
		if (empty($_POST["nama"])) {
			$error_nama="Nama tidak boleh kosong";
		}else{
			$nama = cek_input($_POST["nama"]);
			if (!preg_match("/^[a-z A-Z]*$/", $nama)) {
				$error_nama="Inputan hanya boleh huruf dan spasi";
			}
		}
		//Gender
		if (empty($_POST["gender"])) {
			$error_gender = "Gender tidak boleh kosong";
		}else{
			$gender = cek_input($_POST["gender"]);
		}
		//nisn
		if (empty($_POST["nisn"])) {
			$error_nisn="nisn tidak boleh kosong";
		}else{
			$nisn = cek_input($_POST["nisn"]);
			if (!is_numeric($nisn)) {
				$error_nisn="nomer NISN hanya Boleh angka";
			}
		}
		//nik
		if (empty($_POST["nik"])) {
			$error_nik="nik tidak boleh kosong";
		}else{
			$nik = cek_input($_POST["nik"]);
			if (!is_numeric($nik)) {
				$error_nik="nomer NIK hanya Boleh angka";
			}
		}
		//tempat lahir
		if (empty($_POST["tmpt_lahir"])) {
			$error_tmpt_lahir="Tempat Lahir tidak boleh kosong";
		}else{
			$tmpt_lahir = cek_input($_POST["tmpt_lahir"]);
			if (!preg_match("/^[a-z A-Z]*$/", $tmpt_lahir)) {
				$error_tmpt_lahir="Inputan hanya boleh huruf dan spasi";
			}
		}
		//tanggal lahir
		if(empty($_POST["tgl_lahir"])){
			$error_tgl_lahir = "Tanggal lahir tidak boleh kosong";
		} else{
			$tgl_lahir = cek_input($_POST["tgl_lahir"]);
		}
		//no akta
		if (empty($_POST["no_akta"])) {
			$error_no_akta="no registrasi akta lahir tidak boleh kosong";
		}else{
			$no_akta = cek_input($_POST["no_akta"]);
			if (!is_numeric($no_akta)) {
				$error_no_akta="nomer registrasi akta lahir hanya Boleh angka";
			}
		}
		//agama (dropdown)
		if (empty($_POST["agama"])) {
			$error_agama = "agama tidak boleh kosong";
		}else{
			$agama = cek_input($_POST["agama"]);
		}
		//kwn
		if (empty($_POST["kwn"])) {
			$error_kwn="Kewarganegaraan tidak boleh kosong";
		}else{
			$kwn = cek_input($_POST["kwn"]);
			if (!preg_match("/^[a-z A-Z]*$/", $kwn)) {
				$error_kwn="Inputan hanya boleh huruf dan spasi";
			}
		}
		//khusus
		if (empty($_POST["khusus"])) {
			$error_khusus = "silahkan memilih";
		}else{
			$khusus = cek_input($_POST["khusus"]);
		}
		//alamat
		if (empty($_POST["alamat"])) {
			$error_alamat="alamat tidak boleh kosong";
		}else{
			$alamat = cek_input($_POST["alamat"]);
			if (!preg_match("/^[a-z A-Z 0-9]*$/", $alamat)) {
				$error_alamat="Inputan hanya boleh huruf dan spasi";
			}
		}
		//rt
		if (empty($_POST["RT"])) {
			$error_RT="RT tidak boleh kosong";
		}else{
			$RT = cek_input($_POST["RT"]);
			if (!is_numeric($RT)) {
				$error_RT="RT hanya Boleh angka";
			}
		}
		//rw
		if (empty($_POST["RW"])) {
			$error_RW="RW tidak boleh kosong";
		}else{
			$RW = cek_input($_POST["RW"]);
			if (!is_numeric($RW)) {
				$error_RW="RW hanya Boleh angka";
			}
		}
		//dusun
		if (empty($_POST["dusun"])) {
			$error_dusun="dusun tidak boleh kosong";
		}else{
			$dusun = cek_input($_POST["dusun"]);
			if (!preg_match("/^[a-z A-Z]*$/", $dusun)) {
				$error_dusun="Inputan hanya boleh huruf dan spasi";
			}
		}
		//kelurahan
		if (empty($_POST["kelurahan"])) {
			$error_kelurahan="kelurahan tidak boleh kosong";
		}else{
			$kelurahan = cek_input($_POST["kelurahan"]);
			if (!preg_match("/^[a-z A-Z]*$/", $kelurahan)) {
				$error_kelurahan="Inputan hanya boleh huruf dan spasi";
			}
		}
		//kecamatan
		if (empty($_POST["kecamatan"])) {
			$error_kecamatan="kecamatan tidak boleh kosong";
		}else{
			$kecamatan = cek_input($_POST["kecamatan"]);
			if (!preg_match("/^[a-z A-Z]*$/", $kecamatan)) {
				$error_kecamatan="Inputan hanya boleh huruf dan spasi";
			}
		}
		//kodepos
		if (empty($_POST["kode_pos"])) {
			$error_kode_pos="kodepos tidak boleh kosong";
		}else{
			$kode_pos = cek_input($_POST["kode_pos"]);
			if (!is_numeric($kode_pos)) {
				$error_kode_pos="kodepos hanya Boleh angka";
			}
		}
		//tempattinggal (dropdown)
		if (empty($_POST["tempat_tinggal"])) {
			$error_tempat_tinggal = "silahkan memilih";
		}else{
			$tempat_tinggal = cek_input($_POST["tempat_tinggal"]);
		}
		//modetransportasi (dropdown)
		if (empty($_POST["transportasi"])) {
			$error_transportasi = "silahkan memilih";
		}else{
			$transportasi = cek_input($_POST["transportasi"]);
		}
		//nomorkks
		if (empty($_POST["kks"])) {
			$error_kks="nomor kks tidak boleh kosong";
		}else{
			$kks = cek_input($_POST["kks"]);
			if (!is_numeric($kks)) {
				$error_kks="nomor kks hanya Boleh angka";
			}
		}
		//anake
		if (empty($_POST["anake"])) {
			$error_anake = "silahkan memilih";
		}else{
			$anake = cek_input($_POST["anake"]);
		}
		//nemerimakps
		if (empty($_POST["kps"])) {
			$error_kps = "silahkan memilih";
		}else{
			$kps = cek_input($_POST["kps"]);
		}
		//nokps
		if (empty($_POST["no_kps"])) {
			$no_kps ="";
		}else{
			$no_kps = cek_input($_POST["no_kps"]);
		}
	}

	include "koneksi.php";

	$sql = "INSERT INTO form (nama,gender,nisn,nik,tmpt_lahir,tgl_lahir,no_akta,agama,kwn,khusus,alamat,RT,RW,dusun,kelurahan,kecamatan,kode_pos,tempat_tinggal,transportasi,kks,anake,kps,no_kps) VALUES ('$nama','$gender','$nisn','$nik','$tmpt_lahir','$tgl_lahir','$no_akta','$agama','$kwn','$khusus','$alamat','$RT','$RW','$dusun','$kelurahan','$kecamatan','$kode_pos','$tempat_tinggal','$transportasi','$kks','$anake','$kps','$no_kps')";
	mysqli_query($koneksi,$sql) or die ("Koneksi gagal");

	function cek_input($data)
	{
		$data=trim($data);
		$data=stripslashes($data);
		//$data=htmlspecialchars($data);
		return $data;
	}

	?>

	<div class="row">
		<div class="col-md-9" >
			<div class="card">
				<div class="card-header">
					Formulir Peserta Didik
				</div>
				<div class="card-body">
					<form method="post"> 
						<!-- nama -->
						<div class="form-group row">
							<label for="nama" class="col-sm-2 col-form-label">Nama</label>
							<div class="col-sm-10">
								<input type="text" name="nama" class="form-control <?php echo ($error_nama !="" ? "is-invalid" : ""); ?>" id="nama" placeholder="Nama" value="<?php echo $nama;?>"><span class="warning"><?php echo $error_nama; ?></span>
							</div>
						</div>
						<!-- Jenis Kelamin -->
						<div class="form-group row">
							<label for="gender" class="col-sm-2 col-form-label">Gender</label>
							<div class="radio-inline" style="margin-left: 15px; margin-top: 7px;">
								<input type="radio" name="gender" value="Pria"> Pria 
								<input type="radio" name="gender" value="Perempuan"> Perempuan
								<input type="radio" name="gender" value="Lainnya"> Lainnya
								<br>
								<span class="warning"><?php echo $error_gender;?></span>
							</div>
						</div>
						<!-- NISN -->
						<div class="form-group row">
						<label for="nisn" class="col-sm-2 col-form-label">NISN</label>
							<div class="col-sm-10">
						<input type="text" name="nisn" class="form-control <?php echo ($error_nisn !="" ? "is-invalid" : ""); ?>" id="email" placeholder="nisn" value="<?php echo $nisn;?>"><span class="warning"><?php echo $error_nisn; ?></span>
							</div>
						</div>
						<!-- NIK -->
						<div class="form-group row">
						<label for="nik" class="col-sm-2 col-form-label">NIK</label>
							<div class="col-sm-10">
						<input type="text" name="nik" class="form-control <?php echo ($error_nik !="" ? "is-invalid" : ""); ?>" id="email" placeholder="nik" value="<?php echo $nik;?>"><span class="warning"><?php echo $error_nik; ?></span>
							</div>
						</div>
						<!-- tempat lahir -->
						<div class="form-group row">
							<label for="tmpt_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
							<div class="col-sm-10">
								<input type="text" name="tmpt_lahir" class="form-control <?php echo ($error_tmpt_lahir !="" ? "is-invalid" : ""); ?>" id="tmpt_lahir" placeholder="tmpt_lahir" value="<?php echo $tmpt_lahir;?>"><span class="warning"><?php echo $error_tmpt_lahir; ?></span>
							</div>
						</div>
						<!-- Tanggal Lahir -->
						<div class="form-group row">
							<label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
							<div class="col-sm-4">
								<input type="date" name="tgl_lahir" class="form-control <?php echo($error_tgl_lahir !="" ? "is-invalid" : ""); ?>" id="tgl_lahir" placeholder="Tanggal lahir" value="<?php echo $tgl_lahir; ?>"><span class="warning"><?php echo $error_tgl_lahir; ?></span>
							</div>
						</div>
						<!-- no akta -->
						<div class="form-group row">
						<label for="no_akta" class="col-sm-2 col-form-label">No Akta</label>
							<div class="col-sm-10">
						<input type="text" name="no_akta" class="form-control <?php echo ($error_no_akta !="" ? "is-invalid" : ""); ?>" id="email" placeholder="no_akta" value="<?php echo $no_akta;?>"><span class="warning"><?php echo $error_no_akta; ?></span>
							</div>
						</div>
						<!-- agama -->
						<div class="form-group row">
							<label for="agama" class="col-sm-2 col-form-label">Agama</label>
							<div class="radio-inline" style="margin-left: 15px; margin-top: 7px;">
								<input type="radio" name="agama" value="Islam"> Islam 
								<input type="radio" name="agama" value="Kristen"> Kristen
								<input type="radio" name="agama" value="Katolik"> Katolik
								<input type="radio" name="agama" value="Buddha"> Buddha
								<input type="radio" name="agama" value="Hindu"> Hindu
								<input type="radio" name="agama" value="Lainnya"> Lainnya
								<br>
								<span class="warning"><?php echo $error_agama; ?></span>
							</div>
						</div>
						<!-- kwn -->
						<div class="form-group row">
							<label for="kwn" class="col-sm-2 col-form-label">Kewarganegaraan</label>
							<div class="col-sm-10">
								<input type="text" name="kwn" class="form-control <?php echo ($error_kwn !="" ? "is-invalid" : ""); ?>" id="kwn" placeholder="kwn" value="<?php echo $kwn;?>"><span class="warning"><?php echo $error_kwn; ?></span>
							</div>
						</div>
						<!-- khusus -->
						<div class="form-group row">
							<label for="khusus" class="col-sm-2 col-form-label">Berkebutuhan Khusus</label>
							<div class="radio-inline" style="margin-left: 15px; margin-top: 18px;">
								<input type="radio" name="khusus" value="Ya"> Ya 
								<input type="radio" name="khusus" value="Tidak"> Tidak
								<br>
								<span class="warning"><?php echo $error_khusus;?></span>
							</div>
						</div>
						<!-- alamat -->
						<div class="form-group row">
							<label for="alamat" class="col-sm-2 col-form-label">alamat</label>
							<div class="col-sm-10">
								<input type="text" name="alamat" class="form-control <?php echo ($error_alamat !="" ? "is-invalid" : ""); ?>" id="alamat" placeholder="alamat" value="<?php echo $alamat;?>"><span class="warning"><?php echo $error_alamat; ?></span>
							</div>
						</div>
						<!-- rt -->
						<div class="form-group row">
						<label for="RT" class="col-sm-2 col-fom-label">RT</label>
							<div class="col-sm-10">
						<input type="text" name="RT" class="form-control <?php echo ($error_RT !="" ? "is-invalid" : ""); ?>" id="RT" placeholder="RT" value="<?php echo $RT;?>"><span class="warning"><?php echo $error_RT; ?></span>
							</div>
						</div>
						<!-- rw -->
						<div class="form-group row">
						<label for="RW" class="col-sm-2 col-form-label">RW</label>
							<div class="col-sm-10">
						<input type="text" name="RW" class="form-control <?php echo ($error_RW !="" ? "is-invalid" : ""); ?>" id="RW" placeholder="RW" value="<?php echo $RW;?>"><span class="warning"><?php echo $error_RW; ?></span>
							</div>
						</div>
						<!-- dusun -->
						<div class="form-group row">
							<label for="dusun" class="col-sm-2 col-form-label">dusun</label>
							<div class="col-sm-10">
								<input type="text" name="dusun" class="form-control <?php echo ($error_dusun !="" ? "is-invalid" : ""); ?>" id="dusun" placeholder="dusun" value="<?php echo $dusun;?>"><span class="warning"><?php echo $error_dusun; ?></span>
							</div>
						</div>
						<!-- kelurahan -->
						<div class="form-group row">
							<label for="kelurahan" class="col-sm-2 col-form-label">Kelurahan</label>
							<div class="col-sm-10">
								<input type="text" name="kelurahan" class="form-control <?php echo ($error_kelurahan !="" ? "is-invalid" : ""); ?>" id="kelurahan" placeholder="kelurahan" value="<?php echo $kelurahan;?>"><span class="warning"><?php echo $error_kelurahan; ?></span>
							</div>
						</div>
						<!-- kecamatan -->
						<div class="form-group row">
							<label for="kecamatan" class="col-sm-2 col-form-label">kecamatan</label>
							<div class="col-sm-10">
								<input type="text" name="kecamatan" class="form-control <?php echo ($error_kecamatan !="" ? "is-invalid" : ""); ?>" id="kecamatan" placeholder="kecamatan" value="<?php echo $kecamatan;?>"><span class="warning"><?php echo $error_kecamatan; ?></span>
							</div>
						</div>
						<!-- kodepos -->
						<div class="form-group row">
						<label for="kode_pos" class="col-sm-2 col-form-label">kodepos</label>
							<div class="col-sm-10">
						<input type="text" name="kode_pos" class="form-control <?php echo ($error_kode_pos !="" ? "is-invalid" : ""); ?>" id="email" placeholder="kode_pos" value="<?php echo $kode_pos;?>"><span class="warning"><?php echo $error_kode_pos; ?></span>
							</div>
						</div>
						<!-- tempattinggal -->
						<div class="form-group row">
							<label for="tempat_tinggal" class="col-sm-2 col-form-label">Tempat Tinggal</label>
							<div class="radio-inline" style="margin-left: 15px; margin-top: 7px;">
								<input type="radio" name="tempat_tinggal" value="rumah"> Rumah
								<input type="radio" name="tempat_tinggal" value="kos"> Kos
								<input type="radio" name="tempat_tinggal" value="apartemen"> Apartemen
								<br>
								<span class="warning"><?php echo $error_tempat_tinggal;?></span>
							</div>
						</div>
						<!-- modetransportasi -->
						<div class="form-group row">
							<label for="transportasi" class="col-sm-2 col-form-label">Transportasi</label>
							<div class="radio-inline" style="margin-left: 15px; margin-top: 7px;">
								<input type="radio" name="transportasi" value="motor"> Sepeda Motor
								<input type="radio" name="transportasi" value="mobil"> Mobil
								<input type="radio" name="transportasi" value="sepeda"> Sepeda
								<br>
								<span class="warning"><?php echo $error_transportasi;?></span>
							</div>
						</div>
						<!-- nomorkks -->
						<div class="form-group row">
						<label for="kks" class="col-sm-2 col-form-label">Nomor KKS</label>
							<div class="col-sm-10">
						<input type="text" name="kks" class="form-control <?php echo ($error_kks !="" ? "is-invalid" : ""); ?>" id="email" placeholder="kks" value="<?php echo $kks;?>"><span class="warning"><?php echo $error_kks; ?></span>
							</div>
						</div>
						<!-- anake -->
						<div class="form-group row">
							<label for="anake" class="col-sm-2 col-form-label">Anak Ke</label>
							<div class="radio-inline" style="margin-left: 15px; margin-top: 7px;">
								<input type="radio" name="anake" value="1"> 1 
								<input type="radio" name="anake" value="2"> 2
								<input type="radio" name="anake" value="3"> 3
								<input type="radio" name="anake" value=">3"> >3
								<br>
								<span class="warning"><?php echo $error_anake;?></span>
							</div>
						</div>
						<!-- nemerimakphs -->
						<div class="form-group row">
							<label for="kps" class="col-sm-2 col-form-label">Menerima KPS/PKH</label>
							<div class="radio-inline" style="margin-left: 15px; margin-top: 18px;">
								<input type="radio" name="kps" value="Ya"> Ya 
								<input type="radio" name="kps" value="Tidak"> Tidak
								<br>
								<span class="warning"><?php echo $error_kps;?></span>
							</div>
						</div>
						<!-- no kps -->
						<div class="form-group row">
						<label for="no_kps" class="col-sm-2 col-form-label">no KPS</label>
							<div class="col-sm-10">
						<input type="text" name="no_kps" class="form-control <?php echo ($error_no_kps !="" ? "is-invalid" : ""); ?>" id="email" placeholder="no_kps" value="<?php echo $no_kps;?>"><span><?php echo $error_no_kps; ?></span>
							</div>
						</div>
						<!-- button sign in -->
						<div class="form-group row">
							<div class="col-sm-10">
								<button type ="submit" class="btn btn-primary"> SUBMIT </button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>