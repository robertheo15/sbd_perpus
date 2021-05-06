<div class="container">
    <div class="books-gird">
        <ul>
            <?php foreach ($data['books'] as $book) : ?>
                <li>
                    <figure>
                        <a href="<?= BASEURL . '/book/detail/' . $book['id_book'] ?>">
                            <img src="<?= BASEURL . '/uploads/' . $book['name_picture']; ?>" alt="Book">
                        </a>
                        <figcaption>
                            <p><strong><?= $book['title_book']; ?></strong></p>
                            <p><strong>Penulis:</strong> <?= $book['author_name']; ?></p>
                            <p><strong>Tahun Rilis:</strong> <?= $book['year_book']; ?></p>
                        </figcaption>
                    </figure>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>