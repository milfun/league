<?php
namespace app\index\controller;

use think\Controller;
use think\Request;
use app\index\controller\Config;
use app\index\controller\Blog;

class Index extends Controller{
    public function _initialize()
    {
        // 配置变化后，快速清空
        //cache('DB_CONFIG_DATA',null);

        $conf = new Config;
        $conf->getConfigCache();
        if (!is_open()) {
            $this->error('网站已经关闭');
        }
        //dump(is_open());
        //dump(config('site_name'));
    }

    /**
    *   首页
    */
    public function index(){
        
        $blog = new Blog();
        $blog->getHotBlog();
        $blog->getSugBlog();
        //cache('hot_blog',null);
        //dump(cache('hot_blog'));
        //var_dump($s) ;
        return $this->fetch('index');
        
    }

    /**
    *   不同分类文章搜索
    */
    public function search()
    {
        # code...
        $item = input('item');
        //dump($item);
        $blog = new Blog();
        $res = $blog->getItemList($item);
        return $this->fetch('search');

    }


    /**
    *   404导航
    */
    public function _404()
    {
        # code...
        return $this->fetch('404');
    }
 

}