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
						<li class="nav-item"><a class="nav-link" href="<?= base_url('') ?>">Home</a></li>
						<li class="nav-item active"><a class="nav-link" href="<?= base_url('menu') ?>">Menu</a></li>
						<li class="nav-item "><a class="nav-link" href="<?= base_url('reservation') ?>">Reservation</a></li>
						<li class="nav-item "><a class="nav-link" href="<?= base_url('gallery') ?>">Gallery</a></li>
						<li class="nav-item"><a class="nav-link" href="<?= base_url('stuff') ?>">Stuff</a></li>
						<li class="nav-item"><a class="nav-link" href="<?= base_url('contact') ?>">Contact</a></li>
						<li class="nav-item"><a class="nav-link" href="<?= base_url('testimoni') ?>">Testimoni</a></li>
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
					<h1>Special Menu</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Special Menu</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
			</div>
			
		
				
				<div class="col-12 row">

					<div class="tab-content" id="v-pills-tabContent">
						
							<div class="row">
								<?php foreach($menu as $row){ ?>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="<?= base_url('assets/uploads/menu/'.$row->gambar) ?>" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4><?= $row->nama ?></h4>
											
											<p><?= $row->nama_kategori ?></p>
											<h5>Rp. <?= number_format($row->harga,0,',','.'); ?></h5>
										</div>
									</div>
								</div>
								<?php } ?>
								
						</div>
						<div class="text-center">
							<a class="btn btn-common" href="<?= base_url('reservation') ?>">Book Table</a>

							
						</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Menu -->
	
	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-center">
					<p class="lead ">
						" If you're not the one cooking, stay out of the way and compliment the chef. "
					</p>
					<span class="lead">Michael Strahan</span>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->
	
	