    <div class="main-panel">
      <div class="content">
        <div class="container-fluid">
          <div class="row">
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
                  <a class="btn btn-light float-right" href="#">Tambah About</a>

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
                      <tr>
                        <td>1</td>
                        <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam deserunt inventore dolore nam exercitationem magnam impedit? Ratione eum architecto quidem enim tempore mollitia fuga voluptate magnam incidunt doloribus aliquam sint quisquam non harum, eveniet dolorum ipsam possimus in corrupti omnis. Modi eligendi veniam totam corporis commodi obcaecati assumenda dolores optio, quod sapiente fac</td>
                        <td>4413</td>
                        <td>26th June 2021</td>
                        <td>29th June 2021</td>
                        <td><a href="#" class="btn btn-primary">edit</a>
                          <a href="#" class="btn btn-danger ml-2">hapus</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title d-inline">Social</h4>
                  <a class="btn btn-light float-right" href="#">Tambah Social Media</a>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>No</th>
                      <th>Url</th>
                      <th>Icon</th>
                      <th>Usernane</th>
                      <th>Aksi</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Kenneth Liem Hardadi</td>
                        <td>4413</td>
                        <td>26th June 2021</td>
                        <td><a href="#" class="btn btn-primary">edit</a>
                          <a href="#" class="btn btn-danger ml-2">hapus</a>
                        </td>

                      </tr>
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