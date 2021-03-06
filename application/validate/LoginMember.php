<?php
/**
 * Created by PhpStorm.
 * User: lucong
 * Date: 2017/3/26
 * Time: 下午7:45
 */

namespace app\validate;


use think\Validate;

class LoginMember extends Validate {

    protected $rule = [
        'phone' => 'require',
        'password' => 'require|min:6',
        'captcha'=>'require|captcha'
    ];

    protected $message = [

        'phone.require' => '请输入电话号码',
//         'email.token' => '请不要重复提交',
        'password.require' => '请输入密码',
        'password.min' => '密码长度不够',
        'captcha.require' => '请输入验证码',
        'captcha.captcha' => '验证码不正确'

    ];
}