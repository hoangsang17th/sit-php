<?php
    $urlpage = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $urlpage);
    $urlpage = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $urlpage);
    $urlpage = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $urlpage);
    $urlpage = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $urlpage);
    $urlpage = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $urlpage);
    $urlpage = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $urlpage);
    $urlpage = preg_replace('/(đ)/', 'd', $urlpage);
    
    $urlpage = preg_replace('/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/', 'A', $urlpage);
    $urlpage = preg_replace('/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/', 'E', $urlpage);
    $urlpage = preg_replace('/(Ì|Í|Ị|Ỉ|Ĩ)/', 'I', $urlpage);
    $urlpage = preg_replace('/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/', 'O', $urlpage);
    $urlpage = preg_replace('/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/', 'U', $urlpage);
    $urlpage = preg_replace('/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/', 'Y', $urlpage);
    $urlpage = preg_replace('/(Đ)/', 'D', $urlpage);

    $urlpage = preg_replace('/[^A-Za-z0-9-\s]/', '', $urlpage);
    $urlpage = preg_replace('/([\s]+)/', '-', $urlpage);
?>