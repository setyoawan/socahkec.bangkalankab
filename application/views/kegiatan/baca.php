<?php
//BACASELENGKAPNYA DI HALAMAN USER
$id_kegiatan = abs(intval($_GET['id']));
$query = "SELECT * FROM kegiatan WHERE id = '$id_kegiatan' LIMIT 1";
$row = $this->db->query($query)->row_array();


//ARTIKEL K E G I A T A N
$jumlahDataPerHalaman = 6;
$querytampil = "SELECT * FROM artikel ORDER by id DESC LIMIT $jumlahDataPerHalaman";
$user = $this->db->query($querytampil)->result_array();

?>


<!DOCTYPE html>
<html lang="en">
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

<body>
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
                    <img src="<?= base_url('assets/img/lg.png'); ?>" alt="">
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
                    <li><a href="<?= base_url('user'); ?>" class="scroll">Beranda</a></li>
                    
                    <li><a href="<?= base_url('user'); ?>#process" class="scroll">Layanan</a></li>
                    <li><a href="<?= base_url('user'); ?>#works" class="scroll">Galeri Foto</a></li>
                    <li><a href="<?= base_url('user'); ?>#vismis" class="scroll">Visi Misi</a></li>
                    <li><a href="<?= base_url('user/lakip'); ?>">Lakip & Renstra</a></li>
                    <li><a href="<?= base_url('user/struktur'); ?>">Struktur Organisasi</a></li>
                   
                    
                </ul>
            </nav><!-- /.navbar-collapse -->
        </div>
    </header>
    <div class="home-banner fullscreen" >
        <div class="dark-overlay"></div>
        <div class="banner-content dtable fullscreen">
            <div class="content-inner dtablecell">
                <div class="container">
                    <h1>Website Socah</h1>
                    <p>Portal Berita dan Informasi Masyarakat Socah</p>
                </div>
            </div>
        </div>
    </div>
</head>

<div id="process" class="process sectionbaca">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-8">
                <div class="panel panel-default mb-4">
                    <div class="panel-heading post-thumb">
                        <img src="<?= base_url('assets/img/artikelkegiatan/') . $row['gambar']; ?>" alt="" class="img-responsive">
                    </div>
                    <div class="panel-body post-body artikelbaru">
                        <h2><?php echo $row["judul_kegiatan"]; ?></h2>
                        <p align="center"><?php echo '<em>' . date('j, F Y', strtotime($row['tgl_kegiatan'])) . '</em>'; ?></p>
                    
                        <p align="justify"><?php echo $row["isi_kegiatan"]; ?></p>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4">

                <div class="panel panel-default shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="panel-heading py-3">
                        <h3 class="m-0 font-weight-bold text-dark"><i class="icon-documents"></i>&nbspArtikel Terbaru</h3>
                    </div>
                    <!-- Card Body -->
                    <div class="panel-body post-body">
                        <?php foreach ($user as $ar) : ?>
                            <a href="<?= base_url('artikel/'); ?>loadartikel?id=<?= $ar['id']; ?>" class="text-primary"> <i class="icon-book-open"></i> <?php echo substr($ar["judul_artikel"], 0, 50); ?></a>
                            </p>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
<footer class="footer">
            <div class="container text-center wow zoomIn">
                <div class="social-icons clearfix">
                    <a class="facebook" href="https://m.facebook.com/kecamatan.socah?ref=bookmarks">
                        <i class="fab fa-facebook"></i> 
                    </a>
                    
                    <!--instagram-->
                    <a class="linkedin" href="https://www.instagram.com/kecamatansocah/">
                        <i class="fab fa-instagram"></i> 
                    </a>

                    <a class="twitter" href="https://twitter.com/KecamatanSocah?s=08">
                        <i class="fab fa-twitter-square"></i> 
                    </a>
                 
                    
                    <!--
                    <a class="googleplus" href="">
                        <i class="icon-googleplus"></i>
                    </a>
                    -->   
                    
                </div> 

                <div class="copyright">
                    <p>Copyright&copy;<a href="<?= base_url('user'); ?>">Kecamatan Socah</a>,<?= date('Y'); ?></p>
                </div>
            </div>
        </footer>


        <!--
        JavaScripts
        ========================== -->
        


        <script src=" <?= base_url('assets/'); ?>js/vendor/jquery-1.11.1.min.js"></script>
        <script src=" <?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
        <script src=" <?= base_url('assets/'); ?>js/owl.carousel.js"></script>
        <script src=" <?= base_url('assets/'); ?>js/wow.min.js"></script>
        <script src=" <?= base_url('assets/'); ?>js/jquery.justifiedGallery.min.js"></script>
        <script src=" <?= base_url('assets/'); ?>js/script.js"></script>
        <script src=" <?= base_url('assets/'); ?>js/main.js"></script>
        
    </body>
</html>

