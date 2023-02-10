<?php
include __DIR__ . '/env.php';

$site = "Loan Options | Affiliate Business Summit";
$phone_number = "1300 060 684";
$admin_email = 'arijal@aiims.com.au'; // 'info@loanoptions.ai';
$bcc_email = "";
$no_reply_email = 'info@loanoptions.ai';
$recaptcha_client_secret = $client_secret;
$recaptcha_server_secret = $server_secret;

function renderImg($filename, $folder, $classname = "")
{
    $filename_without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
    $src = "./assets/images/" . $folder . "/" . $filename;

    if (file_exists("./assets/images/" . $folder . "/" . $filename_without_ext . ".webp")) {
        $src = "./assets/images/" . $folder . "/" . $filename_without_ext . ".webp";
    }

    return "<img src=" . $src . " alt=" . $filename_without_ext . " class='" . $classname . "'>";
}

$loan_menu = array(
    [
        "url" => 'https://loanoptions.ai/car-loans',
        "title" => 'Car Loan'
    ],
    [
        "url" => 'https://loanoptions.ai/personal-loans',
        "title" => 'Personal Loan'
    ],
    [
        "url" => 'https://loanoptions.ai/business-loans',
        "title" => 'Business Loan'
    ],
    [
        "url" => 'https://loanoptions.ai/equipment-loans',
        "title" => 'Equipment Loan'
    ],
    [
        "url" => 'https://loanoptions.ai/caravan-loans',
        "title" => 'Caravan Loan'
    ],
    [
        "url" => 'https://loanoptions.ai/motorcycle-loans',
        "title" => 'Motorcycle Loan'
    ],
    [
        "url" => 'https://loanoptions.ai/marine-loans',
        "title" => 'Marine & Other'
    ],
    [
        "url" => 'https://loanoptions.ai/truck-loans',
        "title" => 'Truck Loans'
    ],
    [
        "url" => 'https://loanoptions.ai/medical-loans',
        "title" => 'Medical Loans'
    ],
    [
        "url" => 'https://loanoptions.ai/beauty-loans',
        "title" => 'Beauty Loans'
    ],
);
