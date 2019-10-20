<div class="container">
	
	<div class="row">
		<div class="col-md-6">

			<div class="card">
			  <div class="card-header">
			    Form Tambah Data Mahasiswa
			  </div>
			  <div class="card-body">
			  	<?php if( validation_errors() ) :  ?>
			  		<div class="alert alert-danger" role="alert">
 						<?= validation_errors(); ?>
					</div>
				<?php endif; ?>
			  	
			    <form action="" method="post">
					<div class="form-group">
				    	<label for="nama">Nama</label>
				    	<input type="text" name="nama" class="form-control" id="nama">
					</div>
					<div class="form-group">
				    	<label for="nrp">Nrp</label>
				    	<input type="number" name="nrp" class="form-control" id="nrp">
					</div>
					<div class="form-group">
				    	<label for="email">Email</label>
				    	<input type="text" name="email" class="form-control" id="email">
					</div>
					<div class="form-group">
					    <label for="jurusan">Jurusan</label>
					    <select class="form-control" id="jurusan" name="jurusan">
					      <option value="Teknik Informatika">Teknik Informatika</option>
					      <option value="Teknik Mesin">Teknik Mesin</option>
					      <option value="Teknik Lingkungan">Teknik Lingkungan</option>
					      <option value="Teknik Pangan">Teknik Pangan</option>
					      <option value="Teknik Industri">Teknik Industri</option>
					      <option value="Teknik Planalogi">Teknik Planalogi</option>
					    </select>
					</div>
					<button type="submit" name="tambah" class="btn btn-primary float-right" >Tambah Data</button>
				</form>
			  </div>
			</div>

			
		</div>
	</div>

</div>