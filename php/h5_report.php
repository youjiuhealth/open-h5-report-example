<?php 
// 报告ID
// 获取渠道：
// 		1.推送（推荐）
//		2.接口（历史报告）
//		3.商户后台可查看（测试用）
$measurementId = '45238818';

// appid
$appid = '210421**********';

// app secret
$app_secret = 'NDQ4YT**************************************************';

// 当前时间戳
$timestamp = time();

// token
$token = md5( $appid . $app_secret . $timestamp . $measurementId );

// V2版报告URL
$url = "https://op.youjiuhealth.com/report/detail/{$measurementId}?appid={$appid}&timestamp={$timestamp}&token={$token}";

echo $url;







