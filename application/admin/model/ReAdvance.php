<?php

namespace app\admin\model;

use think\Model;

class ReAdvance extends Model
{
    // 表名
    protected $table = 're_advance';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = false;

    // 定义时间戳字段名
    protected $createTime = false;
    protected $updateTime = false;
    
    // 追加属性
    protected $append = [

    ];


    public function reCompany()
    {
        return $this->belongsTo('reCompany', 're_company_id','id','','left')->setEagerlyType(0);
    }

    public function user()
    {
        return $this->belongsTo('user', 'user_id','id','','left')->setEagerlyType(0);
    }

    public function reResume()
    {
        return $this->belongsTo('re_resume', 'user_id','user_id','','left')->setEagerlyType(0);
    }









}
