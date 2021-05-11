<!-- Data Administrasi -->
<section class="" id="" style="margin-top: -50px;">
  <div class="container">
    <div class="row">
      <h2 class="section-title">Check out</h2>
      <hr class="divider my-4" />
    </div>
    <div class="row">
      <div class="col-12">
        <form action="<?= BASEURL; ?>/order/checkout" method="POST">
          <div class="table-responsive-sm">
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Judul Buku</th>
                  <th scope="col">Tanggal Peminjaman</th>
                  <th scope="col">Wajib dikembalikan tanggal</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1;
                foreach ($data['carts'] as $cart) :
                ?>
                  <tr>
                    <th scope="row"><?= $i++;; ?></th>
                    <td><?= $cart['title_book']; ?></td>
                    <?php $date = date("Y-m-d");
                    $newDate = strtotime("+7 day", strtotime($date)); ?>
                    <td><?= $date ?></td>
                    <td><?= date("Y-m-d", $newDate); ?></td>
                  </tr>
                <?php endforeach;
                ?>
              </tbody>
            </table>
          </div>
          <div class="col-1">
            <button id="submit" type="submit" value="submit">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>