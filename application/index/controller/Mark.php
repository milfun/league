<?php

/**
 * @Author: MilFun
 * @Date:   2019-10-22 08:41:08
 * @Last Modified by:   milfun
 * @Last Modified time: 2019-10-25 09:32:04
 */
namespace app\index\controller;

use think\Controller;
use think\Request;

class Mark extends Controller{

    public function index()
    {
        # code...
        /*$request = request();
        $aid=$request->param('aid');
        $res = model('Blog')->getById($aid);
        //dump($res);

        $this->assign('blog',$res);*/
        return $this->fetch('index/markdown');
    }
    /**
    *   MarkDown 提交文章信息
    */
    public function addBlog($value='')
    {
    	# code...
    	$request = request();
    	 if ($request->isPost()) {
    	 	$param=input('param.');
            $blog = model('Blog');
            $result = $blog->addBlog($param);
        }
    	# code...
        
        //dump($data) ;
        //$result = $this->where('username', 'MilFun5')->update($data);
    	return 'MilFun';
    }
}