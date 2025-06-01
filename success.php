<?php
$nama = $_POST['nama'] ?? '';
$email = $_POST['email'] ?? '';

if (empty($nama) || empty($email)) {
    header("Location: error.php");
    exit();
}

date_default_timezone_set("Asia/Jakarta");
$hari = date("l");
$tanggal = date("d-m-Y");
$jam = date("H:i:s");
include 'header.php';
?>
<div class="container mt-5">
  <div class="card mx-auto shadow" style="max-width: 500px;">
    <div class="card-body">
      <h4 class="card-title text-success text-center">Login Berhasil</h4>
      <ul class="list-group list-group-flush mt-3">
        <li class="list-group-item"><strong>Nama:</strong> <?= htmlspecialchars($nama) ?></li>
        <li class="list-group-item"><strong>Email:</strong> <?= htmlspecialchars($email) ?></li>
        <li class="list-group-item"><strong>Hari:</strong> <?= $hari ?></li>
        <li class="list-group-item"><strong>Tanggal:</strong> <?= $tanggal ?></li>
        <li class="list-group-item"><strong>Jam:</strong> <?= $jam ?></li>
      </ul>
      <div class="text-center mt-3">
        <a href="index.php" class="btn btn-outline-primary">Logout</a>
      </div>
    </div>
  </div>
</div>
</body>
</html>
