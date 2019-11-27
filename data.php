	<table class="table table-bordered">
		<tr>
			<th>
				No 
			</th>
			<th>
				Nama 
			</th>
			<th>
				Jenis Kelamin
			</th>
			<th>
				No Handphone
			</th>
			<th>
				Alamat
			</th>
			<th>
				Opsi
			</th>
		</tr>
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
												  order by id_siswa DESC");
				while ($row = mysqli_fetch_array ($data))
				{
			?>
		<tr>
			<td>
				<?php echo $no++; ?>
			</td>
			<td>
				<?php echo $row['nama']; ?>
			</td>
			<td>
				<?php echo $row['jenis_kelamin']; ?>
			</td>
			<td>
				<?php echo $row['no_hp']; ?>
			</td>
			<td>
				<?php echo $row['alamat']; ?>
			</td>
			<td>
				<a href="#" id="edit" data-id="<?php echo $row['id_siswa']; ?>">Edit</a> |
				<a href="#" id="hapus" data-id="<?php echo $row['id_siswa']; ?>">Hapus</a> 
			</td>
		</tr>
		<?php
			}
		?>
	</table>