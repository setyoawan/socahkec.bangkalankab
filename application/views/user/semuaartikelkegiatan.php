<?php

$jumlahDataPerHalaman = 10;

//lakip
$querytampil = "SELECT * FROM artikel ORDER by id DESC LIMIT $jumlahDataPerHalaman";
$user = $this->db->query($querytampil)->result_array();

//renstra
$querytampil = "SELECT * FROM kegiatan ORDER by id DESC LIMIT $jumlahDataPerHalaman";
$user2 = $this->db->query($querytampil)->result_array();

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
        
        <!-- 1. Add latest jQuery and fancybox files -->
        <script src="<?= base_url('assets/'); ?>fancybox/jquery-3.4.1.js"></script>
        <link rel="stylesheet" href="<?= base_url('assets/'); ?>fancybox/dist/jquery.fancybox.min.css"/>
        <script src="<?= base_url('assets/'); ?>fancybox/dist/jquery.fancybox.min.js"></script>

        <!--CSS ============================================= -->
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
                    <img src="<?= base_url('assets/img/lg2.png'); ?>" alt="">
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




    <div id="#" class="process sectionbaca">
        <div class="container">
            <div class="row">

                <div class="baca">
                    
                    <h2>artikel dan kegiatan socah</h2>
                    <!-- 2 br yang di tenggelamkan-->
                </div>
                
                    <!-- experience -->
                    <div class="row">
                    <div class="col-xs-12 col-sm-6 ">
                        <div class="exp-block2">
                            <h3> <i class="icon-documents"></i>Artikel</h3>
                            <ul class="list-none">
                            <?php foreach ($user as $row) : ?>
                                <li> 
                                    <h4><?php echo substr($row["judul_artikel"], 0, 50); ?></h4>
                                    <span><?php echo '<em>' . date('j, F Y', strtotime($row['tgl_artikel'])) . '</em>'; ?></span>
                                    <p><?php echo substr($row["isi_artikel"], 0, 150); ?></p>
                                    <a target="_blank" href="<?= base_url('artikel/'); ?>loadartikel?id=<?= $row['id']; ?>">Baca Selengkapnya</a>
                                    
                                </li>
                            <?php endforeach; ?>        
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="exp-block2">
                            <h3> <i class="icon-book-open"></i>Kegiatan</h3>
                            <ul class="list-none">
                            <?php foreach ($user2 as $row2) : ?>
                                <li> 
                                    <h4><?php echo substr($row2["judul_kegiatan"], 0, 50); ?></h4>
                                    <span><?php echo '<em>' . date('j, F Y', strtotime($row2['tgl_kegiatan'])) . '</em>'; ?></span>
                                    <p align="justify"><?php echo substr($row2["isi_kegiatan"], 0, 150); ?></p>
                                    <a target="_blank" href="<?= base_url('kegiatan/'); ?>loadkegiatan?id=<?= $row2['id']; ?>">Baca Selengkapnya</a>
                                
                                    
                                </li>
                            <?php endforeach; ?>                            
                            </ul>
                        </div>
                    </div>       
                </div>
            </div>
            <br>
            <br>
                
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
         <script type="text/javascript">
            ${"[data-fancybox]"}.fancybox({});
            
        </script>
        
    </body>
</html>
