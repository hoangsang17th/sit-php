<?php
    $urlpage = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $urlpage);
    $urlpage = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $urlpage);
    $urlpage = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $urlpage);
    $urlpage = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $urlpage);
    $urlpage = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $urlpage);
    $urlpage = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $urlpage);
    $urlpage = preg_replace('/(đ)/', 'd', $urlpage);
    $urlpage = preg_replace('/[^A-Za-z0-9-\s]/', '', $urlpage);
    $urlpage = preg_replace('/([\s]+)/', '-', $urlpage);
?>