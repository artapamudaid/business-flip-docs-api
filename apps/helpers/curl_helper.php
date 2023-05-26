<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/apps/config/const.php');

function curl($uri = null, $params = array())
{

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, FLIP_URL . $uri);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);

    if (isset($params)) {

        curl_setopt($ch, CURLOPT_POST, TRUE);

        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
    }

    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Content-Type: application/x-www-form-urlencoded"
    ));

    curl_setopt($ch, CURLOPT_USERPWD, FLIP_KEY . ":");

    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}
