<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class InfoController extends Controller {
    public function check(){
$email = $_GET["mail"];
$m = M("Users");
$data["status"]=1;
$d = $m->where("email='{$email}'")->save($data);
if($d){
$this->display("info");  //显示激活信息
}
}
	
  }