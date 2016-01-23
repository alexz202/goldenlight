<?php
function uploadJbsImgToSapp($fileObj,$data=array(),$path='championship/upload/',$filename=0){
	$url = "http://engapp.huanhuba.com:81/admin/get_stream.php";

	//id号命名图片
	$key = "";
	if($filename){
		$key = $filename;
	}else{
		$key =sha1(time().mt_rand(111111,999999));
	}

	$ext = strtolower(strrchr($fileObj['name'],'.'));
	if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
	    file_put_contents('./tmp/'.$key.$ext,file_get_contents($fileObj['tmp_name']));
	    $post_data['u_file']= "@".realpath('./tmp/'.$key.$ext);
	} else {
	   file_put_contents('/tmp/'.$key.$ext,file_get_contents($fileObj['tmp_name']));	
	   $post_data['u_file']= "@".realpath('/tmp/'.$key.$ext);
	}
	$post_data['path'] = $path;
	$post_data['rand'] = rand();
	$post_data['filename'] = $key.$ext;
	//$post_data['u_file']= "@".realpath('/tmp/'.$key.$ext);
	$sign = sha1(http_build_query($post_data));	
	$post_data['sign'] = $sign;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_VERBOSE, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible;)");
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data); 
	$response = curl_exec($ch);
	curl_close($ch);
	//@unlink(realpath('/tmp/'.$key.$ext));
	//@unlink(realpath('./tmp/'.$key.$ext));
	if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
	    @unlink(realpath('./tmp/'.$key.$ext));
	} else {
	   @unlink(realpath('/tmp/'.$key.$ext));
	}
	if($response)
		return 'http://sapp.huanhuba.com/'.$path.$response;
	else
		return null;
}