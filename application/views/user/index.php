<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Selamat Datang</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="<?= base_url('assets/css/core.css');?>">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="<?= base_url('assets/css/shortcode/shortcodes.css');?>">
    <!-- Theme main style -->
    <link rel="stylesheet" href="<?= base_url('assets/style.css');?>">
    <!-- Responsive css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/responsive.css');?>">
    <!-- customizer style css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style-customizer.css');?>">
 
    <link rel="icon" href="<?=base_url()?>/images/logo.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <!-- Modernizr JS -->
    <script src="<?= base_url('assets/js/vendor/modernizr-2.8.3.min.js');?>"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.35.1/js/bootstrap-dialog.min.js"></script>
</head>
    <style type="text/css">
        .header-section{
          background: url('<?= base_url("assets/images/1.jpg");?>')no-repeat scroll center center;
          background-size: cover;
          background-attachment: fixed;
        }
        .header-section.height-vh{
          height: 100vh;
        }
        .header-section,.menu .search-bar,.b-date,.select-book{
          position: relative
        }
        .footer{
          background: url('<?= base_url("assets/images/back.jpg");?>')no-repeat scroll center center;
          background-size: cover;
          background-attachment: fixed;
        }
        .footer-bg-opacity {
          background: rgba(0, 0, 0, 0.8) none repeat scroll 0 0;

        }
    </style>
<body>
    <div class="preloader">
        <div class="loading-center">
            <div class="loading-center-absolute">
                <div class="object object_one"></div>
                <div class="object object_two"></div>
                <div class="object object_three"></div>
            </div>
        </div>
    </div>
   
    <div class="wrapper">
        <!--Header section start-->
        <div class="header-section">
            <div class="bg-opacity"></div>
            <div class="top-header sticky-header">
                <div class="top-header-inner">
                    <div class="container">
                        <div class="mgea-full-width">
                            <div class="row">
                                <div class="col-md-2 col-sm-2 col-xs-12">
                                    <div class="logo mt-15">
                                        <a href="index.html"><img src="<?=base_url()?>/images/logo1a.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-md-10 col-sm-10 hidden-xs">
                                    <div class="header-top ptb-10">
                                        
                                    </div>
                                    <div class="menu mt-25">
                                        <div class="menu-list hidden-sm hidden-xs">
                                            <nav>
                                                <ul style="text-align: right;">
                                                    <li><a href="#">Home</a></li>
                                                    <?php
                                                        foreach ($trans as $data ) {
                                                            if ($data->email == $this->session->userdata('email')): 
                                                    ?>
                                                    <li><a href="<?= site_url('Auth/konfirmasi/'.$data->id)?>">Pemesanan</a></li>
                                                    <?php  endif; } ?>
                                                    <li><a href="<?= site_url('Auth/logout')?>">Logout</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
                 <!-- Mobile menu start -->
                <div class="mobile-menu-area hidden-lg hidden-md">
                    <div class="container">
                        <div class="col-md-12">
                            <nav id="dropdown">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Konfirmasi Pemesanan</a></li>
                                <li><a href="<?= site_url('Auth/logout')?>">Logout</a></li>
                            </ul>
                        </nav>
                        </div>
                    </div>
                </div>
                <!-- Mobile menu end -->
            </div>
            <!--Welcome secton-->
            <div class="welcome-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-5">
                            <div class="booking-box">
                                <div class="booking-title">
                                     <br><br><br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br><br>
                                </div>
                                <div class="booking-form">
                                    <br><br><br><br><br><br><br><br><br><br>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-7">
                            <div class="welcome-text">
                                <p style="color: #fff; font-size: 18px;">Halo<b style="color: #fff; font-size: 16px; font-weight: bold;">  <?= $this->session->userdata('nama');?></b></p>
                                <h2>
                                <span>SELAMAT DATANG DI</span> <span class="coloring">TAMA HOTEL</span>
                                </h2>
                                <h1 class="cd-headline clip">
                                    <span>KEUNGGULAN</span>
                                    <span class="cd-words-wrapper coloring">
                                        <b class="is-visible"> LOKASI</b>
                                        <b>KAMAR</b>
                                        <b>FASILITAS</b>
                                    </span>
                                </h1>
                                <p class="welcome-desc">Kami menyediakan tempat yang baik, lokasi yang strategis, ruangan yang nyaman dan pelayanan prima <br>Sehingga pelanggan tidak merasa kapok setelah datang kesini</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header section end -->
        <!-- searchbar Start -->
            <div class="search-bar animated slideOutUp">
                <div class="table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <div class="search-form-wrap">
                                        <button class="close-search"><i class="mdi mdi-close"></i></button>
                                        <form action="#">
                                            <input type="text" placeholder="Search here..." value="Search here..."/>
                                            <button class="search-button" type="submit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- search bar End -->
        <!--About Section Title start-->
        <div class="about-section text-center ptb-80 white_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title mb-80">
                            <h2>Tentang <span>TamaHotel</span></h2>
                            <p>Aplikasi ini dirancang untuk memenuhi UKK RPL 2022</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="about-chondo">
                            <div class="about-member">
                                <h3>Muhammad Rizky Pratama</h3>
                                <h5 class="mb-0">Developer</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--About Section end-->
        <!--Our Room start-->
        <div class="our-room text-center ptb-80 white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title mb-75">
                            <h2>Jenis <span>Kamar</span></h2>
                            <p>Kami menyediakan berbagai jenis kamar, baik untuk sendiri, pasangan, maupun keluarga</p>
                        </div>
                    </div>
                </div>
                <div class="our-room-show">
                    <div class="row">
                        <div class="carousel-list">
                            <?php foreach($kamar as $kmr) {?>
                            <div class="col-md-4">
                                <div class="single-room">
                                    <div class="room-img">
                                        <a href="#"><img src="<?=base_url()?>/images/kamar/<?=$kmr->gambar?>" alt=""></a>
                                    </div>
                                    <div class="room-desc">
                                        <div class="room-name">
                                            <h3><a href="#"><?=$kmr->jenis?></a></h3>
                                        </div>
                                        <div class="room-rent">
                                            <h6>Rp <?=$kmr->harga?> / <label>Malam</label></h6>
                                        </div>
                                        <div class="room-name">
                                            <p><?=$kmr->fasilitas?></p>
                                        </div>
                                    </div>
                                    <div class="room-desc">
                                        <div class="room-book">
                                            <a href="<?=site_url('Auth/booking/'.$kmr->id)?>">Pesan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           <?php } ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Our room end-->
        <!--Footer start -->


        
        
        