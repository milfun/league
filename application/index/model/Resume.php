<?php
namespace app\index\model;

use think\Model;

class Resume extends Model
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
    public function getResumeInfo($val)
    {
    	$user = $this->get($val);
		return $user;
    }

    /**  
	* 获取公司列表
	* @return array 返回类型
	*/
    public function getResumeList()
    {
    	$list = $this->all();
    	foreach ($list as $k => $v) {
    		$list[$k] = $v->toArray();
    	}
		return $list;
    }

    public function getOne()
    {
    	# code...
    	$user = $this->get(1);
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