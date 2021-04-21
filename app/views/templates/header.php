<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
    <!-- Title -->
    <title><?= $data['judul']; ?> </title>
    <!-- Favicon -->
    <link href="<?= BASEURL; ?>/images/favicon.ico" rel="icon" type="image/x-icon" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
    <link href="<?= BASEURL; ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Mobile Menu -->
    <link href="<?= BASEURL; ?>/css/mmenu.css" rel="stylesheet" type="text/css" />
    <link href="<?= BASEURL; ?>/css/mmenu.positioning.css" rel="stylesheet" type="text/css" />
    <!-- Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="<?= BASEURL; ?>/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- Start: Header Section -->
    <header class="navbar-dark bg-dark">
        <nav class="container navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?= BASEURL; ?>/home">PinjamBuku-Aja</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/home">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASEURL; ?>/book">Buku</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#footer">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#footer">Hubungi</a>
                        </li>
                        <?php if (!empty($_SESSION)) : ?>
                            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <?= $_SESSION['username']; ?>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Profil</a></li>
                                            <li><a class="dropdown-item" href="<?= BASEURL; ?>/auth/logout">Logout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                        <?php else : ?>
                            <li class="nav-item">
                                <a href="<?= BASEURL; ?>/auth/login" class="nav-link"><i class="fa fa-lock"></i> Login / Register</a>
                            </li>
                        <?php endif; ?>

                    </ul>

                </div>
            </div>
            </div>
            </div>
        </nav>
    </header>
    <!-- End: Header Section -->