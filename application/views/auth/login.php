 
  <meta charset="utf-8">
 

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center mx-auto">

      <div class="col-lg-7">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

              <div class="col-lg">
                <div class="p-5" style="margin-bottom: -40px;">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-3"><strong>Login Page</strong></h1>
                  </div>
                  <?= $this->session->flashdata('pesan'); ?>
                  <form class="user" action="<?= base_url('login') ?>" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email') ?>">
                      <?= form_error('email', '<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                      <?= form_error('password', '<small class="text-danger pl-3">','</small>'); ?>
                    </div>
              
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="<?= base_url('auth/forgotpassword') ?>">Forgot Password?</a>
                  </div>
                </div>
                <div class="text-center mb-1">
                    <a class="btn btn-sm btn-danger" href="<?= base_url('portfolio/') ?>">Back</a>
                  </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
  <div class="col-lg-12 text-center text-white">
   <p>
     Copyright &copy; <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://www.facebook.com/Miee.xtc/" class="text-warning">Moch Azmi Iskandar</a> - 2020
    </p>
  </div>



