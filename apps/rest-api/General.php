<?php

class General
{

    function __construct()
    {
        require_once($_SERVER['DOCUMENT_ROOT'] . '/apps/helpers/curl_helper.php');
        require_once($_SERVER['DOCUMENT_ROOT'] . '/apps/helpers/random_helper.php');
    }

    function get_balance()
    {
        $uri = '/general/balance';

        $response = curl($uri);

        return $response;
    }

    function get_banks()
    {
        $uri = '/general/banks';

        $response = curl($uri);

        return $response;
    }

    function get_maintenance()
    {
        $uri = '/general/maintenance';

        $response = curl($uri);

        return $response;
    }

    function get_inquiry($data = array())
    {
        $uri = '/disbursement/bank-account-inquiry';

        $params = $data;

        $response = curl($uri, $params);

        return $response;
    }
}
