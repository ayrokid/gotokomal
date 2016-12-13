<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
  |--------------------------------------------------------------------------
  | function of name application
  |--------------------------------------------------------------------------
 */
if (!function_exists('name_apps')) {

    function name_apps($des = '') {
        $CI = & get_instance();
        if ($des != '') {
            return $CI->config->item('name_apps') . ' - ' . $des;
        }
        return $CI->config->item('name_apps');
    }

}

if ( ! function_exists('title_apps')){
    function title_apps($str = null){
        if(! is_null($str)){
            return $str;
        }else {
            $CI = & get_instance();
            return $CI->config->item('title_apps');
        }
    }
}

if(! function_exists('description_apps')){
    function description_apps($str = null){
        if(! is_null($str)) {
            return $str;
        }else {
            $CI = & get_instance();
            return $CI->config->item('description_apps');
        }
    }
}

/*
  |--------------------------------------------------------------------------
  | function get domain apps
  |--------------------------------------------------------------------------
 */
if (!function_exists('domain_apps')) {

    function domain_apps() {
        $CI = & get_instance();
        return $CI->config->item('domain_apps');
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