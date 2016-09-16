<?php
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$domain   = $_SERVER['HTTP_HOST'];


$config['base_url'] = $protocol.$domain.preg_replace('@/+$@', '', dirname($_SERVER['SCRIPT_NAME'])).'/';

/*
|--------------------------------------------------------------------------
| Path File
|--------------------------------------------------------------------------
*/
$path_media				=	$config['base_url'].'flipmart/assets/';
$config['path_assets']	=	$path_media;
$config['path_js']		=	$path_media.'js/';
$config['path_css']		=	$path_media.'css/';
$config['path_img']		=	$path_media.'images/';
$config['path_upload']	=	$config['base_url'].'uploads/';

/*
|--------------------------------------------------------------------------
| Configuration of System
|--------------------------------------------------------------------------
*/
$config['apps_name']    = "gotoko.id";
$config['company']      = "silvanix.com";
$config['address']      = "Jl. Masjid At-Taqwa, Kel.Cipayung Jaya, Kec.Cipayung, Kota Depok, Jawa Barat";
$config['telepon']      = "0857 2552 3023 - 0857 2882 5287";
$config['version']      = "alfa";
$config['developer']    = "Muhamad Yanun As'at & Umar Ashidiqi";
