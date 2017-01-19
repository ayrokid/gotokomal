<?php 
/**
 * -----------------------------------------------------------------------------
 * fungsi filter data
 * -----------------------------------------------------------------------------
 */
if (!function_exists('filter_data')) {

    function filter_data($data) {
        $data = trim($data);
        $back = stripslashes(strip_tags($data, ENT_QUOTES));
        return $back;
    }

}

if (!function_exists('filter_numeric')) {

    function filter_numeric($no = '') {
        $no = str_replace(',', '', $no);
        $nomor = (int) filter_data($no);
        if ($no == '') {
            return 0;
        }
        return $nomor;
    }

}

/*
 * fungsi mengubah tanggal dari SQL ke format indonesia atau sebaliknya
 * by : yanun
 * update : 12/03/2012 14:41
 * -----------------------------------------------------------------------------
 */
if (!function_exists('to_date')) {

    function to_date($date = '') {
        $bagi = explode(" ", $date);
        if(count($bagi)>1){
            $pecah = explode('-', $bagi[0]);
            if (count($pecah) > 2) {
                $getDate = $pecah[2] . '-' . $pecah[1] . '-' . $pecah[0];
            } else {
                $pecah = explode('/', $date);
                if(count($pecah) > 2){
                    $getDate = $pecah[2] . '-' . $pecah[1] . '-' . $pecah[0];
                }else{
                    $getDate = $date;
                }
            }
            return $getDate.' '.$bagi[1];
        }else{
            $pecah = explode('-', $date);
            if (count($pecah) > 2) {
                $getDate = $pecah[2] . '-' . $pecah[1] . '-' . $pecah[0];
            } else {
                $pecah = explode('/', $date);
                if(count($pecah) > 2){
                    $getDate = $pecah[2] . '-' . $pecah[1] . '-' . $pecah[0];
                }else{
                    $getDate = $date;
                }
            }
            return $getDate;
        }
    }
}

if (!function_exists('random_string')) {

    function random_string($str = "") {
        //$pengacak = "AJWKXLAJSCLWLWDAKDKSAJDADKEOIJEOQWENQWENQONEQWAJSNDKASO";
        $passEnkrip = md5($str);
        return $passEnkrip;
    }

}

/*
 * -----------------------------------------------------------------------------
 * fungsi mengubah angka dalam bentuk rupiah
 * by : yanun
 * update : 21/03/2012 14:52
 * -----------------------------------------------------------------------------
 */
if(!function_exists("currency_idr")){

    function currency_idr($nominal='' , $koma=2){
        if(strlen($nominal) > 0 && $nominal != null) {
            if($nominal < 0) {
                $nominal = $nominal * -1;
                return '('.number_format($nominal, $koma, '.', ',').')';
            }
            return number_format($nominal, $koma, '.', ',');
        }else{
            return 0;
        }
    }
}