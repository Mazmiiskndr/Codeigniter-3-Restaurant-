<div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gallery</h1>
        <a href="#" class="d-none d-sm-inline-block btn  btn-primary shadow-sm" data-toggle="modal" data-target="#tambahGallery"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Gallery</a>
      </div>

      <!-- Content Row -->
      <div class="col-md-6">
      	<?= $this->session->flashdata('pesan'); ?>
      </div>
      
      <div class="row">
      	<?php foreach($gallery as $row) { ?>
      	
      	<div class="col-md-4 mb-2">
      		<div class="card">
      			<figure class="figure">
				  <img src="<?= base_url(). 'assets/uploads/gallery/'.$row->gambar ?>" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
				  <strong class="figure-caption ml-3"><?= $row->nama ?></strong>
				  <hr>
				  
				
				</figure>
				<div class="ml-3 mb-3 float-right">
					<a href="<?= base_url('admin/gallery/edit_gallery/'.$row->id_gallery) ?>" class="btn btn-circle btn-rounded btn-primary"><i class="fa fa-edit" ></i> </a>
                <a href="<?= base_url('admin/gallery/delete_gallery/'.$row->id_gallery) ?>" class="btn btn-circle btn-rounded btn-danger"><i class="fa fa-trash"></i> </a>
				</div>
				
      		</div>	
      	</div>
      	<?php } ?>
      	
      </div>
  </div>
</div>

<!-- Tambah Menu -->
<div class="modal fade" id="tambahGallery" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Gallery</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/gallery/tambah_data_gallery') ?>" method="post" enctype="multipart/form-data">
        	<div class="form-group">
	            <label class="form-control-label">Nama Gallery</label>
	            <input type="text" class="form-control" name="nama" aria-describedby="name" placeholder="Nama Gallery" required="">
	             <?= form_error('nama', '<small class="text-danger" style="color: red;">','</small>'); ?>
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