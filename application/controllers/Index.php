<?php
/**
* 所有的控制器都必须继承自 Yaf_Controller_Abstract
* 所有的控制器都必须用 Controller 后缀
*
*/
class IndexController extends Yaf_Controller_Abstract
{
  //所有的动作都需要带有后缀 Action
 public function indexAction()
 {
 //这里我们调用了视图
 //然后我们给视图中的内容进行赋值
 $this->getView()->assign("content","测试");
 }
}