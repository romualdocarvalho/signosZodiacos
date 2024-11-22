<?php include('layouts/header.php'); ?>

<div class="container">
  <div class="zodiac-form">
    <h1 class="zodiac-title">Descubra seu Signo</h1>
    <form id="signo-form" method="POST" action="show_zodiac_sign.php">
      <div class="mb-3">
        <label for="data_nascimento" class="form-label">Data de Nascimento</label>
        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
      </div>
      <button type="submit" class="btn btn-primary w-100">Descobrir meu signo</button>
    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>