<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Kategori</h1>
            <a href="<?= base_url('admin/kategori_menu') ?>" class="d-none d-sm-inline-block btn  btn-danger shadow-sm" ><i class="fas fa-backward fa-sm text-white-50"></i> Kembali</a>
          </div>

          <!-- Content Row -->
          <div class="row">
          	<div class="col-md-6">
          		<?php foreach($detail as $row) { ?>

          		<div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Kategori</h4>
                            <form class="mt-3" action="<?= base_url('admin/kategori_menu/update_kategori_aksi') ?>" method="post" enctype="multipart/form-data">
                                
                                <div class="form-group">
                                    <label class="form-control-label">Nama Kategori</label>
                                    <input type="hidden" name="id_kategori" value="<?= $row->id_kategori ?>">
                                    <input type="text" class="form-control" name="nama" aria-describedby="name" value="<?= $row->nama ?>">                        
                                     <?= form_error('nama', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
 
                                <div class="form-actions">
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-info btn-rounded">Edit</button>
                                        <button type="reset" class="btn btn-dark btn-rounded">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                <?php } ?>
          	</div>
          </div>
      </div>
  </div>