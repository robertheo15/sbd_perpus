<div class="mb-3">
  <input type="hidden" class="form-control" id="idAbout" name="idAbout" value="<?= $data['about']['id_about']; ?>">
  <label for="info" class="form-label">Info</label>
  <textarea class="form-control" id="info" name="info" rows="5"><?= $data['about']['info']; ?></textarea>
</div>
<div class="mb-3">
  <label for="address" class="form-label">Alamat</label>
  <input type="text" class="form-control" id="address" name="address" value="<?= $data['about']['address']; ?>">
</div>
<div class="mb-3">
  <label for="email" class="form-label">Email</label>
  <input type="text" class="form-control" id="email" name="email" value="<?= $data['about']['email']; ?>">
</div>
<div class="mb-3">
  <label for="phone" class="form-label">Phone</label>
  <input type="number" class="form-control" id="phone" name="phone" value="<?= $data['about']['phone']; ?>">
</div>
<button type="submit" class="btn btn-primary">Edit</button>