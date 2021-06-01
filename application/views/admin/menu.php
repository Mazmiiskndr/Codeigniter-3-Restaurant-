<div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Menu</h1>
        <a href="#" class="d-none d-sm-inline-block btn  btn-primary shadow-sm" data-toggle="modal" data-target="#tambahMenu"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Menu</a>
      </div>

      <!-- Content Row -->
      <div class="col-md-6">
      	<?= $this->session->flashdata('pesan'); ?>
      </div>
      
      <div class="row">
      	<?php foreach($menu as $row) { ?>
      	
      	<div class="col-md-2 mb-2">
      		<div class="card">
      			<figure class="figure">
				  <img src="<?= base_url(). 'assets/uploads/menu/'.$row->gambar ?>" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
				  <strong class="figure-caption ml-3"><?= $row->nama ?></strong>
				  <hr>
				  
				  <h2 class="figure-caption ml-3">Kode : <?= $row->kode ?></h2>
				   <figcaption class="figure-caption ml-3">Rp. <?= number_format($row->harga,0,',','.'); ?></figcaption>
				   <figcaption class="figure-caption ml-3"><?= $row->deskripsi ?> </figcaption>
				
				</figure>
				<div class="ml-3 mb-3 float-right">
					<a href="<?= base_url('admin/menu/edit_menu/'.$row->id_menu) ?>" class="btn btn-circle btn-rounded btn-primary"><i class="fa fa-edit" ></i> </a>
                <a href="<?= base_url('admin/menu/delete_menu/'.$row->id_menu) ?>" class="btn btn-circle btn-rounded btn-danger"><i class="fa fa-trash"></i> </a>
				</div>
				
      		</div>	
      	</div>
      	<?php } ?>
      	
      </div>
  </div>
</div>

<!-- Tambah Menu -->
<div class="modal fade" id="tambahMenu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/menu/tambah_data_menu') ?>" method="post" enctype="multipart/form-data">
	        <div class="form-group">
	            <label class="form-control-label">Nama Kategori</label>
	            <select name="nama_kategori" class="custom-select" id="inputGroupSelect01">
                    <option selected>Pilih Kategori...</option>
                    <?php foreach($kategori as $kt) { ?>
                    <option value="<?= $kt->nama ?>"><?= $kt->nama ?></option>
                    <?php } ?>
                    
                </select>
	        </div>
        	<div class="form-group">
	            <label class="form-control-label">Kode Menu</label>
	            <input type="text" class="form-control" name="kode" aria-describedby="name" placeholder="Kode Menu" required="">
	             <?= form_error('kode', '<small class="text-danger" style="color: red;">','</small>'); ?>
	        </div>
        	<div class="form-group">
	            <label class="form-control-label">Nama Menu</label>
	            <input type="text" class="form-control" name="nama" aria-describedby="name" placeholder="Nama Menu" required="">
	             <?= form_error('nama', '<small class="text-danger" style="color: red;">','</small>'); ?>
	        </div>
	        <div class="form-group">
	            <label class="form-control-label">Harga Menu</label>
	            <input type="text" class="form-control" name="harga" aria-describedby="name" placeholder="Rp..." required="">
	             <?= form_error('harga', '<small class="text-danger" style="color: red;">','</small>'); ?>
	        </div>
	        <div class="form-group">
	            <label class="form-control-label">Deskripsi Menu</label>
	            <input type="text" class="form-control" name="deskripsi" aria-describedby="name" placeholder="Deskripsi Menu" required="">
	             <?= form_error('deskripsi', '<small class="text-danger" style="color: red;">','</small>'); ?>
	        </div>
	        <div class="form-group">
                <label class="form-control-label">Gambar</label>
                <input type="file" id="file-input" name="gambar" class="form-control-file" value="<?= set_value('gambar') ?>">     
            </div>
	        <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Tambah</button>
	      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
<!-- End Tambah Kategori -->