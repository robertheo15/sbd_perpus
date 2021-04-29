   <div class="main-panel">
     <div class="content">
       <div class="container-fluid">
         <div class="row">
           <div class="col-10">
             <h1 class="text-light">Daftar Buku</h1>
             <?php Flasher::flash(); ?>
           </div>
           <div class="col-2">
             <a class="btn btn-light" href="<?= BASEURL; ?>/admin/addBook">Tambah Buku</a>
           </div>
         </div>
         <div class="row">
           <div class="col-lg-12 col-md-12">
             <div class="card">
               <div class="card-body table-responsive">
                 <table class="table table-hover">
                   <thead class="text-warning">
                     <th>No id</th>
                     <th>Gambar</th>
                     <th>Judul buku</th>
                     <th>Penulis</th>
                     <th>Tahun</th>
                     <th>Tipe buku</th>
                     <th>Jumlah</th>
                     <th>Harga</th>
                     <th>Aksi</th>
                   </thead>
                   <tbody>
                     <?php $i = 1;
                      foreach ($data['books'] as $book) : ?>
                       <tr>
                         <td><?= $i++; ?></td>
                         <td><?= $book['name_picture']; ?> </td>
                         <td><?= $book['title_book']; ?></td>
                         <td><?= $book['author_name']; ?></td>
                         <td><?= $book['year_book']; ?></td>
                         <td><?= $book['book_type']; ?></td>
                         <td><?= $book['quantity']; ?></td>
                         <td><?= $book['book_price']; ?></td>
                         <td>
                           <div class="row">
                             <div class="col-12">
                               <a href="<?= BASEURL; ?>/admin/edit/<?= $book['id_book']; ?>" class="btn btn-primary">edit</a>
                               <a href="<?= BASEURL; ?>/admin/delete/<?= $book['id_book']; ?>" class="btn btn-danger">hapus</a>
                             </div>
                           </div>
                         </td>
                       <?php endforeach; ?>
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