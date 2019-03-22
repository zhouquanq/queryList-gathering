<?php 

require './vendor/autoload.php';

use QL\QueryList;

// 待采集的页面地址
$url = 'https://www.qiushibaike.com/pic/';

// 采集规则
$rules = [
	// 作者
    'auth' => ['h2','text'],
    // 内容
    'content' => ['span:eq(0)','text'],
    // 图片
    'imgSrc' => ['img:eq(0)','src'],
];

// 切片选择器
$range = '#content-left>.article';

$data = QueryList::Query($url,$rules,$range)->data;

p($data); 





function p($data){
    echo "<pre style='font-size:14px;padding:10px 20px;background:#FFB7DD'>";
    print_r($data);
    echo "</pre>";
}
