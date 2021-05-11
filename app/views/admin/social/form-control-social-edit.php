<div class="mb-3">
  <input class="form-control" type="hidden" id="idSocial" name="idSocial" value="<?= $data['social']['id_social']; ?>">
  <label for="url" class="form-label">Url</label>
  <input type="text" class="form-control" id="url" name="url" required value="<?= $data['social']['url']; ?>">
</div>
<div class="mb-3">
  <label for="aClass" class="form-label">a Class</label>
  <input type="text" class="form-control" id="aClass" name="aClass" value="<?= $data['social']['a_class']; ?>">
</div>
<div class="mb-3">
  <label for="iconClass" class="form-label">Icon Class</label>
  <input type="text" class="form-control" id="iconClass" name="iconClass" value="<?= $data['social']['icon_class']; ?>">
</div>
<div class="mb-3">
  <label for="username" class="form-label">Username</label>
  <input type="text" class="form-control" id="username" name="username" value="<?= $data['social']['username']; ?>">
</div>
<button type="submit" class="btn btn-primary">Edit</button>