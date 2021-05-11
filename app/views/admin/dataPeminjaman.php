    <div class="main-panel">
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <h1 class="text-light">Data Peminjaman Terlambat</h1>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>No</th>
                      <th>Nama</th>
                      <th>No hp</th>
                      <th>ID Buku</th>
                      <th>Hari Terlambat</th>
                      <th>Denda</th>
                    </thead>
                    <tbody>
                      <?php $i = 1;
                      foreach ($data['books'] as $user) : ?>
                        <?php if ($user['date_to'] < date("Y-m-d")) : ?>
                          <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $user['first_name'] . ' ' . $user['last_name']; ?></td>
                            <td><?= $user['phone_number']; ?></td>
                            <td><?= $user['id_book']; ?></td>
                            <td><?= $user['date_to']; ?></td>
                            <td>Rp10.000</td>
                          </tr>
                        <?php
                          continue;
                        endif; ?>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>