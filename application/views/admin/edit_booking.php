<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Booking</h1>
            <a href="<?= base_url('admin/kategori_menu') ?>" class="d-none d-sm-inline-block btn  btn-danger shadow-sm" ><i class="fas fa-backward fa-sm text-white-50"></i> Kembali</a>
          </div>

          <!-- Content Row -->
          <div class="row">
          	<div class="col-md-6">
          		<?php foreach($detail as $row) { ?>

          		<div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Booking</h4>
                            <form class="mt-3" action="<?= base_url('admin/booking/update_booking_aksi') ?>" method="post" enctype="multipart/form-data">
                                
                                <div class="form-group">
                                    <label class="form-control-label">Nama</label>
                                    <input type="hidden" name="id_booking" value="<?= $row->id_booking ?>">
                                    <input type="text" class="form-control" name="nama" aria-describedby="name" value="<?= $row->nama ?>">                        
                                     <?= form_error('nama', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Email</label>
                          
                                    <input type="text" class="form-control" name="email" aria-describedby="name" value="<?= $row->email ?>">                        
                                     <?= form_error('email', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">No. HP</label>
                          
                                    <input type="text" class="form-control" name="no_hp" aria-describedby="name" value="<?= $row->no_hp ?>">                        
                                     <?= form_error('no_hp', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Status</label>
                          
                                    <select name="status" class="custom-select" id="inputGroupSelect01">
                                        <option selected><?= $row->status ?></option>
                                        
                                        <option value="Pending">Pending</option>
                                        <option value="Selesai">Selesai</option>
                              
                                        
                                        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">No. Meja</label>
                          
                                    <select name="no_meja" class="custom-select" id="inputGroupSelect01">
                                        <option selected><?= $row->no_meja ?></option>
                                        
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        
                                        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Berapa Orang</label>
                          
                                    <select name="select_person" class="custom-select" id="inputGroupSelect01">
                                        <option value="<?= $row->select_person ?>"><?= $row->select_person ?></option>
                                        
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        
                                        
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label">Waktu Booking</label>
                          
                                    <input type="time" class="form-control" name="time" value="<?= $row->time ?>">                        
                                     <?= form_error('time', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Tanggal Booking</label>
                          
                                    <input type="date" class="form-control" name="date" value="<?= $row->date ?>">                        
                                     <?= form_error('date', '<small class="text-danger" style="color: red;">','</small>'); ?>
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