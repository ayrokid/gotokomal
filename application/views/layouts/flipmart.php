<!DOCTYPE html>
<html lang="en">

<head>
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="google-site-verification" content="L7bfWQWTz4h-_lQTy_ejqFG27ZaT4S62GqM84uXPVNo" />
<meta name="msvalidate.01" content="902E7AF68C55683B9FA7FBA0BE0E240E" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo name_apps(); ?></title>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo path_assets(); ?>img/icon.png" />
<meta name="description" content="Sistem Manajemen Persediaan Barang Untuk Retail, Toko Online, Drop Shipping yang mudah dan aman."/>
<meta name="keywords" content="inventory, gudang, stock, warehouse management"/>
<meta content='id' http-equiv='Content-Language'/>
<meta name='robots' content='all' />
<meta name="googlebot" content="index,follow" />
<meta name="msnbot" content="index,follow" />

<meta content='www.gotoko.id' name='author'/>
<meta content='id' name='geo.country'/>
<meta content='Indonesia' name='geo.placename'/>
<meta content='global' name='distribution'/>
<meta content='general' name='rating'/>
<meta content='Copyright @copy; 2016 <?php echo base_url(); ?> <<?php echo base_url(); ?>> All Rights Reserved.' name='copyright'/>
<meta content='1 days' name='revisit-after'/>
<meta content='0' http-equiv='expires'/>
<meta content='all' name='spiders'/>
<meta content='all' name='webcrawlers'/>
<meta content='Aeiwi, Alexa, AllTheWeb, AltaVista, AOL NetFind, Anzwers, Canada, DirectHit, Euroseek, Excite, Overture, Go, Google, HotBot, InfoMak, Kanoodle, Lycos, MaterSite, National Directory, Northern Light, SearchIt, SimpleSearch, WebsMostLinked, WebTop, What-U-Seek, AOL, Yahoo, WebCrawler, InfoSeek, Excite, Magellan, LookSmart, CNET' name='search engines'/>
<link href='<?php echo base_url(); ?>' rel='canonical'/>

<!-- facebook META -->
<meta property="og:type"   content="article" />
<meta property="og:site_name" content="<?php echo name_apps(); ?>">
<meta property="og:title"  content="<?php echo name_apps(); ?>">
<meta property="og:url"    content="<?php echo base_url(); ?>">
<meta property="og:description" content="Sistem Manajemen Toko Online, Warehouse, Retail, Drop Shipping, Reseller. Mengelola usaha toko online menjadi lebih mudah dan nyaman.">
<meta property="og:image" content='<?php echo path_assets(); ?>img/shop.jpg'>
<meta property="article:author" content="https://www.facebook.com/gotoko.id" />
<meta property="article:publisher" content="https://www.facebook.com/gotoko.id" />

<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="<?php echo base_url() ?>flipmart/assets/css/bootstrap.min.css">

<!-- Customizable CSS -->
<link rel="stylesheet" href="<?php echo base_url() ?>flipmart/assets/css/main.css">
<link rel="stylesheet" href="<?php echo base_url() ?>flipmart/assets/css/blue.css">
<link rel="stylesheet" href="<?php echo base_url() ?>flipmart/assets/css/owl.carousel.css">
<link rel="stylesheet" href="<?php echo base_url() ?>flipmart/assets/css/owl.transitions.css">
<link rel="stylesheet" href="<?php echo base_url() ?>flipmart/assets/css/animate.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>flipmart/assets/css/rateit.css">
<link rel="stylesheet" href="<?php echo base_url() ?>flipmart/assets/css/bootstrap-select.min.css">

<!-- Icons/Glyphs -->
<link rel="stylesheet" href="<?php echo base_url() ?>flipmart/assets/css/font-awesome.css">

<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>
<body class="cnt-home">

<!-- ============================================== HEADER ============================================== -->
<?php $this->load->view('contents/header'); ?>
<!-- ============================================== HEADER : END ============================================== -->
<?php if(!isset($home)){ ?>
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Login</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->
<?php } ?>
<div class="body-content outer-top-xs" id="top-banner-and-menu">
  <div class="container">
  	<div class="<?php echo (isset($class_page)) ? $class_page : ''; ?>">
    <div class="row">
		<?php if(!isset($class_page)){ ?>
      <!-- ============================================== SIDEBAR ============================================== -->
      <?php $this->load->view('contents/sidemenu'); ?>
      <!-- ============================================== SIDEBAR : END ============================================== --> 
	  <?php } ?>
      <!-- ============================================== CONTENT ============================================== -->
      <?php 
	  if(isset($content)){
      	$this->load->view($content);
	  }
      ?>
      <!-- /.homebanner-holder --> 
      <!-- ============================================== CONTENT : END ============================================== --> 
    </div>
    <!-- /.row -->
	</div>
    <!-- ============================================== BRANDS CAROUSEL ============================================== -->
    <div id="brands-carousel" class="logo-slider wow fadeInUp">
      <div class="logo-slider-inner">
        <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
          <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="<?php echo base_url() ?>flipmart/assets/images/brands/brand1.png" src="<?php echo base_url() ?>flipmart/assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item m-t-10"> <a href="#" class="image"> <img data-echo="<?php echo base_url() ?>flipmart/assets/images/brands/brand2.png" src="<?php echo base_url() ?>flipmart/assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="<?php echo base_url() ?>flipmart/assets/images/brands/brand3.png" src="<?php echo base_url() ?>flipmart/assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="<?php echo base_url() ?>flipmart/assets/images/brands/brand4.png" src="<?php echo base_url() ?>flipmart/assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="<?php echo base_url() ?>flipmart/assets/images/brands/brand5.png" src="<?php echo base_url() ?>flipmart/assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="<?php echo base_url() ?>flipmart/assets/images/brands/brand6.png" src="<?php echo base_url() ?>flipmart/assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="<?php echo base_url() ?>flipmart/assets/images/brands/brand2.png" src="<?php echo base_url() ?>flipmart/assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="<?php echo base_url() ?>flipmart/assets/images/brands/brand4.png" src="<?php echo base_url() ?>flipmart/assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="<?php echo base_url() ?>flipmart/assets/images/brands/brand1.png" src="<?php echo base_url() ?>flipmart/assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="<?php echo base_url() ?>flipmart/assets/images/brands/brand5.png" src="<?php echo base_url() ?>flipmart/assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item--> 
        </div>
        <!-- /.owl-carousel #logo-slider --> 
      </div>
      <!-- /.logo-slider-inner --> 
      
    </div>
    <!-- /.logo-slider --> 
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== --> 
  </div>
  <!-- /.container --> 
</div>
<!-- /#top-banner-and-menu --> 

<!-- ============================================================= FOOTER ============================================================= -->
<?php 
$this->load->view('contents/footer');
?>
<!-- ============================================================= FOOTER : END============================================================= --> 

<!-- JavaScripts placed at the end of the document so the pages load faster --> 
<script src="<?php echo base_url() ?>flipmart/assets/js/jquery-1.11.1.min.js"></script> 
<script src="<?php echo base_url() ?>flipmart/assets/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url() ?>flipmart/assets/js/bootstrap-hover-dropdown.min.js"></script> 
<script src="<?php echo base_url() ?>flipmart/assets/js/owl.carousel.min.js"></script> 
<script src="<?php echo base_url() ?>flipmart/assets/js/echo.min.js"></script> 
<script src="<?php echo base_url() ?>flipmart/assets/js/jquery.easing-1.3.min.js"></script> 
<script src="<?php echo base_url() ?>flipmart/assets/js/bootstrap-slider.min.js"></script> 
<script src="<?php echo base_url() ?>flipmart/assets/js/jquery.rateit.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url() ?>flipmart/assets/js/lightbox.min.js"></script> 
<script src="<?php echo base_url() ?>flipmart/assets/js/bootstrap-select.min.js"></script> 
<script src="<?php echo base_url() ?>flipmart/assets/js/wow.min.js"></script> 
<script src="<?php echo base_url() ?>flipmart/assets/js/scripts.js"></script>
</body>
</html>