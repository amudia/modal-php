<?php
include"koneksi.php";


$query = "DELETE FROM tbl_siswa 
							WHERE id_siswa ='$_POST[id]'
								";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());

?>

