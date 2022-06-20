<nav class="container navbar navbar-inverse">
  <div class="navbar-header">
    <a class="navbar-brand" href="<?= base_url() ?>">Inicio</a>
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">

      <?php if (isset($_SESSION['persona']) && $_SESSION['persona']->nombre == 'admin') : ?>



      <?php endif; ?>



    </ul>
  </div>
</nav>