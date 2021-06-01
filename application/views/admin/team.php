<div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Team</h1>
        <a href="#" class="d-none d-sm-inline-block btn  btn-primary shadow-sm" data-toggle="modal" data-target="#tambahTeam"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Team</a>
      </div>

      <!-- Content Row -->
      <div class="col-md-6">
      	<?= $this->session->flashdata('pesan'); ?>
      </div>
      
      <div class="row">
      	<?php foreach($team as $row) { ?>
      	
      	<div class="col-md-3 mb-2">
      		<div class="card">
      			<figure class="figure">
				  <img src="<?= base_url(). 'assets/uploads/team/'.$row->gambar ?>" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
				  <strong class="figure-caption ml-3"><?= $row->nama ?></strong>
				  <hr>
				  
				  <h2 class="figure-caption ml-3">Pekerjaan : <?= $row->pekerjaan ?></h2>
				   <figcaption class="figure-caption ml-3"><?= $row->no_hp ?></figcaption>
           <figcaption class="figure-caption ml-3"><?= $row->link_fb ?></figcaption>
				   <figcaption class="figure-caption ml-3"><?= $row->deskripsi ?> </figcaption>
				
				</figure>
				<div class="ml-3 mb-3 float-right">
					<a href="<?= base_url('admin/team/edit_team/'.$row->id_team) ?>" class="btn btn-circle btn-rounded btn-primary"><i class="fa fa-edit" ></i> </a>
                <a href="<?= base_url('admin/team/delete_team/'.$row->id_team) ?>" class="btn btn-circle btn-rounded btn-danger"><i class="fa fa-trash"></i> </a>
				</div>
				
      		</div>	
      	</div>
      	<?php } ?>
      	
      </div>
  </div>
</div>

<!-- Tambah Menu -->
<div class="modal fade" id="tambahTeam" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Team</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/team/tambah_data_team') ?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
              <label class="form-control-label">Nama Team</label>
              <input type="text" class="form-control" name="nama" aria-describedby="name" placeholder="Nama Team" required="">
               <?= form_error('nama', '<small class="text-danger" style="color: red;">','</small>'); ?>
          </div>
        	<div class="form-group">
	            <label class="form-control-label">Pekerjaan</label>
	            <input type="text" class="form-control" name="pekerjaan" aria-describedby="name" placeholder="Pekerjaan Team" required="">
	             <?= form_error('pekerjaan', '<small class="text-danger" style="color: red;">','</small>'); ?>
	        </div>
        	
	        <div class="form-group">
	            <label class="form-control-label">No. HP</label>
	            <input type="text" class="form-control" name="no_hp" aria-describedby="name" placeholder="No. HP" required="">
	             <?= form_error('no_hp', '<small class="text-danger" style="color: red;">','</small>'); ?>
	        </div>
          <div class="form-group">
              <label class="form-control-label">Link FB</label>
              <input type="text" class="form-control" name="link_fb" aria-describedby="name" placeholder="Link Fb jika ada" required="">
               <?= form_error('link_fb', '<small class="text-danger" style="color: red;">','</small>'); ?>
          </div>
	        <div class="form-group">
	            <label class="form-control-label">Deskripsi Team</label>
	            <input type="text" class="form-control" name="deskripsi" aria-describedby="name" placeholder="Deskripsi Team" required="">
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