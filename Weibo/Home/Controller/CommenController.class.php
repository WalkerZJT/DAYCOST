<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class CommenController extends Controller {
    public function _initialize(){
			if(!isset($_SESSION['UserID'])|| $_SESSION['UserID']==''){
				$this->show("登陆后才能使用");
				$this->redirect('User/log');
			}
		}
  }