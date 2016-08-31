<?php
	$url = "http://api.1-blog.com/biz/bizserver/xiaohua/list.do?page=1&size=20";
	$res = file_get_contents($url);
	echo $res;
?>