<?php

/**
 * @Author: MilFun
 * @Date:   2019-10-21 14:32:38
 * @Last Modified by:   milfun
 * @Last Modified time: 2019-10-28 10:37:30
 */
namespace app\index\controller;

use think\Controller;
use think\Request;

class Blog extends Controller{
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

    public function index()
    {
        # code...

        $request = request();
        $aid=$request->param('aid');
        $blog = model('Blog');
        $res = $blog->getById($aid);
        $comBlog = $blog->getComBlog();
        //dump($res);
        //dump(config('copy_right'));
        $this->assign('blog',$res);
        $this->assign('comblog',$comBlog);
        return $this->fetch('index/detail');
    }
    /**
    *	首页文章展示3篇热门文章
    */
    public function getHotBlog()
    {
        # code...
        $hot = cache('hot_blog');
        //cache('hot_blog',null);
        if (!$hot) {
            //echo "111111111";
            $hot =model('Blog')->getHotBlog();
            cache('hot_blog',$hot,3600);
        }
        $this->assign('hot_blog',$hot);
        return $hot;
    }
    /**
    *	首页推荐文章展示8篇
    */
    public function getSugBlog()
    {
        # code...
        $sug = cache('sug_blog');
        //cache('sug_blog',null);
        if (!$sug) {
            //echo "111111111";
            $sug =model('Blog')->getSugBlog();
            cache('sug_blog',$sug,3600);
        }
        $this->assign('sug_blog',$sug);
        return $sug;
    }

    /**
    *   文章页前往分类列表
    */
    public function getItemList($item)
    {
        # code...
        $search = cache('search_blog_'.$item);
        //cache('sug_blog',null);
        if (!$search) {
            $map['item'] = $item;
            $map['type'] = 1;
            $search =model('Blog')->getItem($map);
            cache('search_blog_',$search,3600);
        }
        $this->assign('search_blog',$search);
        return $search;
    }
}