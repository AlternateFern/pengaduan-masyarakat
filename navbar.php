<ul class="navbar nav nav-underline" style="background-color: rgba(160, 243, 146, 1);">
  <div class="container-fluid">
    <li class="nav-item">
      <a class="navbar-brand <?php if ($activepage == "index") { ?> activeindex <?php } ?>" href="index.php" style="font-size:30px; font-weight:bold; color:white;"">PM</a>
      <a class="brand-subtitle" href="index.php"> > > Pengaduan Masyarakat </a>
    </li>
    <div class="d-flex">
      <li class="nav-item">
        <a class="nav-link <?php if ($activepage == "isi_pengaduan") { ?> active <?php } ?>" aria-current="page" href="isi_pengaduan.php">Buat Laporan</a>
      </li>
      <li class="nav-item" style="margin-right: 30px;">
        <a class="nav-link <?php if ($activepage == "profile") { ?> active <?php } ?>" href="profile.php">Profil</a>
      </li>
      
    </div>
  </div>
</ul>