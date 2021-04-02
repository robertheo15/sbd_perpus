<!-- <div class="container">
    <div class="jumbotron mt-4">
        <h1 class="display-4">Selamat Datang di Website saya</h1>
        <p class="lead">Halo, nama saya <?= $data['nama']; ?></p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </div>
</div> -->
<!-- Start: Slider Section -->
<div data-ride="carousel" class="carousel slide" id="home-v1-header-carousel">

    <!-- Carousel slides -->
    <div class="carousel-inner">
        <div class="item active">
            <figure>
                <img alt="Home Slide" src="images/header-slider/home-v1/header-slide.jpg" />
            </figure>
            <div class="container">
                <div class="carousel-caption">
                    <h3>Online Learning Anytime, Anywhere!</h3>
                    <h2>Discover Your Roots</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humor, or randomized words.</p>
                </div>
            </div>
        </div>
        <div class="item">
            <figure>
                <img alt="Home Slide" src="images/header-slider/home-v1/header-slide.jpg" />
            </figure>
            <div class="container">
                <div class="carousel-caption">
                    <h3>Online Learning Anytime, Anywhere!</h3>
                    <h2>Discover Your Roots</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humor, or randomized words.</p>
                </div>
            </div>
        </div>
        <div class="item">
            <figure>
                <img alt="Home Slide" src="images/header-slider/home-v1/header-slide.jpg" />
            </figure>
            <div class="container">
                <div class="carousel-caption">
                    <h3>Online Learning Anytime, Anywhere!</h3>
                    <h2>Discover Your Roots</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humor, or randomized words.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#home-v1-header-carousel" data-slide="prev"></a>
    <a class="right carousel-control" href="#home-v1-header-carousel" data-slide="next"></a>
</div>
<!-- End: Slider Section -->

<!-- Start: Search Section -->
<section class="search-filters">
    <div class="container">
        <div class="filter-box center">
            <h3>What are you looking for at the library?</h3>
            <form action="http://libraria.demo.presstigers.com/index.html" method="get">
                <div class="col-md-10 col-sm-12">
                    <div class="form-group">
                        <label class="sr-only" for="keywords">Search by Keyword</label>
                        <input class="form-control" placeholder="Search by Keyword" id="keywords" name="keywords" type="text">
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="form-group">
                        <input class="form-control" type="submit" value="Search">
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- End: Search Section -->

<!-- Start: Welcome Section -->
<section class="welcome-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="welcome-wrap">
                    <div class="welcome-text">
                        <h2 class="section-title">Welcome to Our Library</h2>
                        <span class="underline left"></span>
                        <p class="lead">The standard chunk of Lorem Ipsum used since</p>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humor, or randomized words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humor, or non-characteristic words etc.</p>
                        <a class="btn btn-primary" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="facts-counter">
                    <ul>
                        <li class="bg-light-green">
                            <div class="fact-item">
                                <div class="fact-icon">
                                    <i class="ebook"></i>
                                </div>
                                <span>Books<strong class="fact-counter">45780</strong></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="welcome-image"></div>
</section>
<!-- End: Welcome Section -->
<br>
<br>
<div class="books-gird container" id="books">
    <div class="center-content">
        <h2 class="section-title">Our Books</h2>
        <span class="underline center"></span>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    <ul>
        <li>
            <figure>
                <img src="images/books-media/gird-view/book-media-grid-01.jpg" alt="Book">
                <figcaption>
                    <p><strong>Book Name</strong></p>
                    <p><strong>Author : </strong>Gerlado Julius Halim</p>
                </figcaption>
            </figure>
            <div class="book-list-icon red-icon"></div>
            <div class="single-book-box">
                <div class="post-detail">
                    <div class="optional-links">
                        <ul>
                            <li>
                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Rent This Book">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <header class="entry-header">
                        <h3 class="entry-title"><a href="books-media-detail-v1.html">Book Name</a></h3>
                        <ul>
                            <li><strong>Author : </strong>Geraldo Julius Halim</li>
                            <li><strong>ISBN : </strong>16237184261783</li>
                        </ul>
                    </header>
                    <div class="entry-content">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    </div>
                    <footer class="entry-footer">
                        <a class="btn btn-primary" href="books-media-detail-v1.html">Read More</a>
                    </footer>
                </div>
            </div>
        </li>
    </ul>
</div>

<!-- Start: Social Network -->
<section class="social-network section-padding">
    <div class="container">
        <div class="center-content">
            <h2 class="section-title">Follow Us</h2>
            <span class="underline center"></span>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <ul>
            <li>
                <a class="facebook" href="#" target="_blank">
                    <span>
                        <i class="fa fa-facebook-f"></i>
                    </span>
                </a>
            </li>
            <li>
                <a class="twitter" href="#" target="_blank">
                    <span>
                        <i class="fa fa-twitter"></i>
                    </span>
                </a>
            </li>
            <li>
                <a class="google" href="#" target="_blank">
                    <span>
                        <i class="fa fa-google-plus"></i>
                    </span>
                </a>
            </li>
            <li>
                <a class="rss" href="#" target="_blank">
                    <span>
                        <i class="fa fa-rss"></i>
                    </span>
                </a>
            </li>
            <li>
                <a class="linkedin" href="#" target="_blank">
                    <span>
                        <i class="fa fa-linkedin"></i>
                    </span>
                </a>
            </li>
            <li>
                <a class="youtube" href="#" target="_blank">
                    <span>
                        <i class="fa fa-youtube"></i>
                    </span>
                </a>
            </li>
        </ul>
    </div>
</section>
<!-- End: Social Network -->