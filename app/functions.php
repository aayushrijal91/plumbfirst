<?php
include __DIR__ . '/env.php';

$site = "PlumbFirst Melbourne";
$sitetitle = "";
$title = !empty($sitetitle) ? $titlename : $site;
$reviewn = 3283;

$phone_number = "1300 174 890";
$admin_email = 'arijal@aiims.com.au';
$bcc_email = "";
$no_reply_email = 'info@website.com.au';
$recaptcha_client_secret = $client_secret;
$recaptcha_server_secret = $server_secret;

function renderImg($filename, $folder, $classname = "")
{
    $filename_without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
    $filename_without_ext = str_replace('-',' ',$filename_without_ext);

    $src = "./assets/images/" . $folder . "/" . $filename;

    if (file_exists("./assets/images/" . $folder . "/" . $filename_without_ext . ".webp")) {
        $src = "./assets/images/" . $folder . "/" . $filename_without_ext . ".webp";
    }

    return "<img src=" . $src . " alt='" . $filename_without_ext . "' class='" . $classname . "'>";
}
