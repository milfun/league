<?php
namespace app\index\model;

use think\Model;

class Company extends Model
{
	//自定义初始化
    protected function initialize()
    {
        //需要调用`Model`的`initialize`方法
        parent::initialize();
        //TODO:自定义的初始化
    }

    /**  
	* 获取公司基本信息 
	* @param  $val 公司的唯一id
	* @return array 返回类型
	*/
    public function getCompanyInfo($val)
    {
    	$user = $this->get($val);
		return $user;
    }

    /**  
	* 获取公司列表
	* @return array 返回类型
	*/
    public function getCompanyList()
    {
    	$list = $this->all();
    	foreach ($list as $k => $v) {
    		$list[$k] = $v->toArray();
    	}
		return $list;
    }

    public function getone()
    {
    	# code...
    	$user = $this->where('id',1)->find();
    	//$status = [-1=>'删除',0=>'禁用',1=>'正常',2=>'待审核'];
    	//return $status[$value];
    	//
    	//$user->visible(['id','name','email'])->toJson();
    	//$this->hasOne('Profile')->field('id,name,email');
		// 输出Profile关联模型的email属性
		//echo $user->profile->email;


		//return $user->toJson();
		return $user->toArray();
    }


	/** ****** 
	* 获取器 *
	*********/
	//获取器，logo地址
    public function getLogoAttr($value)
    {
    	$url = '\public\uploads\company\\'.$value;
        return $url;
    }

	//获取器，添加日期转换
    public function getAddtimeAttr($value)
    {
        return date('Y-m-d H:i:s',$value);
    }
    //获取器，刷新时间转换
    public function getRefreshtimeAttr($value)
    {
    	return date('Y-m-d H:i:s',$value);
    }

}