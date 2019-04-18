<?php
namespace app\index\validate;
use think\Validate;
class Users extends Validate
{
    // 验证规则
    protected $rule = [
        ['nickname', 'require|min:5', '昵称必须|昵称不能短于5个字符'],
        ['email', 'email', '邮箱格式错误'], // 更多 内置规则 http://www.kancloud.cn/manual/thinkphp5/129356
        //['email', 'checkMail:www.tp-shop.cn', '邮箱格式错误'],
        ['birthday', 'dateFormat:Y-m-d', '生日格式错误'],
    ];
    
    // 验证邮箱格式 是否符合指定的域名
    protected function checkMail($value, $rule)
    {
        $result = strstr($value,$rule);
        if($result)
            return true;
        else
            return "邮箱必须包含 $rule 域名";
    }    
}