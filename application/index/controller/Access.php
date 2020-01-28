<?php
/**
 * @Author: MilFun
 * @Date:   2019-09-25 10:57:55
 * @Last Modified by:   milfun
 * @Last Modified time: 2019-10-18 15:48:07
 */
namespace app\index\controller;
use think\Controller;
use think\Validate;

class Access extends Controller{
    public function _initialize()
    {
        //echo 'init<br/>';
        //$this->success('新增成功', 'User/list');
        //$this->error('新增失败');
        echo "Access  Controller";
        
    }

    public function passport($value='')
    {
        # code...
    }

    public function login()
    {
    	# code...
    	//echo "Hello MilFun";
        if (request()->isPost()) {
            # code...
            $data = input('post.');
            $checkResult = $this->checkFormData($data);
            if ($checkResult != '') {
                # code...
                $this->assign('show_error_tips',$checkResult);
            }
            $this->assign('data',$data);
            if (! $this->doLogin($data)) {
                # code...
                $this->assign('show_error_tips','用户名或密码错误');
            }else{
                $this->success('登陆成功',url('index'));
            }
        }else{
            echo "something wrong";
        }

    }

    public function checkFormData($data)
    {
        # code...
        $rule = [
            'mobile' => 'require|\d{11}',
            'password' => 'require|max:25|min:6'
        ];
        $msg = [
            'mobile.regex' => '手机格式错误',
            'password.require' => '密码不能为空'
        ];
        $validate = new Validate($rule,$msg);
        if (!$validate->check($data)) {
            # code...
            return $validate->getError();
        }
        return '';
    }

    private function doLogin($data)
    {
        # code...
        if (!empty($data)) {
            # code...
            $map = [
                'mobile' => $data['mobile'],
                'password' => sys_md5($data['password']),
                'status' => 1
            ];
            $user_info = model('Member')->getMemberWhere($map);
            if ($user_info === null) {
                # code...
                return false;
            }
            session('user_auth',$user_info);
            return true;
        }
        return false;
    }

}