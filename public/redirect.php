<?php

$statusCode = $_REQUEST['status_code'];
$httpStatus = '';

switch ($statusCode) {
    case '300':
        $httpStatus = '300 Multiple Choice';
        break;
    case '301':
        $httpStatus = '301 Moved Permanently';
        break;
    case '302':
        $httpStatus = '302 Found';
        break;
    case '303':
        $httpStatus = '303 See Other';
        break;
    case '304':
        $httpStatus = '304 Not Modified';
        break;
    case '307':
        $httpStatus = '307 Temporary Redirect';
        break;
    case '308':
        $httpStatus = '308 Permanent Redirect';
        break;
    default:
        echo sprintf('%sはサポートしません。', $statusCode);
        exit();
        break;
}

header('HTTP/1.1 ' . $httpStatus);
header('Location: receive.php');
