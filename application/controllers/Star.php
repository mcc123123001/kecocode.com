<?php
//定义 Star 控制器
class StarController extends Yaf_Controller_Abstract
{
 public function init()
 {
 Yaf_Dispatcher::getInstance()->disableView();
 }
  
 //定义 xin 动作
 public function xinAction()
 {
 echo "测试2";
 }
}