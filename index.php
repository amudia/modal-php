<!DOCTYPE html>
<html>
<head>
	<title>CRUD Modal Bootstrap</title>
	<link rel="stylesheet" type="text/css" href="style/bootstrap.css">
</head>
<body>


<div class="container" style="margin-top:8%">
	<div class="row">
		<div class="col-md-8 col-md-offset-2"> 
			<p>
				<center>
					<h2>CRUD MODAL SIMPLE</h2>
				</center>
			</p>
			<br>
			<p>
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-tambah">Tambah</button>
			</p>
				<div id="data-siswa">
				</div>
		</div>
	</div>
	<p>
	</p>
</div>
	<script type="text/javascript" src="style/jquery.js"></script>
	<script type="text/javascript" src="style/bootstrap.js"></script>	
	<script type="text/javascript" src="script.js"></script>	
</body>
</html>



	<div id="modal-tambah" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form role="form" id="form-tambah" method="post" action="input.php">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Tambah Biodata Siswa</h4>
				</div>
					<div class="modal-body">
						
						<div class="form-group">
							<label>Nama Lengkap</label>
							<input class="form-control" id="nama" name="nama">
							<p style="color:red" id="error_nama"></p>
						</div>
						<div class="form-group">
							<label>Jenis Kelamin</label>
							<div class="radio">
								<label>
									<input type="radio" name="jenis_kelamin" value="Laki-laki" checked>Laki-laki
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
								</label>
							</div>
							<p style="color:red" id="error_jenis_kelamin"></p>
						</div>
						<div class="form-group">
							<label>No Handphone</label>
							<input class="form-control" id="no_hp" name="no_hp">
							<p style="color:red" id="error_no_hp"></p>
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<textarea id="alamat" name="alamat" class="form-control" rows="3"></textarea>
							<p style="color:red" id="error_alamat"></p>
						</div>							
										
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-info" data-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary" >Simpan</button>
					</div>
				</form>		
			</div>
		</div>
	</div>
	
	
	<div id="modal-edit" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form role="form" id="form-edit" method="post" action="input.php">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Tambah Biodata Siswa</h4>
				</div>
					<div class="modal-body">
						<div id="data-edit">
						
						</div>				
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-info" data-dismiss="modal">Kembali</button>
						<button type="submit" class="btn btn-primary" >Simpan</button>
					</div>
				</form>		
			</div>
		</div>
	</div> 