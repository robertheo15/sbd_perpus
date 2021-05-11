    <div class="main-panel">
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <?php Flasher::flash(); ?>
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                  </div>
                  <p class="card-category">TOTAL BUKU</p>
                  <h3 class="card-title"><?= $data['totalBook']['COUNT(id_book)']; ?>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-warning"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">store</i>
                  </div>
                  <p class="card-category">TOTAL MEMBER</p>
                  <h3 class="card-title"><?= $data['totalMember']['COUNT(id_user)']; ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title d-inline">About</h4>
                  <a class="btn btn-light float-right" href="<?= BASEURL; ?>/admin/addAbout">Tambah About</a>

                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>No</th>
                      <th>Info</th>
                      <th>Address</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Aksi</th>
                    </thead>
                    <tbody>
                      <?php $i = 1;
                      foreach ($data['abouts'] as $about) : ?>
                        <tr>
                          <td><?= $i++; ?></td>
                          <td><?= $about['info']; ?></td>
                          <td><?= $about['address']; ?></td>
                          <td><?= $about['email']; ?></td>
                          <td><?= $about['phone']; ?></td>
                          <td><a href="<?= BASEURL; ?>/admin/detailAbout/<?= $about['id_about']; ?>" class="btn btn-primary">edit</a>
                            <a href="<?= BASEURL; ?>/admin/deleteAbout/<?= $about['id_about']; ?>" class="btn btn-danger ml-2">hapus</a>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title d-inline">Social</h4>
                  <a class="btn btn-light float-right" href="<?= BASEURL; ?>/admin/addSocial">Tambah Social Media</a>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>No</th>
                      <th>Url</th>
                      <th>Icon Class</th>
                      <th>a Class</th>
                      <th>Usernane</th>
                      <th>Aksi</th>
                    </thead>
                    <tbody>
                      <?php $i = 1;
                      foreach ($data['socials'] as $social) : ?>
                        <tr>
                          <td><?= $i++; ?></td>
                          <td><?= $social['url']; ?></td>
                          <td><?= $social['icon_class']; ?></td>
                          <td><?= $social['a_class']; ?></td>
                          <td><?= $social['username']; ?></td>
                          <td><a href="<?= BASEURL; ?>/admin/detailSocial/<?= $social['id_social']; ?>" class="btn btn-primary">edit</a>
                            <a href="<?= BASEURL; ?>/admin/deleteSocial/<?= $social['id_social']; ?>" class="btn btn-danger ml-2">hapus</a>
                          </td>
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