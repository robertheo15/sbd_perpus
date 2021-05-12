    <div class="main-panel">
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-10">
              <h1 class="text-light">Laporan</h1>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>No</th>
                      <th>Name</th>
                      <th>Id buku</th>
                      <th>Judul Buku</th>
                      <th>Dari Tanggal</th>
                      <th>Sampai Tanggal</th>
                    </thead>
                    <tbody>
                      <?php $i = 1;
                      foreach ($data['reports'] as $report) : ?>
                        <tr>
                          <td><?= $i++; ?></td>
                          <td><?= $report['first_name'] . ' ' . $report['last_name']; ?></td>
                          <td><?= $report['id_book']; ?></td>
                          <td><?= $report['title_book']; ?></td>
                          <td><?= $report['date_from']; ?></td>
                          <td><?= $report['date_to']; ?></td>
                        </tr>
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