<nav class="navbar navbar-expand-xxl navbar-light bg-light">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<div class="navbar-nav">
			<a class="nav-item nav-link text-black navlink <?= $aktif == 'home' ? 'active' : '' ?>" href="index.php">HOME</a>
			<a class="nav-item nav-link text-orange navlink <?= $aktif == 'artikel' ? 'active' : '' ?>" href="artikel.php">ARTIKEL</a>
			<a class="nav-item nav-link text-red navlink <?= $aktif == 'siswa' ? 'active' : '' ?>" href="siswa.php">PENDIRI & PURNA</a>
			<a class="nav-item nav-link text-black navlink <?= $aktif == 'guru' ? 'active' : '' ?>" href="guru.php">PENGURUS</a>
			<a class="nav-item nav-link text-black navlink <?= $aktif == 'jurusan' ? 'active' : '' ?>" href="jurusan.php">BIDANG</a>
			<a class="nav-item nav-link text-black navlink <?= $aktif == 'ekskul' ? 'active' : '' ?>" href="ekskul.php">TERAS PENGURUS</a>
			<a class="nav-item nav-link text-black navlink <?= $aktif == 'visi_misi' ? 'active' : '' ?>" href="visi_misi.php">VISI MISI</a>
			<a class="nav-item nav-link text-black navlink <?= $aktif == 'bukutamu' ? 'active' : '' ?>" href="bukutamu.php">BUKU TAMU</a>
			<a class="nav-item nav-link text-black navlink <?= $aktif == 'tentang_website' ? 'active' : '' ?>" href="tentang_website.php">TENTANG WEBSITE</a>
		</div>
	</div>
</nav>