<?php 

$jumlahDataPerHalaman = 3;

//ARTIKEL
$querytampil = "SELECT * FROM artikel ORDER by id DESC LIMIT $jumlahDataPerHalaman";
$user = $this->db->query($querytampil)->result_array();

//KEGIATAN
$querytampil = "SELECT * FROM kegiatan ORDER by id DESC LIMIT $jumlahDataPerHalaman";
$user2 = $this->db->query($querytampil)->result_array();

//GALERI
$jumlahDataFoto = 6;
$querygaleritampil = "SELECT * FROM galeri  ORDER by id DESC LIMIT $jumlahDataFoto";
$galeri = $this->db->query($querygaleritampil)->result_array();
?>


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


        <!-- 1. Add latest jQuery and fancybox files -->
        <script src="<?= base_url('assets/'); ?>fancybox/jquery-3.4.1.js"></script>
        <link rel="stylesheet" href="<?= base_url('assets/'); ?>fancybox/dist/jquery.fancybox.min.css"/>
        <script src="<?= base_url('assets/'); ?>fancybox/dist/jquery.fancybox.min.js"></script>

        
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
                    <a class="navbar-brand scroll" href="#beranda">
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
                        <li><a href="#beranda" class="scroll">Beranda</a></li>
                        
                        <li><a href="#process" class="scroll">Layanan</a></li>
                        <li><a href="#works" class="scroll">Galeri Foto</a></li>
                        <li><a href="#vismis" class="scroll">Visi Misi</a></li>
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
        

        <!-- about -->
        <div id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-5 wow fadeInLeft">
                        <div class="author-thumb text-center">
                            <img class="img-responsive" src="<?= base_url('assets/img/bangkalan.png'); ?>" alt="">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-7 wow fadeInRight">
                        <div class="about-intro">
                            <h3>Sejarah kecamatan socah.</h3>
                            <h5 align="justify">Socah, artinya adalah mata. Ini adalah bahasa Madura yang cukup halus dalan kasta. Kenapa di pakai dengan kata-kata yang halus? Ini ada kaitannya dengan asal usul desa ini.</h5>
                            <span class="divider"></span>
                            <p align="justify">Kecamatan socah adalah sebuah kecamatan yang terletak 15 menit dari kota Bangkalan dan
                            pelabuhan Kamal.

                            Asal muasal nama desa Socah adalah karena dulu Pangeran Jokotole pulang membawa istrinya setelah memenangkan perang. Istri Pangeran Jokotole itu tidak sesempurna dirinya, karena istrinya itu buta, tapi beliau sayang dan cinta pada istrinya. Namun menurut sejarahnya, istrinya itu akhirnya bisa melihat lagi setelah Pangeran Jokotole menancapkan sebuah tongkat di sebuah desa, sampai pada akhirnya setelah tongkatnya di tancapkannya itu keluar mata air, dan beliau menyuruh istrinya cuci muka di mata air tersebut. Setelah istri pangeran Jokotole mencuci mukanya, akhirnya istrinya bisa melihat.  Desa tersebut kemudian diberi nama socah.
                            Dari situlah asal muasal desa socah yang artinya mata dalam Bahasa Maduranya.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- // about -->

        <!-- process -->
        <div id="process" class="process section">
            <div class="container">
                <div class="row">
                    <div class="title">
                        <h2>Layanan Socah</h2>
                        <p>Pelayanan yang di berikan pemerintah kecamatan socah,<br> untuk memudahkan masyarakat socah mempersiapkan persyaratan untuk membuat dokumen penting</p>
                    </div>
                    
                    <div class="proecess-block col-xs-12 col-sm-6 col-md-4">
                        <div class="process-inner">
                            <div class="icon-holder">
                                <i class="icon-mobile"></i>

                            </div>
                            <h4 class="heading">Ktp</h4>
                            <p class="description">layanan dan prosedur untuk pembuatan kartu tanda penduduk dari pemerintah kecamatan socah bangkalan.<br><a target="_blank" href="<?= base_url('user/layanan1'); ?>">Baca Selengkapnya</a></p>
                        </div>
                    </div>
                    
                    <div class="proecess-block col-xs-12 col-sm-6 col-md-4">
                        <div class="process-inner">
                            <div class="icon-holder">
                                <i class="icon-document"></i>
                            </div>
                            <h4 class="heading">Akta</h4>
                            <p class="description">layanan dan prosedur untuk pembuatan akta catatan sipil dari pemerintah kecamatan socah bangkalan.<br>
                                <a target="_blank" href="<?= base_url('user/layanan2'); ?>">Baca Selengkapnya</a></p>
                        </div>
                    </div>
                    
                    <div class="proecess-block col-xs-12 col-sm-6 col-md-4 ">
                        <div class="process-inner">
                            <div class="icon-holder">
                                <i class="icon-notebook"></i>
                            </div>
                            <h4 class="heading">Sktm</h4>
                            <p class="description">layanan dan prosedur untuk pembuatan surat keterangan tidak mampu dari pemerintah kecamatan socah bangkalan.<br><a target="_blank" href="<?= base_url('user/layanan3'); ?>">Baca Selengkapnya</a></p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- // process -->
        

        <!-- experience -->
        <div id="experience" class="experience section">
            <div class="gradien"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 ">
                        <div class="exp-block">
                            <h3> <i class="icon-documents"></i>Berita Terbaru</h3>
                            <ul class="list-none">
                            <?php foreach ($user as $row) : ?>
                                <li> 
                                    <h4><?php echo substr($row["judul_artikel"], 0, 50); ?></h4>
                                    <span><?php echo '<em>' . date('j, F Y', strtotime($row['tgl_artikel'])) . '</em>'; ?></span>
                                    <p><?php echo substr($row["isi_artikel"], 0, 150); ?></p>
                                    <a target="_blank" href="artikel/loadartikel?id=<?= $row['id']; ?>">Baca Selengkapnya</a>
                                    
                                </li>
                            <?php endforeach; ?>        
                            </ul>

                            <br>
                            
                            <a class="btn btn-theme-color2" href="<?= base_url('user/semuaartikelkegiatan')?>">Artikel Lainnya</a> 
                            
                            
                        </div>
                        
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="exp-block">
                            <h3> <i class="icon-book-open"></i>Kegiatan</h3>
                            <ul class="list-none">
                            <?php foreach ($user2 as $row2) : ?>
                                <li> 
                                    <h4><?php echo substr($row2["judul_kegiatan"], 0, 50); ?></h4>
                                    <span><?php echo '<em>' . date('j, F Y', strtotime($row2['tgl_kegiatan'])) . '</em>'; ?></span>
                                    <p align="justify"><?php echo substr($row2["isi_kegiatan"], 0, 150); ?></p>
                                    <a target="_blank" href="kegiatan/loadkegiatan?id=<?= $row2['id']; ?>">Baca Selengkapnya</a>
                                    
                                </li>
                            <?php endforeach; ?>                            
                            </ul>

                            <br>
                            
                            <a class="btn btn-theme-color2" href="<?= base_url('user/semuaartikelkegiatan')?>">Kegiatan Lainnya</a> 
                            

                        </div>  
                     
                    </div>
                </div>
            </div>
        </div>
            
        <!-- // experience -->


        <!-- works -->
        <div id="works" class="works section">
            <div class="gradient"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title fadeInDown">
                            <h2>Galeri Kegiatan</h2>
                            <p>Halo semuanya, ini merupakan galeri foto kegiatan masyarakat socah</p>
                        </div>

                        <div class="works-gallery">
                            <div id="mygallery" >
                            <?php foreach ($galeri as $row3) : ?>
                                <div>
                                <a href="<?= base_url('assets/img/kegiatan/') . $row3['foto']; ?>" data-fancybox="group" data-caption="<?= substr($row3["judul"], 0, 128); ?>">
                                    <img src="<?= base_url('assets/img/kegiatan/') . $row3['foto']; ?>" alt="">
                                    <div class="item-musk">
                                        <div class="item-caption">
                                            <h5><?php echo '<em>' . date('j, F Y', strtotime($row3['tgl_foto'])) . '</em>'; ?></h5>
                                            <p><?php echo substr($row3["judul"], 0, 50); ?></p>
                                        </div>
                                    </div> 
                                </a>

                                    
                        
                                </div>
                                <?php endforeach; ?>
                                <!-- other images... -->
                            </div>
                        </div>
                    </div>
                        

                </div>
            </div>
            <br>
            <center>
            <a class="btn btn-theme-color" href="<?= base_url('user/semuagallery')?>">Galeri Lainnya</a> 
            </center>
        </div>


        <!-- // works -->

        <!-- testimonial -->
        <div id="vismis" class="testimonial">
            <div class="dark-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="title fadeInDown">
                        <h2>Visi Misi Kecamatan Socah</h2>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 ">
                        <!-- Set up your HTML -->
                        <div class="testimonial-slider">
                          <div>
                                <p>
                                  Teciptanya tatanan masyarakat yang trampil dan prima didalam penyelenggaraan pemerintahan, pembangunan dan kemasyarakatan di lingkungan Kecamatan Socah.
                                </p>
                                <span>Visi</span>
                                <div class="signature">
                                    <img src="<?= base_url('assets/img/gn.png'); ?>" alt="">
                                </div>
                          </div>
                          <div>
                                <p>
                                    1.  Meningkatkan kwalitas sumber daya manusia yang religius dengan didukung oleh tingkat kwalitas pendidikan dan kesehatan masyarakat yang tinggi.
                                    <br>
                                    2.   Menjamin terselenggaranya tata kepemerintahan yang baik, demokratis, adil, prima dan bebas KKN.
                                    <br>
                                    3.  Peningkatan Pembangunan kerakyataaan dalam mendukung ekonomi daerah dan investasi;
                                    <br>
                                    4.  Menigkatkan profesionalisme aparat yg didukung oleh sistem dan prosedur yang memadai;
                                    <br>
                                    5.  Meningkatkan pembinaan dan pemberdayaan terhadap aparatur pemerintahan desa.

                                </p>
                                <span>Misi</span>
                            
                          </div>
                        </div>

                            
                    </div>
                </div>
            </div>
        </div>
        <!-- // testimonial -->

        <!-- contact 

        <div id="contact" class="contact section">
            <div class="container">
                <div class="row">
                    <div class="title fadeInDown">
                        <h2>Hubungi Kami</h2>
                        <p>Layanan hubungi kami dibuat untuk memudahkan komunikasi, <br> antara masyarakat dengan pemerintahan kecamatan socah kabupaten Bangkalan </p>
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8">
                        
                        
                        <div  class="contact-form">
                            
                            <input type="text" name="nama" id="nama" required='required' placeholder="Nama Lengkap">
                            <input type="text" name="alamat" id="alamat" required='required' placeholder="Alamat">
                            <input type="email" name="email" id="email" required='required' placeholder="Email">
                            

                            <textarea name="kritiksaran" id="kritiksaran" required='required' cols="30" rows="10" class="input-message" placeholder="Kritik dan Saran"></textarea>

                            <button type="submit"  class="btn btn-theme-color">KIRIM</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="contact-info">
                            <h4>INFORMASI KONTAK</h4>
                            <p>Informasi kontak untuk menghubungi kami, jika ada pertayaan atau kebutuhan terkait masyarakat kecamatan socah anda bisa menghubungi kami </p>
                        </div>
                        <div class="contact-address">
                            <h4>Alamat</h4>
                            <ul>
                                <li class="address">Jl. Jend. A. Yani<br>
                                No.2, Socah, Telang, Kamal,<br>Kabupaten Bangkalan, Jawa Timur 69162</li>
                                  

                                <li class="phone">[ +00 ] 012 000 088</li>
                                <li class="email">socah@gmail.com</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        // contact -->


        <div id="contact" class="contact section">
            <div class="container">
                <div class="row">
                    <div class="title fadeInDown">
                        <h2>Hubungi Kami</h2>
                        <p>Layanan hubungi kami dibuat untuk memudahkan komunikasi, <br> antara masyarakat dengan pemerintahan kecamatan socah kabupaten Bangkalan </p>
                    </div>                    
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-8">

                         <iframe width="100%" height="450px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.306231246644!2d112.70602411416067!3d-7.090456594879358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd806a3cc663f63%3A0xbb305d477a611124!2sKantor+Kecamatan+Socah!5e0!3m2!1sid!2sid!4v1556185736061!5m2!1sid!2sid"></iframe>
                        
                        <!--

                        <form action="<?= base_url('user/kritiksaran'); ?>" method="post">
                        <?= $this->session->flashdata('pesan'); ?>
                          <div class="form-row">
                            <div class="form-group col-md-4">
                                <input class="form-control" type="text" name="nama" id="nama" placeholder="Nama Lengkap">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group col-md-4">
                                <input class="form-control" type="text" name="alamat" id="alamat" placeholder="Alamat">
                                <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group col-md-4">
                                <input class="form-control" type="text" name="email" id="email" placeholder="Email">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                          </div>
                          <div class="form-group col-xs-12">
                                <textarea class="form-control" type="text" name="kritiksaran" id="kritiksaran" cols="30" rows="10" class="input-message" placeholder="Kritik dan Saran"></textarea>
                           </div>
                           <div class="form-group col-xs-12">
                                <button  type="submit"  class="btn btn-theme-color">KIRIM</button>
                           </div>
                        </form>
                    -->
                    </div>

                     
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="contact-info">
                            <h4>INFORMASI KONTAK</h4>
                            <p>Informasi kontak untuk menghubungi kami, jika ada pertayaan atau kebutuhan terkait masyarakat kecamatan socah anda bisa menghubungi kami </p>
                        </div>
                        <div class="contact-address">
                            <h4>Alamat</h4>
                            <ul>
                                <li class="address">Jl. Jend. A. Yani<br>
                                No.2, Socah, Telang, Kamal,<br>Kabupaten Bangkalan, Jawa Timur 69161</li>
                                  

                                <li class="phone">[ 031 ] 301 227 3</li>
                                <li class="email">socah@bangkalankab.go.id</li>
                            </ul>
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
                    <p>Copyright&copy;<a href="">Kecamatan Socah</a>,<?= date('Y'); ?></p>
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



       