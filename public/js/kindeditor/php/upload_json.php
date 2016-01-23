<?php
require_once 'JSON.php';
require_once 'upload.php';
header('Content-type: text/html; charset=UTF-8');
$json = new Services_JSON();
$result = uploadJbsImgToSapp($_FILES['imgFile'],Null,$path='images/app_run/');
if ($result) {
	echo $json->encode(array('error' => 0, 'url' => $result));
} else {
	echo $json->encode(array('error' => 1, 'message' => '上传失败'));
}