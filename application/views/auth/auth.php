<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lelang </title>
    <link rel="stylesheet" href="<?= base_url('landing/') ?>assets/vendors/animate.css/animate.min.css">
    <link rel="stylesheet" href="<?= base_url('landing/') ?>assets/vendors/slick-carousel/slick.css">
    <link rel="stylesheet" href="<?= base_url('landing/') ?>assets/vendors/slick-carousel/slick-theme.css">
    <link rel="stylesheet" href="<?= base_url('landing/') ?>assets/css/style.css">
    <script src="<?= base_url('landing/') ?>assets/vendors/jquery/jquery.min.js"></script>
    <script src="<?= base_url('landing/') ?>assets/js/loader.js"></script>
</head>

<body>
    <div class="oleez-loader"></div>
    <header class="oleez-header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.html"><img src="<?= base_url('landing/') ?>assets/images/" alt=""></a>
            <ul class="nav nav-actions d-lg-none ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#!" data-toggle="searchModal">
                        <img src="<?= base_url('landing/') ?>assets/images/search.svg" alt="search">
                    </a>
                </li>
                <li class="nav-item nav-item-cart">
                    <a class="nav-link" href="#!">
                        <span class="cart-item-count">0</span>
                        <img src="<?= base_url('landing/') ?>assets/images/shopping-cart.svg" alt="cart">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#!" data-toggle="offCanvasMenu">
                        <img src="<?= base_url('landing/') ?>assets/images/social icon@2x.svg" alt="social-nav-toggle">
                    </a>
                </li>
            </ul>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#oleezMainNav"
                aria-controls="oleezMainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </header>

    <main>
        <section>
            <div class="container wow fadeIn">
                <div id="oleezLandingCarousel" class="oleez-landing-carousel carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="<?= base_url('landing/') ?>assets/images/lelanglu.jpg" alt="First slide" class="w-100">
                            <div class="carousel-caption">
                                <h2 data-animation="animated fadeInRight"><span>Lelang</span></h2>
                                <h2 data-animation="animated fadeInRight"><span> Shoes</span></h2>
                              
                                <a href="<?= base_url('auth/login') ?>" class="carousel-item-link" data-animation="animated fadeInRight">SILAHKAN LOGIN</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="<?= base_url('landing/') ?>assets/images/lelanglu.jpg" alt="Second slide" class="w-100">
                            <div class="carousel-caption">
                                <h2 data-animation="animated fadeInRight"><span>Lelang</span></h2>
                                <h2 data-animation="animated fadeInRight"><span>Shoes</span></h2>
                                <a href="<?= base_url('auth') ?>" class="carousel-item-link" data-animation="animated fadeInRight">SILAHKLAN LOGIN</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="<?= base_url('landing/') ?>assets/images/lelanglu.jpg" alt="Third slide" class="w-100">
                            <div class="carousel-caption">
                                <h2 data-animation="animated fadeInRight"><span>Lelang</span></h2>
                                <h2 data-animation="animated fadeInRight"><span>Shoes</span></h2>
                                <a href="<?= base_url('auth') ?>" class="carousel-item-link" data-animation="animated fadeInRight">SILAHKAN LOGIN</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="<?= base_url('landing/') ?>assets/images/lelanglu.jpg" alt="Fourth slide" class="w-100">
                            <div class="carousel-caption">
                                <h2 data-animation="animated fadeInRight"><span>Lelang</span></h2>
                                <h2 data-animation="animated fadeInRight"><span>Shoes</span></h2>
                                <a href="<?= base_url('auth') ?>" class="carousel-item-link" data-animation="animated fadeInRight">MARI LOGIN</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container-fluid">

<div class="row text-center mt-5">
    <!-- begin Page Content -->

    <?php foreach ($auction as $auc) : ?>
        <?php if($auc->status == 'dibuka'): ?>
        <div class="card ml-5 mb-5" style="width: 30rem;">
            <div class="card-body">
           
            <img src="<?= base_url() . '/assets/images/barang/' . $auc->gambar ?>" class="card-img-top" alt="...">
            <div class="card-body">
                    <h5 class="card-title"><?= $auc->nama_barang; ?></h5>
                    <h5 class="card-title"><?= $auc->deskripsi_barang; ?></h5>
            </div>
            <strong>Rp.<?= $auc->harga_awal?></strong>
            <br><br>
            <a href="<?= base_url('petugas/auction/detail_barang/') . $auc->id_lelang; ?>" class="btn btn-primary">Lihat Detail</a>
        </div>
    </div>
         <?php endif; ?> 
         <?php endforeach; ?> 
</div>

</div>
        <section class="oleez-landing-section oleez-landing-section-about">
            <div class="container">
                <div class="oleez-landing-section-content">
                    <div class="oleez-landing-section-verticals wow fadeIn">
                        <span class="number">01</span> <img src="<?= base_url('landing/') ?>assets/images/" alt="" height="12px">
                    </div>
                    <div class="row landing-about-content wow fadeInUp">
                        <div class="col-md-6">
                            <h2>Welcome to Lelang Shoes</h2>
                        </div>
                        <div class="col-md-6">
                            <p>Pada situs anda bisa mendapatkan barang dengan harga yang anda inginkan dengan harga terjangkau. </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 landing-about-feature wow fadeInUp">
                            <img src="<?= base_url('landing/') ?>assets/images/icon_1.svg" alt="document" class="about-feature-icon">
                            <h5 class="about-feature-title">Lebih murah dan berkualitas</h5>
                            <p class="about-feature-description">Lelang Shoes memberikan layanan jual beli dengan cepat</p> 
                        </div>
                        <div class="col-md-4 landing-about-feature wow fadeInUp">
                            <img src="<?= base_url('landing/') ?>assets/images/icon_2.svg" alt="document" class="about-feature-icon">
                            <h5 class="about-feature-title">Menjaga kepuasan anda</h5>
                            <p class="about-feature-description">Kami siap menerima kritik dan saran apabila ada pelayanan yang belum sesuai di hati anda</p>
                        </div>
                        <div class="col-md-4 landing-about-feature wow fadeInUp">
                            <img src="<?= base_url('landing/') ?>assets/images/icon_3.svg" alt="document" class="about-feature-icon">
                            <h5 class="about-feature-title">Barang dijamin berkualitas</h5>
                            <p class="about-feature-description">Kami akan memberikan pelayanan yang baik dan menjaga kualitas barang anda</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    
    <!-- Modals -->
    <!-- Full screen search box -->
    <script src="<?= base_url('landing/') ?>assets/vendors/popper.js/popper.min.js"></script>
    <script src="<?= base_url('landing/') ?>assets/vendors/wowjs/wow.min.js"></script>
    <script src="<?= base_url('landing/') ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url('landing/') ?>assets/vendors/slick-carousel/slick.min.js"></script>
    <script src="<?= base_url('landing/') ?>assets/js/main.js"></script>
    <script src="<?= base_url('landing/') ?>assets/js/landing.js"></script>
    <script>
        new WOW({mobile: false}).init();
    </script>
</body>


</html>