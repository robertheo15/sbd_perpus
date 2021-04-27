<div class="mt-5"></div>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h4>Tambah produk</h4>
        </div>

        <div class="card-body">
          <form action="/admin/store" method="POST" autocomplete="off" enctype="multipart/form-data">
            <?= include('forms/form-control.php'); ?>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>