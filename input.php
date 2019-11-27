<?php

include"koneksi.php";

$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];

if ($nama == '') {
    $data['error']['nama'] = 'Nama tidak boleh kosong';
}
if ($jenis_kelamin == '') {
    $data['error']['jenis_kelamin'] = 'Piih Jenis Kelammin';
}
if ($no_hp == '') {
    $data['error']['no_hp'] = 'Nomor Handphone Tidak Boleh Kosong';
}
if ($alamat == '') {
    $data['error']['alamat'] = 'Alamat tidak boleh kosong';
}

if (empty($data['error'])) {
    
		$query = "insert INTO tbl_siswa SET
										nama = '$nama',
										jenis_kelamin = '$jenis_kelamin',
										alamat = '$alamat',
										no_hp = '$no_hp'
										";

		mysqli_query($koneksi, $query)
		or die ("Gagal Perintah SQL".mysql_error());
		
    $data['hasil'] = 'sukses';
    
} else {
    
    $data['hasil'] = 'gagal';
}

echo json_encode($data);

?>

