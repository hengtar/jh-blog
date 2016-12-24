<?php

function getpage($count, $pagesize = 8) {
	$p = new Think\Page($count, $pagesize);
	$p -> setConfig('header', '<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
	$p -> setConfig('prev', '上一页');
	$p -> setConfig('next', '下一页');
	$p -> setConfig('last', '末页');
	$p -> setConfig('first', '首页');
	$p -> setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
	$p -> lastSuffix = false;
	return $p;
}

//处理密码
function getPwd($str){
    //处理密码
    return sha1(md5($str . 'admin123'));
}

function tranTime($time) { 
    $rtime = date("Y-m-d H:i", $time); 
    $htime = date("H:i", $time); 
    $time = time() - $time; 
    if ($time < 60) { 
        $str = '刚刚'; 
    } elseif ($time < 60 * 60) { 
        $min = floor($time / 60); 
        $str = $min . '分钟前'; 
    } elseif ($time < 60 * 60 * 24) { 
        $h = floor($time / (60 * 60)); 
        $str = $h . '小时前 ' . $htime; 
    } elseif ($time < 60 * 60 * 24 * 3) { 
        $d = floor($time / (60 * 60 * 24)); 
        if ($d == 1) 
            $str = '昨天 ' . $htime; 
        else 
            $str = '前天 ' . $htime; 
    } 
    else { 
        $str = $rtime; 
    } 
    return $str; 
}	



/**
 * 验证码检查
 */
function check_verify($code, $id = "") {
	$verify = new \Think\Verify();
	return $verify -> check($code, $id);
}

/**
 * 获取当前日期
 */
function getNowDate() {
	return date("Y-m-d");
}
// 正则表达式 ： 

function isPhone($val) {

	if (ereg("^1[1-9][0-9]{9}$", $val))
		return true;
	return false;
}

function is_ip($str) {
	$ip = explode('.', $str);
	for ($i = 0; $i < count($ip); $i++) {
		if ($ip[$i] > 255) {
			return false;
		}
	}
	return preg_match('/^[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}$/', $str);
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

function getAgent() {
	$agent = $_SERVER['HTTP_USER_AGENT'];
	return $agent;
}






/**
 * 字符串截取，支持中文和其他编码
 */
function subtext($text, $length)
{
	if(mb_strlen($text, 'utf8') > $length)
		return mb_substr($text, 0, $length, 'utf8').'...';
	return $text;
}

function msubstr($str, $start=0, $length, $charset="utf-8", $suffix=true)
{
	if(function_exists("mb_substr")){
		if($suffix)
			return mb_substr($str, $start, $length, $charset)."...";
		else
			return mb_substr($str, $start, $length, $charset);
	}
	elseif(function_exists('iconv_substr')) {
		if($suffix)
			return iconv_substr($str,$start,$length,$charset)."...";
		else
			return iconv_substr($str,$start,$length,$charset);
	}
	$re['utf-8']   = "/[x01-x7f]|[xc2-xdf][x80-xbf]|[xe0-xef]
                  [x80-xbf]{2}|[xf0-xff][x80-xbf]{3}/";
	$re['gb2312'] = "/[x01-x7f]|[xb0-xf7][xa0-xfe]/";
	$re['gbk']    = "/[x01-x7f]|[x81-xfe][x40-xfe]/";
	$re['big5']   = "/[x01-x7f]|[x81-xfe]([x40-x7e]|xa1-xfe])/";
	preg_match_all($re[$charset], $str, $match);
	$slice = join("",array_slice($match[0], $start, $length));
	if($suffix) return $slice."…";
	return $slice;
}
/*
 * 删除缓存方法
 */
function delFileByDir($dir) {
	$dh = opendir($dir);
	while ($file = readdir($dh)) {
		if ($file != "." && $file != "..") {

			$fullpath = $dir . "/" . $file;
			if (is_dir($fullpath)) {
				delFileByDir($fullpath);
			} else {
				unlink($fullpath);
			}
		}
	}
	closedir($dh);
}
?>