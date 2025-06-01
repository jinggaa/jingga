<?php include 'header.php'; ?>
<div class="container mt-5">
  <div class="card mx-auto shadow" style="max-width: 400px;">
    <div class="card-body">
      <h4 class="card-title text-center mb-4">Form Login</h4>
      <form action="success.php" method="POST">
        <div class="mb-3">
          <label class="form-label">Nama</label>
          <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" name="email" class="form-control" required>
        </div>
        <div class="d-grid">
          <button type="submit" class="btn btn-primary">Login</button>
          <button type="reset" class="btn btn-secondary mt-2">Reset</button>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
