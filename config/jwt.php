<?php
require __DIR__ . '/vendor/autoload.php';

use \Firebase\JWT\JWT;

$accessKey = '	3lD85oETVyEEzkuyUtJ6q78TRmUNORtIEKp7cKnftkQgfwwrRWJFj2fx9Awf';
$environmentId = 'tVd5vwcO3d7xmauJv5q2';

$payload = array(
    "aud" => $environmentId,
    "iat" => time()
);

$jwt = JWT::encode($payload, $accessKey);

echo $jwt;
?>