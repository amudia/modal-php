
<?php
	
	include"koneksi.php";
	$no = 1;
	$data = mysqli_query ($koneksi, " select 
											id_siswa,
											nama,
											jenis_kelamin,
											no_hp,
											alamat
									  from 
									  tbl_siswa 
									  where id_siswa = $_POST[id]");
	$row = mysqli_fetch_array ($data);
	
?>
<form role="form" id="form-edit" method="post" action="update.php">
	<div class="form-group">
		<label>Nama</label>
		<input type="hidden" name="id_siswa" value="<?php echo $row['id_siswa'] ; ?>">
		<input class="form-control" name="nama" value="<?php echo $row['nama'] ; ?>">
		<p style="color:red" id="error_edit_nama"></p>
	</div>
	<div class="form-group">
		<label>Jenis Kelamin</label>
		<div class="radio">
			<label>
				<input type="radio" name="jenis_kelamin" value="Laki-laki"  <?php if($row['jenis_kelamin']=='Laki-laki'){ ; ?> checked <?php } ?>>Laki-laki
			</label>
		</div>
		<div class="radio">
			<label>
				<input type="radio" name="jenis_kelamin" value="Perempuan"  <?php if($row['jenis_kelamin']=='Perempuan'){ ; ?> checked <?php } ?>>Perempuan
			</label>
		</div>
	</div>
	<div class="form-group">
		<label>No Handphone</label>
		<input class="form-control" name="no_hp"  value="<?php echo $row['no_hp'] ; ?>">
		<p style="color:red" id="error_edit_no_hp"></p>
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<textarea name="alamat" class="form-control" rows="3"><?php echo $row['alamat'] ; ?></textarea>
		<p style="color:red" id="error_edit_alamat"></p>
	</div>
	
</form>