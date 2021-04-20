<div class="container my-3">
  <h2>Register</h2>
  <form method="POST" action="<?= BASEURL; ?>/auth/register">
    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input type="text" placeholder="Username *" id="username" name="username" class="form-control">
      <span class="invalidFeedback">
        <?= $data['usernameError']; ?>
      </span>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" placeholder="Email *" name="email" class="form-control" id="email">
      <span class="invalidFeedback">
        <?= $data['emailError']; ?>
      </span>
    </div>
    <!-- <div class="mb-3">
      <label for="firstName" class="form-label">Nama depan</label>
      <input type="text" placeholder="Nama depan *" name="firstName" class="form-control" id="firstName">
      <span class="invalidFeedback">
        <?= $data['emailError']; ?>
      </span>
    </div>
    <div class="mb-3">
      <label for="lastName" class="form-label">Nama belakang</label>
      <input type="text" placeholder="Nama belakang *" name="lastName" class="form-control" id="lastName">
      <span class="invalidFeedback">
        <?= $data['emailError']; ?>
      </span>
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
    </div> -->
    <div class="mb-3">
      <label for="password" class="form-label">Kata sandi</label>
      <input type="password" placeholder="Kata sandi *" name="password" class="form-control">
      <span class="invalidFeedback">
        <?= $data['passwordError']; ?>
      </span>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Konfirmasi kata sandi</label>
      <input type="password" placeholder="Konfirmasi kata sandi *" name="confirmPassword" class="form-control">
      <span class="invalidFeedback">
        <?= $data['confirmPasswordError']; ?>
      </span>
    </div>

    <button id="submit" type="submit" value="submit">Submit</button>
    <p class="options">Not registered yet? <a href="<?= BASEURL; ?>/auth/register">Create an account!</a></p>
  </form>
</div>