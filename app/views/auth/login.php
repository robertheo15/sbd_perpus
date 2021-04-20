<div class="container my-3">
  <form action="<?= BASEURL; ?>/auth/login" method="POST">
    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input type="text" class="form-control" id="username" name="username">
      <span class="invalidFeedback">
        <?= $data['usernameError']; ?>
      </span>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password">
      <span class="invalidFeedback">
        <?= $data['passwordError']; ?>
      </span>
      <br>
      <a href="<?= BASEURL; ?>/auth/register">Daftar sekarang</a>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>