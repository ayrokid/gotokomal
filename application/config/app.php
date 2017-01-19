<?php
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$domain   = $_SERVER['HTTP_HOST'];
$base_url = $protocol.$domain.preg_replace('@/+$@', '', dirname($_SERVER['SCRIPT_NAME'])).'/';

/*
|--------------------------------------------------------------------------
| Path File
|--------------------------------------------------------------------------
*/
$path_media				      =	$base_url.'flipmart/assets/';
$config['path_assets']	=	$path_media;
$config['path_js']		  =	$path_media.'js/';
$config['path_css']		  =	$path_media.'css/';
$config['path_img']		  =	$path_media.'images/';
$config['path_upload']	=	$base_url.'uploads/';
$config['root_dir']		  = '/home/the-coder/htdocs/okezone/xml/';

/*
|--------------------------------------------------------------------------
| Configuration
|--------------------------------------------------------------------------
*/
$config['name_apps']  		  = "Marketplace for UKM Services No.1 indonesia";
$config['title_apps'] 		  = 'Okezone pancen wokeyy..';
$config['description_apps'] = 'selalu menjadi yang terdepan';
$config['company']          = "silvanix.com";
$config['address']          = "Jl. Masjid At-Taqwa, Kel.Cipayung Jaya, Kec.Cipayung, Kota Depok, Jawa Barat";
$config['telepon']          = "0857 2552 3023 - 0857 2882 5287";
$config['version']          = "alfa";
$config['developer']        = "Muhamad Yanun As'at & Umar Ashidiqi";
$config['domain']			      = 'http://www.okezone.com';

/*
| --------------------------------------------------------------------------
| Constants application
| --------------------------------------------------------------------------
*/
define('ACCESS_SUPER_USER', 1);