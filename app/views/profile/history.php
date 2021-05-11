<!-- Data Administrasi -->
<section class="" id="" style="margin-top: -50px;">
  <div class="container">
    <div class="row">
      <h2 class="section-title">Riwayat Peminjaman</h2>
      <hr class="divider my-4" />
    </div>
    <div class="row">
      <div class="col-12">
        <h4 class="my-3">Sedang Dipinjam</h4>
        <hr class="" />
        <div class="table-responsive-sm">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">No Order</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Tanggal Peminjaman</th>
                <th scope="col">Deadline pengembalian</th>
                <th scope="col">Dikembalikan tanggal</th>
                <th scope="col">Denda</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1;
              foreach ($data['history'] as $history) : ?>
                <tr>
                  <th scope="row"><?= $history['id_order']; ?></th>
                  <td><?= $history['title_book']; ?></td>
                  <td><?= $history['date_from']; ?></td>
                  <td><?= $history['date_to']; ?></td>
                  <td>
                    <?= $history['date_return']; ?></td>
                  <td><?php if ($history['date_to'] <= date("Y-m-d")) {
                        echo 'Rp10.000';
                      } else {
                        echo 'Rp0';
                      } ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>