
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
						<li class="nav-item active"><a class="nav-link" href="<?= base_url('') ?>">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="<?= base_url('menu') ?>">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="<?= base_url('reservation') ?>">Reservation</a></li>
						<li class="nav-item"><a class="nav-link" href="<?= base_url('gallery') ?>">Gallery</a></li>
						<li class="nav-item"><a class="nav-link" href="<?= base_url('stuff') ?>">Stuff</a></li>
						
						
						<li class="nav-item"><a class="nav-link" href="<?= base_url('contact') ?>">Contact</a></li>
						<li class="nav-item"><a class="nav-link" href="<?= base_url('testimoni') ?>">Testimoni</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->

<!-- Start slides -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-left">
				<img src="<?= base_url('assets/template_restoran/') ?>images/slider-01.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> Live Dinner Restaurant</strong></h1>
							<p class="m-b-40">See how your users experience your website in realtime or view  <br> 
							trends to see any changes in performance over time.</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="<?= base_url('reservation') ?>">Reservation</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="<?= base_url('assets/template_restoran/') ?>images/slider-02.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> Live Dinner Restaurant</strong></h1>
							<p class="m-b-40">See how your users experience your website in realtime or view  <br> 
							trends to see any changes in performance over time.</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="<?= base_url('reservation') ?>">Reservation</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="<?= base_url('assets/template_restoran/') ?>images/slider-03.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> Yamifood Restaurant</strong></h1>
							<p class="m-b-40">See how your users experience your website in realtime or view  <br> 
							trends to see any changes in performance over time.</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="<?= base_url('reservation') ?>">Reservation</a></p>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->
	
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1>Welcome To <span>Live Dinner Restaurant</span></h1>
						<h4>Little Story</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit feugiat. Ut at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend luctus, odio ante sodales augue, eget lacinia lectus erat et sem. </p>
						<p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. Sed aliquam metus lorem, a pellentesque tellus pretium a. Nulla placerat elit in justo vestibulum, et maximus sem pulvinar.</p>
						<a class="btn btn-lg btn-circle btn-outline-new-white" href="<?= base_url('reservation') ?>">Reservation</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="<?= base_url('assets/template_restoran/') ?>images/about-img.jpg" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->
	
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
	<!-- End Menu -->
	
	<!-- Start Gallery -->
	<div class="gallery-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Gallery</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
					<?php foreach($gallery as $row){ ?>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="<?= base_url('assets/uploads/gallery/'.$row->gambar) ?>">
							<img class="img-fluid" src="<?= base_url('assets/uploads/gallery/'.$row->gambar) ?>" alt="Gallery Images">
						</a>
					</div>
				<?php } ?>
					
				</div>
			</div>
		</div>
	</div>
	<!-- End Gallery -->
	
	