<?php
/**
 * 后台角色表
 */
namespace App\Models;

use App\BaseModel;
use App\Exceptions\MarginTree\ExcludeTop;
use App\Exceptions\MarginTree\TreeModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends BaseModel
{
    use TreeModel; //树状结构
    use SoftDeletes; //软删除

    //批量赋值白名单
    protected $fillable = ['id','name','description','parent_id'];
    //输出隐藏字段
    protected $hidden = ['deleted_at'];
    //日期字段
    protected $dates = ['created_at','updated_at','deleted_at'];

    /* 角色-权限菜单 */
    public function menus(){
        return $this->belongsToMany('App\Models\Menu');
    }

    /* 角色-用户 */
    public function adminUsers(){
        return $this->belongsToMany('App\Models\AdminUser');
    }
}
