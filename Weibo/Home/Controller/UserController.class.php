<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
use Common\Model\UserModel;
class UserController extends Controller {
    public function sign(){
		$this->display();
    }
    
    public function doreg(){
    	
    	$user=M('Myuser');
			
		$demo['UserID']=$_POST['name'];
		$demo['Psw']=$_POST['password'];
		$data['epassword']=$_POST['epassword'];
		if($demo['Psw']!=$data['epassword']){
			$this->error("两次密码不同！");
		}
		$demo['email']=$_POST['email'];
	    $demo['phone']=$_POST['phone'];
		//dump($demo);
		$where['UserID']=$_POST['name'];
		
		$count=$user->where($where)->count();
		if($count){
			$this->error('This user  already exists!!!');
			$this->redirect('User/sign');
		}
		$where['email']=$_POST['email'];
		$count=$user->where($where)->count();
		if($count){
			$this->error('This emal  already exists!!!');
			$this->redirect('User/sign');
		}
		$lastId=$user->add($demo);
		if($lastId){
			$this->success('Congrantulation!'.$username.' ,you just registered successfully',U('User/log'));
		}else{
			$this->error('Registration failed!!!!');
		}
		
		
    }

    public function log(){

    	$this->display();
    }
    public function dolog(){
    	$name=$_POST['name'];
			//echo $name;
		$password=$_POST['password'];
    	$user=M('Myuser');
    	$where['UserID']=$name;
			$where['Psw']=$password;
			//find方法取得的是一个具体的值
			//field('id')是只取得ID号
			$arr=$user->field('id')->where($where)->find();
			//echo $arr;
			//echo '1234567451861sad4as5d</br>';
			if($arr){
				$_SESSION['UserID']=$name;
				$_SESSION['id']=$arr['id'];
				$this->success('welcome,'.$where['UserID'].' !!!',U('User/index'));//U是生成一个完整的路径
			}else{
				$this->error("账号或密码错误");
				//$this-redirect('Logon/logon');
			}
    	//dump($demo);
    }
    public function personal(){
    	$user=M("Myuser");
    	$where['UserID']=$_SESSION["UserID"];
    	$data=$user->where($where)->select();
    	$this->assign("uname",$_SESSION['UserID']);
    	$this->assign("data",$data);
    	$this->display();
    }
    public function mperson(){
    	$user=M("Myuser");
    	$where['UserID']=$_SESSION["UserID"];
    	$data=$user->where($where)->select();
    	$this->assign("uname",$_SESSION['UserID']);
    	//dump($data);
    	$this->assign("data",$data);
    	$this->display();
    }
    public function index(){
    	$user=M("Myuser");
    	$where['UserID']=$_SESSION["UserID"];
    	$data=$user->where($where)->select();
    	$this->assign("uname",$_SESSION['UserID']);
    	//dump($data);
    	$this->assign("data",$data);
    	$this->display();
    }
    public function logout(){
    	$name=$_SESSION['UserID'];
		//echo $name;
		$_SESSION=array();
		if(isset($_COOKIE[session_name()])){
				setcookie(session_name(),'',time()-1,'/');
		}
		$test=session_destroy();
		if($test){
			$this->success('Welcome once again to use us!',U('Index/index'));//U是生成一个完整的路径
		}else{
			$this->error("注销失败");
		}
    }
    public function domodify(){
        $this->assign("uname",$_SESSION['UserID']);
    	$demo['UserID']=$_POST['name'];
    	$demo['phone']=$_POST['phone'];
    	$demo['email']=$_POST['email'];
    	$demo['pro']=$_POST['pro'];
    	$demo['city']=$_POST['city'];
    	$demo['motto']=$_POST['motto'];
    	$where['UserID']=$_SESSION['UserID'];
    	//dump($where);
    	$user=M('Myuser');
    	//dump($user->where($where)->find());
    	$result=$user->where($where)->save($demo);
		if($result){
			$_SESSION['UserID']=$demo['UserID'];
			$this->success('修改数据成功！！！！',U('User/index'));
		}else{
			//var_dump($demo);
			$this->error("修改数据失败！");
		}
    	//var_dump($user->create());
    }
    public function monall(){
        $this->assign("uname",$_SESSION['UserID']);
    	$log=M('Records');
    	$where['UserID']=$_SESSION['UserID'];
    	#$demo=$log->where($where)->select();
    	#var_dump($demo);
    	$where['Type']=2;
    	#data2是支出
    	#data1是收入
    	$data1=$log->where($where)->sum('Money');
    	$where['Type']=1;
    	$data2=$log->where($where)->sum('Money');
    	//echo $data1;
    	//echo "</br>";
    	//echo $data2;
    	#var_dump($demo);
    	//$this->assign("name",$_SESSION['UserID']);
    	$this->assign("uname",$_SESSION['UserID']);
    	$this->assign("data1",$data1);
    	$this->assign("data2",$data2);
    	$data3=$data1-$data2;
    	$this->assign("data3",$data3);
    	$data4=$data2/($data1+$data2);
    	$data5=1-$data4;
    	$this->assign('data5',$data4*100);
    	$this->assign('data4',$data5*100);
    	$this->display();

    }
    public function xall(){
        $this->assign("uname",$_SESSION['UserID']);
    	$log=M('Records');
    	$where['UserID']=$_SESSION['UserID'];
    	$where['Type']=2;
    	$where['Time'] = array(
    		array('egt',date('Y-m-1',time())),
    		array('lt',date('Y-m-d',time()))
		);
    	$data2=$log->where($where)->sum('Money');
    	$where['Type']=1;
    	$data1=$log->where($where)->sum('Money');
    	//var_dump($data2);
    	//var_dump($data1);
    	$this->assign('data2',$data2);
    	$this->assign('data1',$data1);
    	$this->assign('month',date('m'));
    	//echo date('Y');
    	$this->assign("year",date("Y"));
    	$this->display();
    }
    public function xsall(){
        $this->assign("uname",$_SESSION['UserID']);
    	$log=M('Records');
    	$where['UserID']=$_SESSION['UserID'];
    	$where['Type']=2;
    	$data=$log->where($where)->order('Time desc')->select();
        #var_dump($data);
    	$data1=$data['Time'];
    	//var_dump($data1);
    	//var_dump($data);
    	$this->assign("data",$data);
    	$this->display();
    }
    public function xzall(){
        $this->assign("uname",$_SESSION['UserID']);
    	$log=M('Records');
    	$where['UserID']=$_SESSION['UserID'];
    	$where['Type']=1;
    	$data=$log->where($where)->order('Time desc')->select();
    	//$data1=$data['Time'];
    	//var_dump($data1);
    	//var_dump($data);
    	$this->assign("data",$data);
    	$this->display();
    }
    public function xzmon(){
        $this->assign("uname",$_SESSION['UserID']);
        $this->display();
    }
    public function xjmon(){
        $this->assign("uname",$_SESSION['UserID']);
        $this->display();
    }
    public function doxzmon(){
        
        $Records=D('Records');
        $where['Money']=$_POST['Money'];
        $where['Time']=$_POST['Time'];
        $where['Remarks']=$_POST['Remarks'];
        $where['UserID']=$_SESSION['UserID'];
        $where['Type']=2;
        $arr=array(
            array('Money','require','没有输入金额'),
            array('Money','/^[0-9]*[1-9][0-9]*$/','输入金额不是整数或者输入金额不合法'),
            array('Money','1,6','输入金额过大',0,'length'),
            
            array('Remarks','require','备注须填写'),
            array('Remarks','1,50','输入备注超出范围',0,'length'),
            array('Time','require','时间需输入'),
        );
        if($Records->validate($arr)->create()){
            $demo=$Records->add($where);
            if($demo){
                #$this->ajaxReturn("添加成功","eval");
                $this->success('添加成功！',U('User/xzmon'));
            }else{
                $this->error("添加失败请重新添加");
            }
            #$Records->add($where);
            
        }else{
            var_dump($Records->getError());
        }
    }
    public function doxjmon(){
       
        $Records=D('Records');
        $where['Money']=$_POST['Money'];
        $where['Time']=$_POST['Time'];
        $where['Remarks']=$_POST['Remarks'];
        $where['UserID']=$_SESSION['UserID'];
        $where['Type']=1;
        $arr=array(
            array('Money','require','没有输入金额'),
            array('Money','/^[0-9]*[1-9][0-9]*$/','输入金额不是整数或者输入金额不合法'),
            array('Money','1,6','输入金额过大',0,'length'),
            
            array('Remarks','require','备注须填写'),
            array('Remarks','1,50','输入备注超出范围',0,'length'),
            array('Time','require','时间需输入'),
        );
        if($Records->validate($arr)->create()){
            $demo=$Records->add($where);
            if($demo){
                #$this->ajaxReturn("添加成功","eval");
                $this->success('添加成功！',U('User/xjmon'));
            }else{
                $this->error("添加失败请重新添加");
            }
            #$Records->add($where);
            
        }else{
            var_dump($Records->getError());
        }
    }
        
  }