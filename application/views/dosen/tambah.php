<div class="container">
	<div class="row mt-5">
		<div class="col-md-5">
		<div class="card">
  			<div class="card-header">
   				Form Tambah Data Dosen
			</div>
			<div class="card-body">
				<form action="" method="post">
			<div class="from-group">
				<label for="nip">NIP</label>
				<input type="text" class="form-control" id="NIP" name="NIP">
				<small class="form-text text-danger"><?= form_error('NIP')?></small>
			</div>
			<label for="NamaDosen">NAMA DOSEN</label>
			<input type="text" class="form-control" id="NamaDosen" name="NamaDosen">
			<small class="form-text text-danger"><?= form_error('NamaDosen')?></small>
		</div>
		<button type="submit" name="tambah" class="btn btn-primary float-end">Tambah</button>
		</form>
	</div>
</div>
</div>
</div>