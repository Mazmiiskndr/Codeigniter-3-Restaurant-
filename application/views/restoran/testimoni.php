<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="<?= base_url('assets/template_restoran/') ?>images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item "><a class="nav-link" href="<?= base_url('') ?>">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="<?= base_url('menu') ?>">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="<?= base_url('reservation') ?>">Reservation</a></li>
						<li class="nav-item"><a class="nav-link" href="<?= base_url('gallery') ?>">Gallery</a></li>
						<li class="nav-item"><a class="nav-link" href="<?= base_url('stuff') ?>">Stuff</a></li>
						
						<li class="nav-item "><a class="nav-link" href="<?= base_url('contact') ?>">Contact</a></li>
						<li class="nav-item active"><a class="nav-link" href="<?= base_url('testimoni') ?>">Testimoni</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->

	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">

				<div class="col-lg-12">

					<h1>Testimoni</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Reservation -->
	<div class="reservation-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<?= $this->session->flashdata('pesan'); ?>
						<h2>Testimoni</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<form  method="post" action="<?= base_url('testimoni/tambah_testimoni_aksi') ?>">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" class="form-control" id="name" name="nama" placeholder="Your Name" required data-error="Please enter your name">
									<div class="help-block with-errors"></div>
								</div>                                 
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" placeholder="Your Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
									<div class="help-block with-errors"></div>
								</div> 
							</div>

							<div class="col-md-12">
								<div class="form-group"> 
									<textarea class="form-control" id="message" placeholder="Your Message" rows="4" data-error="Write your message" required name="deskripsi"></textarea>
									<div class="help-block with-errors"></div>
								</div>
								<div class="text-center">
										<button class="btn btn-common"  type="submit">Send Message</button>
								</div>
							</div>
						</div>            
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End Reservation -->
	
	