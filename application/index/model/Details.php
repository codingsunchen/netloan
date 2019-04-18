<?php
namespace app\index\model;

use think\Model;

class Details extends Model
{
    // 项目表

    // 定义关联方法
    public function user()
    {
        return $this->belongsTo('Project', 'id', 'project_id');
    }     
}
