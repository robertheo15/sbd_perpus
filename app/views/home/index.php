<div class="books-gird container" id="books">
    <div class="center-content">
        <h2 class="section-title">Popular Books</h2>
        <span class="underline center"></span>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    <ul>
        <?php foreach ($data['books'] as $book) :  ?>
            <li>
                <figure>
                    <a href="<?= BASEURL . '/book/detail/' . $book['id_book'] ?>">
                        <img src="<?= BASEURL . '/uploads/' . $book['name_picture']; ?>" alt="Book">
                    </a>
                    <figcaption>
                        <p><strong><?= $book['title_book']; ?></strong></p>
                        <p><strong>Penulis:</strong><?= $book['author_name']; ?></p>
                    </figcaption>
                </figure>
                <div class="book-list-icon red-icon"></div>
                <div class="single-book-box">
                    <div class="post-detail">
                        <!-- <div class="optional-links">
                            <ul>
                                <li>
                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Rent This Book">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div> -->
                        <header class="entry-header">
                            <h3 class="entry-title"><a href="books-media-detail-v1.html">Book Name</a></h3>
                            <ul>
                                <li><strong>Penulis : </strong><?= $book['author_name']; ?></li>
                                <li><strong>ID : </strong><?= $book['id_book'] ?></li>
                            </ul>
                        </header>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</div>