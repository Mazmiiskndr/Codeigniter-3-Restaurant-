


 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-cogs fa-sm text-white-50"></i> Control Panel</a>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Data Menu</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah_menu ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-shopping-cart fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Data Gallery</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah_gallery ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-file fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Data Booking</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah_booking ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-retweet fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Data Testimoni</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah_testimoni ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
                                  <th scope="col">Gambar</th>
                                  <th scope="col">Nama Menu</th>
                                  <th scope="col">Kode Menu</th>
                                  <th scope="col">Harga</th>
                                  <th scope="col">Deskripsi</th>
                                  <th scope="col">Aksi</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php 
                                  $no = 1;
                                  foreach($menu as $row){
                              ?>
                              <tr>
                                  <th scope="row"><?= $no++ ?>.</th>
                                  <td><img width="60px" src="<?= base_url().'assets/uploads/menu/'.$row->gambar ?>"></td>
                                  <td><?= $row->nama ?></td>
                                  <td><?= $row->kode ?></td>
                                  <td>Rp. <?= number_format($row->harga,0,',','.'); ?></td>

                                
                                  
                                  <td><?= $row->deskripsi ?></td>
                                  
                      
                                  <td>
                                    <a href="<?= base_url('admin/menu/edit_menu/'.$row->id_menu) ?>" class="btn btn-circle btn-rounded btn-primary"><i class="fa fa-edit"></i> </a>
                      
                                      <a href="<?= base_url('admin/menu/delete_menu/'.$row->id_menu) ?>" class="btn btn-circle btn-rounded btn-danger"><i class="fa fa-trash"></i> </a>
                                      
                                  </td>
                              </tr>
                              <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-3 mb-4">
              <?= $this->session->flashdata('pesan'); ?>
            <div class="card">
                        
                  <div class="table-responsive shadow-sm ">
                      <table class="table table-hover table-borderless">
                          <thead>
                              <tr class="table-primary">
                                  <th scope="col">No</th>
                                  <th scope="col">Gambar</th>
                                  <th scope="col">Nama Team</th>
                                  <th scope="col">Pekerjaan</th>
                                  <th scope="col">No. HP</th>
                                  <th scope="col">Link FB</th>
                                  <th scope="col">Deskripsi</th>
                                  <th scope="col">Aksi</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php 
                                  $no = 1;
                                  foreach($team as $row){
                              ?>
                              <tr>
                                  <th scope="row"><?= $no++ ?>.</th>
                                  <td><img width="60px" src="<?= base_url().'assets/uploads/team/'.$row->gambar ?>"></td>
                                  <td><?= $row->nama ?></td>
                                  <td><?= $row->pekerjaan ?></td>
                                  <td><?= $row->no_hp ?></td>
                                  <td><?= $row->link_fb ?></td>
                          

                                
                                  
                                  <td><?= $row->deskripsi ?></td>
                                  
                      
                                  <td>
                                    <a href="<?= base_url('admin/team/edit_team/'.$row->id_team) ?>" class="btn btn-circle btn-rounded btn-primary"><i class="fa fa-edit"></i> </a>
                      
                                      <a href="<?= base_url('admin/team/delete_team/'.$row->id_team) ?>" class="btn btn-circle btn-rounded btn-danger"><i class="fa fa-trash"></i> </a>
                                      
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


        </div>







              
         

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->