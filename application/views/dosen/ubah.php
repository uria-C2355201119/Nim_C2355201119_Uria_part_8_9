<div class="container">
	<div class="row mt-5">
		<div class="col-md-5">
		<div class="card">
  			<div class="card-header">
   				Form Ubah Data Dosen
			</div>
			<div class="card-body">
				<form action="" method="post">
				<input type="hidden" name="id" value="<?=$dosen['id']; ?>">
			<div class="from-group">
				<label for="nip">NIP</label>
				<input type="text" class="form-control" value="<?=$dosen['id']; ?>" id="NIP" name="NIP">
				<small class="form-text text-danger"><?= form_error('NIP')?></small>
			</div>
			<label for="NamaDosen">NAMA DOSEN</label>
			<input type="text" class="form-control" value="<?=$dosen['NamaDosen']; ?>" id="NamaDosen" name="NamaDosen">
			<small class="form-text text-danger"><?= form_error('NamaDosen')?></small>
		</div>
		<button type="submit" name="ubah" class="btn btn-primary float-end">Ubah</button>
		</form>
	</div>
</div>
</div>
</div>