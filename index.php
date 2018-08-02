<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	require_once 'resource/addons/mobile_Detect/Mobile_Detect.php';
    $detect = new Mobile_Detect;
     
    // Any mobile device (phones or tablets).
    if ( $detect->isMobile() ) {
     	header('Location: '.$uri.'/projectCode/portableView/index.php');
    }else{header('Location: '.$uri.'/projectCode/pcView/vieLogin/');}
	exit;
?>
