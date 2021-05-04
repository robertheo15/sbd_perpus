<!-- Data Administrasi -->
<section class="" id="" style="margin-top: -50px;">
  <div class="container">
    <div class="row">
      <h2 class="section-title">Profile</h2>
      <hr class="divider my-4" />
    </div>
    <div class="row">
      <div class="col-12">
        <div class="main-panel">
          <div class="content">
            <div class="container-fluid justify-content-center">
              <div class="row">
                <div class="col-12">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-12 col-md-12">
                        <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
                          <div class="mb-3 row">
                            <div class="col-12">
                              <label for="email" class="form-label">Email</label>
                              <input type="email" placeholder="Email *" name="email" class="form-control" id="email">
                              <span class="invalidFeedback">
                                <?= $data['emailError']; ?>
                              </span>
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <div class="col-6">
                              <label for="firstName" class="form-label">Nama depan</label>
                              <input type="text" placeholder="Nama depan *" name="firstName" class="form-control" id="firstName">
                              <span class="invalidFeedback">
                                <?= $data['emailError']; ?>
                              </span>
                            </div>
                            <div class="col-6">
                              <label for="lastName" class="form-label">Nama belakang</label>
                              <input type="text" placeholder="Nama belakang *" name="lastName" class="form-control" id="lastName">
                              <span class="invalidFeedback">
                                <?= $data['emailError']; ?>
                              </span>
                            </div>
                          </div>
                          <div class="mb-3">
                            <label for="address" class="form-label">Alamat</label>
                            <input type="text" placeholder="Alamat *" name="address" class="form-control" id="address">
                            <span class="invalidFeedback">
                              <?= $data['emailError']; ?>
                            </span>
                          </div>
                          <div class="mb-3">
                            <label for="phoneNumber" class="form-label">No. Hp</label>
                            <input type="text" placeholder="No. Hp *" name="phoneNumber" class="form-control" id="phoneNumber">
                            <span class="invalidFeedback">
                              <?= $data['emailError']; ?>
                            </span>
                          </div>
                          <div class="mb-3 row">
                            <div class="col-12">
                              <label for="password" class="form-label">Kata sandi</label>
                              <input type="password" placeholder="Kata sandi *" name="password" class="form-control">
                              <span class="invalidFeedback">
                                <?= $data['passwordError']; ?>
                              </span>
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <div class="col-12">
                              <label for="email" class="form-label">Konfirmasi kata sandi</label>
                              <input type="password" placeholder="Konfirmasi kata sandi *" name="confirmPassword" class="form-control">
                              <span class="invalidFeedback">
                                <?= $data['confirmPasswordError']; ?>
                              </span>
                            </div>
                          </div>
                          <div class="row justify-content-center">
                            <div class="col-1">
                              <button id="submit" type="submit" value="submit">Submit</button>
                            </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>