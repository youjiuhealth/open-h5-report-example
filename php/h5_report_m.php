<?php 
// 报告ID
// 获取渠道：
// 		1.推送（推荐）
//		2.接口（历史报告）
//		3.商户后台可查看（测试用）
$measurementId = '99647406';

// appid
$appid = '65696**********';

// app secret
$app_secret = 'YWJkNzMy****************************************';

// 当前时间戳
$timestamp = time();

// token
$md5 = md5( $appid . $app_secret . $timestamp . $measurementId );
$token = "third.{$measurementId}.{$appid}.{$timestamp}.{$md5}";

// 获取移动端报告URL
$url = "https://c.youjiuhealth.com/index.html#/pages/report/show/show?id={$measurementId}&token={$token}&lang=zh_CN";

echo $url;







