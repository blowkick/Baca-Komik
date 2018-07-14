<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Baca Komik</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo base_url('welcome'); ?>">Home</a></li>
				<li><a href="<?php echo base_url('welcome/chapterTerbaru'); ?>">Chapter Terbaru</a></li>
				<li><a href="<?php echo base_url('welcome/daftarManga'); ?>">Daftar Manga</a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo base_url('daftar_user/') ?>">Daftar</a></li>
				<li><a href="<?php echo base_url('login_user/'); ?>">Login</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>