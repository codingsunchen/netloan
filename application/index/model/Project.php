<?php
namespace app\index\model;
use think\Model;
use think\Session;
class Project extends Model
{
    // 项目表

    public function detail()
    {
        //project_id是tp_details表的外键， id是tp_project表的主键
        return $this->hasMany('Details', 'project_id', 'id');
    }  

    protected function scopeBorrow($query)
    {
        echo "call scopeborrow" . "<br>";
        $myid = Session::get('user_id');
        $query->where('borrow_id', $myid);
    }

    protected function scopeIssuccess($query)
    {
        $query->where('issuccess', 1);
    }
    
}
 
