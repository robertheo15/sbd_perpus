<!-- Start: Products Section -->
<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <main id="main" class="site-main">
      <div class="booksmedia-detail-main">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="booksmedia-detail-box pt-5">
                <div class="single-book-box">
                  <div class="post-thumbnail">
                    <div class="book-list-icon yellow-icon"></div>
                    <img alt="Book" src="<?= BASEURL . '/uploads/' . $data['books']['name_picture']; ?>" />
                  </div>
                  <div class="post-detail">
                    <div class="optional-links">
                      <ul>
                        <li>
                          <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add To Cart">
                            <i class="fa fa-shopping-cart"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                    <header class="entry-header">
                      <h2 class="entry-title"><?= $data['books']['title_book']; ?></h2>
                      <ul>
                        <li><strong>Penulis:</strong> <?= $data['books']['title_book']; ?></li>
                        <li><strong>Tahun Rilis:</strong> <?= $data['books']['year_book']; ?></li>
                      </ul>
                    </header>
                  </div>
                </div>
                <p><strong>Summary:</strong> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>
<!-- End: Products Section -->