<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Model
class UserModel extends Model{
	protected $_validate=array(
		array('Money','require','没有输入金额'),
        array('Money','1,6','输入金额过大'),
        array('Money','/^[0-9]*[1-9][0-9]*$/','输入金额不是整数或者输入金额不合法'),
        array('Remarks','require','备注须填写'),
        array('Remarks','1,50','输入备注超出范围'),
        array('Time','require','时间需输入'),
	);
}