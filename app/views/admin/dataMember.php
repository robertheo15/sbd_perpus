<div class="main-panel">
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-6">
          <h1 class="text-light">Data Member</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="card">
            <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class="text-warning">
                  <th>ID</th>
                  <th>Name</th>
                  <th>Username</th>
                  <th>Role</th>
                  <th>Register Date</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  <?php $i = 1;
                  foreach ($data['users'] as $user) : ?>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><?= $user['first_name'] . ' ' . $user['last_name']; ?></td>
                      <td><?= $user['username']; ?></td>
                      <td><?= $user['id_role']; ?></td>
                      <td><?= $user['register_date']; ?></td>
                      <td>
                        <div class="row">
                          <div class="col-12">
                            <a href="#" class="btn btn-primary">edit</a>
                            <a href="#" class="btn btn-danger ml-2">hapus</a>
                          </div>
                        </div>
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