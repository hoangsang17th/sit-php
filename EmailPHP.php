<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    // bật tính năng hiện lỗi để bạn thấy lỗi nếu có. Chúng sẽ báo lỗi nếu script thực thi thất bại.

    $from = "test@gmail.com";
    // Email gửi từ
    $to = "startsboy@gmail.com";
    // Email người nhận
    $subject = "Checking PHP mail";
    // Tiêu đề email
    $message = "PHP mail works just fine";
    // Đây là chỗ bạn điền nội dung của email vào
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    // hàm PHP để chạy lệnh gửi email
    echo "The email message was sent.";
?>