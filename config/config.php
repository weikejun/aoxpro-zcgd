<?php
$gConfig = array();

$gConfig['db'] = array(
		'dsn' => 'mysql:host=localhost;dbname=aoxpro_zcgd;charset=utf8',
		'user' => 'root',
		'pass' => 'root',
		);

$gConfig['game'] = array(
		'total_time' => 6,
		'max_level' => 2,
		);

$gConfig['share'] = array(
		'pic_url' => 'http://zcgd2014.aoxpro.com/img/share_game.jpg',
		'content' => array(
			1 =>'分享文案1',
			2 => '分享文案2'
			),
		'content_error' => '分享出错文案',
		'join_tips' => ''
		);
