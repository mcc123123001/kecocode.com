<?php
//定义应用目录
define("APP_PATH",realpath(dirname(__FILE__).'/../'));
//导入配置文件
$app = new Yaf_Application(APP_PATH."/conf/application.ini");
//运行程序
echo $app->run();