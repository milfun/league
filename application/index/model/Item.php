<?php

/**
 * @Author: MilFun
 * @Date:   2019-09-23 15:31:17
 * @Last Modified by:   milfun
 * @Last Modified time: 2019-10-25 11:15:22
 */
namespace app\index\model;

use think\Model;

class Item extends Model
{

    //根据aid获取item name内容
    public function getItemById($id,$field)
    {
        # code...
        $map['id'] = $id;
        $res = $this->where($map)->field($field)->find();
        //dump($res);
        //$res = json_decode(json_encode($res),true);
        return $res;
    } 
}