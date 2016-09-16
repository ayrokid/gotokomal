<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
  |--------------------------------------------------------------------------
  | function of path assets
  |--------------------------------------------------------------------------
 */
if (!function_exists('path_assets')) {

    function path_assets($file = '') {
        $CI = & get_instance();
        return $CI->config->item('path_assets') . $file;
    }

}

/*
  |--------------------------------------------------------------------------
  | function of path css
  |--------------------------------------------------------------------------
 */
if (!function_exists('path_css')) {

    function path_css($file = '') {
        $CI = & get_instance();
        return $CI->config->item('path_css') . $file;
    }

}

/*
  |--------------------------------------------------------------------------
  | function of path javascript
  |--------------------------------------------------------------------------
 */
if (!function_exists('path_js')) {

    function path_js($file = '') {
        $CI = & get_instance();
        return $CI->config->item('path_js') . $file;
    }

}

/*
  |--------------------------------------------------------------------------
  | function of path images
  |--------------------------------------------------------------------------
 */
if (!function_exists('path_img')) {

    function path_img($file = '') {
        $CI = & get_instance();
        return $CI->config->item('path_img') . $file;
    }

}

/*
  |--------------------------------------------------------------------------
  | function of path uploads
  |--------------------------------------------------------------------------
 */
if (!function_exists('path_upload')) {

    function path_upload($file = '') {
        $CI = & get_instance();
        return $CI->config->item('path_upload') . $file;
    }

}

/*
  |--------------------------------------------------------------------------
  | function of name application
  |--------------------------------------------------------------------------
 */
if (!function_exists('apps_name')) {

    function apps_name($descript = '') {
        $CI = & get_instance();
        if ($descript != '') {
            return $CI->config->item('apps_name') . ' - ' . $descript;
        }
        return $CI->config->item('apps_name');
    }

}

/*
  |--------------------------------------------------------------------------
  | function of company
  |--------------------------------------------------------------------------
 */
if (!function_exists('company')) {

    function company() {
        $CI = & get_instance();
        return $CI->config->item('company');
    }

}

/*
  |--------------------------------------------------------------------------
  | function of Address
  |--------------------------------------------------------------------------
 */
if (!function_exists('address')) {

    function address() {
        $CI = & get_instance();
        return $CI->config->item('address');
    }

}

/*
  |--------------------------------------------------------------------------
  | function of telepon
  |--------------------------------------------------------------------------
 */
if (!function_exists('telepon')) {

    function telepon() {
        $CI = & get_instance();
        return $CI->config->item('telepon');
    }

}

/*
  |--------------------------------------------------------------------------
  | function of version
  |--------------------------------------------------------------------------
 */
if (!function_exists('version')) {

    function version() {
        $CI = & get_instance();
        return $CI->config->item('version');
    }

}


/*
  |--------------------------------------------------------------------------
  | function of developer
  |--------------------------------------------------------------------------
 */
if (!function_exists('developer')) {

    function developer() {
        $CI = & get_instance();
        return $CI->config->item('developer');
    }

}