<?php
include"koneksi.php";

$id = $_POST['id_siswa'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
		if ($nama == '') {
			$data['error']['edit_nama'] = 'Nama  harap diisi';
		}
		if ($jenis_kelamin == '') {
			$data['error']['edit_jenis_kelamin'] = 'Pilih Jenis Kelamin';
		}
		if ($no_hp == '') {
			$data['error']['edit_no_hp'] = 'No Handphone Harap Di isi';
		}
		if ($alamat == '') {
			$data['error']['edit_alamat'] = 'Alamat harap diisi';
		}

		if (empty($data['error'])) {
			$query = "UPDATE tbl_siswa SET
											nama = '$nama',
											jenis_kelamin = '$jenis_kelamin',
											alamat = '$alamat',
											no_hp = '$no_hp'
											WHERE id_siswa = '$id'
											";

			mysqli_query($koneksi, $query)
			or die ("Gagal Perintah SQL".mysql_error());
			$data['hasil'] = 'sukses';
		} else {
			$data['hasil'] = 'gagal';
		}
		echo json_encode($data);

?>

