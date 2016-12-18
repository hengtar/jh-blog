<?php
/**
 * 定义文本长度
 * @param $subtext 取文本长度多少
 */
function subtext($text, $length)
    {
    	if(mb_strlen($text, 'utf8') > $length)
    		return mb_substr($text, 0, $length, 'utf8').'...';
    	return $text;
    }

/**
 * 取手机号
 * @param $isPhone 取是否手机号
 */
function isPhone($val) {
	if (ereg("^1[1-9][0-9]{9}$", $val))
		return true;
	return false;
}
/*
 * 获取浏览器信息
 */
function getUserBrowser() {
	if (strpos($_SERVER['HTTP_USER_AGENT'], 'Maxthon')) {
		$browser = 'Maxthon';
	} elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 12.0')) {
		$browser = 'IE12.0';
	} elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 11.0')) {
		$browser = 'IE11.0';
	} elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 10.0')) {
		$browser = 'IE10.0';
	} elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 9.0')) {
		$browser = 'IE9.0';
	} elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 8.0')) {
		$browser = 'IE8.0';
	} elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 7.0')) {
		$browser = 'IE7.0';
	} elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 6.0')) {
		$browser = 'IE6.0';
	} elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'NetCaptor')) {
		$browser = 'NetCaptor';
	} elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Netscape')) {
		$browser = 'Netscape';
	} elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Lynx')) {
		$browser = 'Lynx';
	} elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera')) {
		$browser = 'Opera';
	} elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome')) {
		$browser = 'Chrome';
	} elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox')) {
		$browser = 'Firefox';
	} elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Safari')) {
		$browser = 'Safari';
	} elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'iphone') || strpos($_SERVER['HTTP_USER_AGENT'], 'ipod')) {
		$browser = 'iphone';
	} elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'ipad')) {
		$browser = 'iphone';
	} elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'android')) {
		$browser = 'android';
	} else {
		$browser = 'other';
	}
	return $browser;
}