<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Team</h1>
            <a href="<?= base_url('admin/team') ?>" class="d-none d-sm-inline-block btn  btn-danger shadow-sm" ><i class="fas fa-backward fa-sm text-white-50"></i> Kembali</a>
          </div>

          <!-- Content Row -->
          <div class="row">
          	<div class="col-md-6">
          		<?php foreach($detail as $row) { ?>

          		<div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Kategori</h4>
                            <form class="mt-3" action="<?= base_url('admin/team/update_team_aksi') ?>" method="post" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label class="form-control-label">Nama Team</label>
                                    <input type="hidden" name="id_team" value="<?= $row->id_team ?>">
                        
                                    <input type="text" class="form-control" name="nama" aria-describedby="name" value="<?= $row->nama ?>">                        
                                     <?= form_error('nama', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Pekerjaan</label>
                        
                                    <input type="text" class="form-control" name="pekerjaan" aria-describedby="name" value="<?= $row->pekerjaan ?>">                        
                                     <?= form_error('pekerjaan', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">No. HP</label>
                        
                                    <input type="text" class="form-control" name="no_hp" aria-describedby="name" value="<?= $row->no_hp ?>">                        
                                     <?= form_error('no_hp', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Link FB</label>
                        
                                    <input type="text" class="form-control" name="link_fb" aria-describedby="name" value="<?= $row->link_fb ?>">                        
                                     <?= form_error('link_fb', '<small class="text-danger" style="color: red;">','</small>'); ?>
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
          
          
          <img src="<?= base_url(). 'assets/uploads/team/'.$row->gambar ?>" class="figure-img img-fluid rounded" width="750px">
         
       
       
        
         
        </div>
        <?php } ?>
          </div>
      </div>
  </div>