<div class="main-panel">
  <div class="content">
    <div class="container-fluid justify-content-center">
      <div class="row">
        <div class="col-12">
          <h1 class="text-light">Tambah About</h1>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <form action="<?= BASEURL; ?>/admin/storeAbout" method="POST" autocomplete="off" enctype="multipart/form-data">
              <?= include('form-control-about.php'); ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>