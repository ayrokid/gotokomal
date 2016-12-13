<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * ------------------------------------------------------------------------------
 * Parsing Json
 * by : yanun
 * udpate : Februari 22th 2016
 * ------------------------------------------------------------------------------
 */
if(! function_exists('parsing_json')){

    function parsing_json( $file = null ){
        try{
			if(file_exists($file)){
				$str_data = file_get_contents($file);
				$data = json_decode($str_data, true);
			}else{
				$data = null;
			}
		}catch(Exception $e){
			$data = null;
		}

		return $data;
    }

}
