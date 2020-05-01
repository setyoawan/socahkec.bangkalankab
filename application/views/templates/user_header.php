<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Author Meta -->
        <meta name="author" content="Themefisher">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="utf-8">

        <!-- Site Title -->
        <title><?= $title; ?></title>


        <!-- Favicon -->
        <link href="<?= base_url('assets'); ?>/img/bangkalan.png" rel="icon">
        <link href="<?= base_url('assets'); ?>/img/bangkalan.png" rel="apple-touch-icon">

        <!--
        <link href='https://fonts.googleapis.com/css?family=Raleway:200,300,400,700,900,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto:200,300,400,900,700,500,300' rel='stylesheet' type='text/css'>
        -->
		
        <!--
        CSS
        ============================================= -->
        <link href="<?= base_url('assets'); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/owl.carousel.css">
        <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/justifiedGallery.min.css">
        <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/et-font.css">
        <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/animate.css">
        <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/owl.carousel.css">
        <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/owl.theme.css">
        <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/main.css">
		
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->		
    </head>
    <body id="beranda">
        <!-- #preloader -->
        <!-- end #preloader -->
        <!-- #preloader -->
        <div id="preloader">
            <div class="preloader loading">
                <span class="slice"></span>
                <span class="slice"></span>
                <span class="slice"></span>
                <span class="slice"></span>
                <span class="slice"></span>
                <span class="slice"></span>
            </div>
        </div>
        <!-- end #preloader -->
        <header class="site-header navbar-fixed-top navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?= base_url('user'); ?>">
                        <img src="<?= base_url('assets/img/logo.png'); ?>" alt="">
                    </a>
                </div>
                
                <div class="nav-toggle hidden-xs">
                    <button class="toggle-btn">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <nav class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav main-manu">
                        <li><a href="#beranda" class="scroll">Beranda</a></li>
                        <li><a href="#about" class="scroll">Sejarah</a></li>
                        <li><a href="#process" class="scroll">Layanan</a></li>
                        <li><a href="#works" class="scroll">Galeri Foto</a></li>
                        <li><a href="<?= base_url('user/struktur'); ?>">Struktur Organisasi</a></li>
                        <li><a href="<?= base_url('user/petalokasi') ?>">Peta Lokasi</a></li>
                        
                    </ul>
                </nav><!-- /.navbar-collapse -->
            </div>
        </header>
        <div class="home-banner fullscreen" >
            <div class="gradient"></div>
            <div class="banner-content dtable fullscreen">
                <div class="content-inner dtablecell">
                    <div class="container">
                        <h1>Website Socah</h1>
                        <p>Portal Berita dan Informasi Masyarakat Socah</p>
                    </div>
                </div>
            </div>
        </div>
        