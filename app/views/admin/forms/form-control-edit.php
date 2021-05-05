  <div class="mb-3">
    <input class="form-control" type="hidden" id="idBook" name="idBook" value="<?= $data['books']['id_book']; ?>">
    <img src="<?= BASEURL . '/uploads/' . $data['books']['name_picture']; ?>" alt="dsa" width="75">
    <br>
    <label for="formFile" class="form-label">Foto cover</label>
    <input class="form-control" type="file" id="formFile" name="formFile">
  </div>

  <div class="mb-3">
    <label for="titleBook" class="form-label">Judul buku</label>
    <input type="text" class="form-control" id="titleBook" name="titleBook" required value="<?= $data['books']['title_book']; ?>">
  </div>

  <div class="mb-3">
    <label for="authorName" class="form-label">Penulis</label>
    <input type="text" class="form-control" id="authorName" name="authorName" value="<?= $data['books']['author_name']; ?>">
  </div>

  <div class="mb-3">
    <label for="yearBook" class="form-label">Tahun terbit</label>
    <input type="date" class="form-control" id="yearBook" name="yearBook" value="<?= $data['books']['year_book']; ?>">
  </div>

  <div class="mb-3">
    <label for="quantity" class="form-label">Jumlah</label>
    <input type="text" class="form-control" id="quantity" name="quantity" value="<?= $data['books']['quantity']; ?>">
  </div>

  <div class="mb-3">
    <label for="bookType" class="form-label">Tipe buku</label>
    <input type="text" class="form-control" id="bookType" name="bookType" value="<?= $data['books']['book_type']; ?>">
  </div>

  <div class="mb-3">
    <label for="bookPrice" class="form-label">Harga</label>
    <input type="text" class="form-control" id="bookPrice" name="bookPrice" value="<?= $data['books']['book_price']; ?>">
  </div>

  <button type="submit" class="btn btn-primary">Ubah</button>