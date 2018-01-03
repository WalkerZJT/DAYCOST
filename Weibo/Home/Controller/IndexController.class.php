<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		$this->display();
    }
    public function download(){
    	$uploadpath='http://localhost/DAYCOST/Public/app';
    	$id=$_GET['id'];
    	if($id==""){
    		$this->error("下载失败，请重试");
    	}
    	$file=D('app');
    	//var_dump($file->select());
    	$result=$file->find($id);
    	if($result==false){
    		$this->error("没有该文件！请重试");
    	}
    	$savename=$result->savename;
    	$showname=$result->truename;
    	$filename=$uploadpath.$savename;
    	echo $filename;
    	//import('ORG.Net.Http');
    	//new \Org\Net\Http();
    	//Http::download($filename,$showname);
    	$http=new \Org\Net\Http;
    	$http->download($filename,$showname);
    }
    public function demo(){
    	echo"sadsadsad124563\n</br>";
        $user=M('Myuser');
    	dump($user->select());
        
    }
  }