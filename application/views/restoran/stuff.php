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
						<li class="nav-item active"><a class="nav-link" href="<?= base_url('stuff') ?>">Stuff</a></li>
						
						
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
					<h1>Stuff</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Stuff -->
	<div class="stuff-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Stuff</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
			</div>
			<div class="row">
                <?php foreach($team as $row){ ?>
                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="<?= base_url('assets/uploads/team/'.$row->gambar) ?>">
                            <ul class="social">
                                <li><a href="<?= $row->link_fb ?>" class="fa fa-facebook"></a></li>
                    
        
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title"><?= $row->nama ?></h3>
                            <span class="post"><?= $row->pekerjaan ?></span>
                        </div>
                    </div>
                </div>
            <?php } ?>

               
            </div>
		</div>
	</div>
	<!-- End Stuff -->
	
	