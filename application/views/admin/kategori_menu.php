<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Kategori Menu</h1>
            <a href="#" class="d-none d-sm-inline-block btn  btn-primary shadow-sm" data-toggle="modal" data-target="#tambahKategori"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Kategori</a>
          </div>

          <!-- Content Row -->
          <div class="row">
          	<div class="col-md-12">
          		<?= $this->session->flashdata('pesan'); ?>
          	<div class="card">
                        
                        <div class="table-responsive shadow-sm">
                            <table class="table table-hover table-borderless">
                                <thead>
                                    <tr class="table-primary">
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Kategori</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $no = 1;
                                        foreach($kategori as $row){
                                    ?>
                                    <tr>
                                        <th scope="row"><?= $no++ ?>.</th>
                                        <td><?= $row->nama ?></td>
                                        <td><?= $row->date ?></td>
                            
                                        <td>
                                            <a href="<?= base_url('admin/kategori_menu/edit_kategori/'.$row->id_kategori) ?>" class="btn btn-circle btn-rounded btn-primary"><i class="fa fa-edit" ></i> </a>
                                            <a href="<?= base_url('admin/kategori_menu/delete_kategori/'.$row->id_kategori) ?>" class="btn btn-circle btn-rounded btn-danger"><i class="fa fa-trash"></i> </a>
                                            
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </div>
            </div>
		</div>


<!-- Tambah Kategori -->
<div class="modal fade" id="tambahKategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/kategori_menu/tambah_kategori') ?>" method="post">
        	<div class="form-group">
	            <label class="form-control-label">Nama Kategori</label>
	            <input type="text" class="form-control" name="nama" aria-describedby="name" placeholder="Nama Kategori" required="">
	             <?= form_error('nama', '<small class="text-danger" style="color: red;">','</small>'); ?>
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

