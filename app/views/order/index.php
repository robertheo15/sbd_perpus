<!-- Data Administrasi -->
<section class="" id="" style="margin-top: -50px;">
  <div class="container">
    <div class="row">
      <h2 class="section-title">Check out</h2>
      <hr class="divider my-4" />
    </div>
    <div class="row">
      <div class="col-12">
        <form action="<?= BASEURL; ?>/order/checkout" method="POST">
          <div class="table-responsive-sm">
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Judul Buku</th>
                  <th scope="col">Tanggal Peminjaman</th>
                  <th scope="col">Wajib dikembalikan tanggal</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Cara Mencari Pacar</td>
                  <td>26 Juni 2021</td>
                  <td>30 Juni 2021</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Cara Mencari Pacar Edisi 2</td>
                  <td>26 Juni 2021</td>
                  <td>30 Juni 2021</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Cara Mencari Pacar Edisi 3</td>
                  <td>26 Juni 2021</td>
                  <td>30 Juni 2021</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-1">
            <button id="submit" type="submit" value="submit">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>