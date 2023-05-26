<?php
require('rest-api/General.php');

$general = new General();

$balance = $general->get_balance();
$banks = $general->get_banks();
$maintenance = $general->get_maintenance();
$inquiry = $general->get_inquiry(
    array(
        'account_number' => '5465327020',
        'bank_code' => 'bca',
        'inquiry_key' => generateRandomString(20)
    )
);
