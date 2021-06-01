<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Kategori</h1>
            <a href="<?= base_url('admin/menu') ?>" class="d-none d-sm-inline-block btn  btn-danger shadow-sm" ><i class="fas fa-backward fa-sm text-white-50"></i> Kembali</a>
          </div>

          <!-- Content Row -->
          <div class="row">
          	<div class="col-md-6">
          		<?php foreach($detail as $row) { ?>

          		<div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Kategori</h4>
                            <form class="mt-3" action="<?= base_url('admin/menu/update_menu_aksi') ?>" method="post" enctype="multipart/form-data">

                              <div class="form-group">
                                <label class="form-control-label">Nama Kategori</label>
                                <input type="hidden" name="id_menu" value="<?= $row->id_menu ?>">
                                <select name="nama_kategori" class="custom-select" id="inputGroupSelect01">
                                      <option selected><?= $row->nama_kategori ?></option>
                                      <?php foreach($kategori as $kt) { ?>
                                      
                                      <option value="<?= $kt->nama ?>"><?= $kt->nama ?></option>
                                      <?php } ?>
                                      
                                  </select>
                            </div>
                                                  
                                
                                <div class="form-group">
                                    <label class="form-control-label">Kode Menu</label>
                        
                                    <input type="text" class="form-control" name="kode" aria-describedby="name" value="<?= $row->kode ?>">                        
                                     <?= form_error('kode', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Nama Menu</label>
                        
                                    <input type="text" class="form-control" name="nama" aria-describedby="name" value="<?= $row->nama ?>">                        
                                     <?= form_error('nama', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Harga Menu</label>
                        
                                    <input type="text" class="form-control" name="harga" aria-describedby="name" value="<?= $row->harga ?>">                        
                                     <?= form_error('harga', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Deskripsi Menu</label>
                        
                                    <input type="text" class="form-control" name="deskripsi" aria-describedby="name" value="<?= $row->deskripsi ?>">                        
                                     <?= form_error('deskripsi', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label">Gambar</label>
                                    <input type="file" id="file-input" name="gambar" class="form-control-file" value="<?= set_value('gambar') ?>">     
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
                
          	</div>
            <div class="col-md-6">
          
          
          <img src="<?= base_url(). 'assets/uploads/menu/'.$row->gambar ?>" class="figure-img img-fluid rounded" width="750px">
         
       
       
        
         
        </div>
        <?php } ?>
          </div>
      </div>
  </div>