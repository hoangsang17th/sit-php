<?php
    //goi thu vien
    include('PHPMailer-5.2.26/class.smtp.php');
    include "PHPMailer-5.2.26/class.phpmailer.php";
    $nFrom = "SIT Shop Software";
    $mFrom = 'taskgo47@gmail.com';
    $mPass = 'Stargirl2018';
    $nTo = '';
    $mTo=$Email_User;
    $mail             = new PHPMailer();
    $body='
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIT Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}
        @media (min-width:576px){.container{max-width:540px}}
        @media (min-width:768px){.container{max-width:720px}}
        @media (min-width:992px){.container{max-width:960px}}
        @media (min-width:1200px){.container{max-width:1140px}}
        .row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}
        .my-3{margin-top:1rem!important;margin-bottom:1rem!important;}
        .col-lg-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}
        .card{position:relative;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;min-width:0;word-wrap:break-word;background-color:#fff;background-clip:border-box;border:1px solid rgba(0,0,0,.125);border-radius:.25rem}
        .shadow{box-shadow:0 .5rem 1rem rgba(0,0,0,.15)!important}
        .rounded{border-radius:.25rem!important}
        .justify-content-center{-ms-flex-pack:center!important;justify-content:center!important}
        .card-body{-ms-flex:1 1 auto;flex:1 1 auto;min-height:1px;padding:1.25rem}
        .pb-4{padding-bottom:1.5rem!important}
        .col-lg-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}
        .col-md-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}
        .col-sm-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}
        .col-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}
        .text-center{text-align:center!important}
        .w-100{width:100%!important}
        .mt-2{margin-top:.5rem!important}
        .h3,.h6{margin-bottom:.5rem;font-weight:500;line-height:1.2}
        .h3{font-size:1.75rem}
        .font-italic{font-style:italic!important}
        .text-primary{color:#007bff!important}
        .h6{font-size:1rem}
        .col-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}
        .col-sm-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}
    </style>
</head>
<body>
    <div class="container">
        <div class="row my-3 justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow rounded border-0">
                    <div class="card-body">
                        <div class="pb-4">
                            <div class="row justify-content-center">
                                <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                                    <img src="https://raw.githubusercontent.com/hoangsang17th/sit-php/master/Logo.png" alt="SIT Shop" class="w-100">
                                </div>
                                <div class="col-12 text-center mt-2">
                                    <div class="font-italic h3">SIT Shop Software</div>
                                    <p class="text-primary h6">www.SIT.com</a>
                                    <p>Cám ơn bạn đã đặt hàng tại SIT!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
    ';
    $title="SIT Shop Software";
    $mail->IsSMTP();
    $mail->CharSet  = "utf-8";
    $mail->SMTPDebug  = 0;
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = "ssl";
    $mail->Host       = "smtp.gmail.com";
    $mail->Port       = 465;
    $mail->Username   = $mFrom;
    $mail->Password   = $mPass;
    $mail->SetFrom($mFrom, $nFrom);
    $mail->AddReplyTo('taskgo47@gmail.com', 'SIT Shop Software');
    $mail->Subject    = $title;
    $mail->MsgHTML($body);
    $mail->AddAddress($mTo, $nTo);
    if(!$mail->Send()) {
        echo 'Đơn hàng thất bại!';
    } else {

    }
?>
