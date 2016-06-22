<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //初始化数据表
        DB::table('menus')->truncate(); //菜单权限表

        //创建权限数据
        //顶级菜单 ID:1
        factory(\App\Models\Menu::class)->create([
            'name'=>'菜单列表',
            'url'=>'',
            'status'=>2,
            'description' => '根节点,所有菜单的父节点'
        ]);

        //ID:2
        factory(\App\Models\Menu::class)->create([
            'name'=>'控制面板',
            'icons'=>'fa-dashboard',
            'url'=>'',
            'description' => '',
            'parent_id'=>1,
            'status'=>1
        ]);
        //ID:3
        factory(\App\Models\Menu::class)->create([
            'name'=>'开发工具',
            'icons'=>'fa-circle-o',
            'url'=>'',
            'description' => '开发模块',
            'parent_id'=>1,
            'status'=>1
        ]);

        //ID:4
        factory(\App\Models\Menu::class)->create([
            'name'=>'前端模块',
            'icons'=>'fa-wrench',
            'url'=>'',
            'description' => '前端所有路由',
            'parent_id'=>1,
            'status'=>1
        ]);
        //ID:5
        factory(\App\Models\Menu::class)->create([
            'name'=>'用户管理',
            'icons'=>'fa-users',
            'url'=>'',
            'description' => '用户模块',
            'parent_id'=>1,
            'status'=>1
        ]);
        //ID:6
        factory(\App\Models\Menu::class)->create([
            'name'=>'个人中心',
            'icons'=>'fa-heart',
            'url'=>'',
            'description' => '个人资料',
            'parent_id'=>1,
            'status'=>1
        ]);
        //ID:7
        factory(\App\Models\Menu::class)->create([
            'name'=>'其它板块',
            'icons'=>'fa-wrench',
            'url'=>'',
            'description' => '后台登录',
            'parent_id'=>1,
            'status'=>1
        ]);
        //ID:8
        factory(\App\Models\Menu::class)->create([
            'name'=>'创建代码',
            'icons'=>'fa-mouse-pointer',
            'prefix'=>'#',
            'url'=>'/admin/create-code',
            'description' => '创建代码',
            'parent_id'=>3,
            'status'=>1
        ]);
        //ID:9
        factory(\App\Models\Menu::class)->create([
            'name'=>'接口文档',
            'icons'=>'fa-asterisk',
            'prefix'=>'#',
            'url'=>'/admin/api',
            'description' => '接口说明',
            'parent_id'=>3,
            'status'=>1
        ]);
        //ID:10
        factory(\App\Models\Menu::class)->create([
            'name'=>'登录页面',
            'icons'=>'',
            'url'=>'/home/auth/login',
            'description' => '',
            'method'=>2,
            'parent_id'=>4,
            'status'=>1
        ]);
        //ID:11
        factory(\App\Models\Menu::class)->create([
            'name'=>'退出登录',
            'icons'=>'',
            'prefix'=>'',
            'url'=>'/home/auth/logout',
            'description' => '',
            'parent_id'=>4,
            'status'=>1
        ]);
        //ID:12
        factory(\App\Models\Menu::class)->create([
            'name'=>'后台主页',
            'icons'=>'fa-home',
            'prefix'=>'#',
            'url'=>'/admin/index',
            'description' => '后台首页',
            'parent_id'=>2,
            'status'=>1
        ]);

        //ID:13
        factory(\App\Models\Menu::class)->create([
            'name'=>'菜单管理',
            'icons'=>'fa-th',
            'prefix'=>'#',
            'url'=>'/admin/menu/index',
            'description' => '菜单管理',
            'parent_id'=>3,
            'status'=>1
        ]);

        //ID:14
        factory(\App\Models\Menu::class)->create([
            'name'=>'菜单列表',
            'icons'=>'fa-list',
            'prefix'=>'#',
            'url'=>'/admin/menu/index',
            'description' => '列表详细',
            'parent_id'=>13,
            'status'=>2
        ]);

        //ID:15
        factory(\App\Models\Menu::class)->create([
            'name'=>'编辑菜单',
            'icons'=>'fa-edit',
            'prefix'=>'#',
            'url'=>'/admin/menu/edit/{id?}',
            'method'=>1,
            'description' => '修改或添加数据',
            'parent_id'=>13,
            'status'=>2
        ]);

        //ID:16
        factory(\App\Models\Menu::class)->create([
            'name'=>'删除菜单',
            'icons'=>'',
            'prefix'=>'',
            'url'=>'/admin/menu/destroy',
            'method'=>2,
            'description' => '删除菜单',
            'parent_id'=>13,
            'status'=>2
        ]);

        //ID:17
        factory(\App\Models\Menu::class)->create([
            'name'=>'菜单置顶',
            'icons'=>'',
            'prefix'=>'',
            'url'=>'/admin/menu/move-top/{id}',
            'description' => '移动菜单节点位置',
            'method'=>2,
            'parent_id'=>13,
            'status'=>2
        ]);

        //ID:18
        factory(\App\Models\Menu::class)->create([
            'name'=>'测试菜单',
            'icons'=>'fa-th',
            'prefix'=>'#',
            'url'=>'/admin/test/index',
            'description' => '列表详细',
            'parent_id'=>7,
            'status'=>1
        ]);

        //ID:19
        factory(\App\Models\Menu::class)->create([
            'name'=>'测试列表',
            'icons'=>'fa-th',
            'prefix'=>'#',
            'url'=>'/admin/test/index',
            'description' => '列表详细',
            'parent_id'=>18,
            'status'=>2
        ]);

        //ID:20
        factory(\App\Models\Menu::class)->create([
            'name'=>'删除测试',
            'icons'=>'',
            'prefix'=>'',
            'url'=>'/admin/test/destroy',
            'method'=>2,
            'description' => '删除测试',
            'parent_id'=>18,
            'status'=>2
        ]);

        //ID:21
        factory(\App\Models\Menu::class)->create([
            'name'=>'编辑测试',
            'icons'=>'fa-th',
            'prefix'=>'#',
            'url'=>'/admin/test/edit/{id?}',
            'method'=>2,
            'description' => '',
            'parent_id'=>18,
            'status'=>2
        ]);

        //ID:22
        factory(\App\Models\Menu::class)->create([
            'name'=>'权限管理',
            'icons'=>'fa-group',
            'prefix'=>'#',
            'url'=>'/admin/role/index',
            'method'=>1,
            'description' => '角色的权限管理',
            'parent_id'=>5,
            'status'=>1
        ]);

        //ID:23
        factory(\App\Models\Menu::class)->create([
            'name'=>'角色列表',
            'icons'=>'fa-list',
            'prefix'=>'#',
            'url'=>'/admin/role/index',
            'method'=>1,
            'description' => '列表详情',
            'parent_id'=>22,
            'status'=>2
        ]);

        //ID:24
        factory(\App\Models\Menu::class)->create([
            'name'=>'角色编辑',
            'icons'=>'fa-edit',
            'prefix'=>'#',
            'url'=>'/admin/role/edit/{id?}',
            'method'=>2,
            'description' => '添加或编辑角色',
            'parent_id'=>22,
            'status'=>2
        ]);

        //ID:25
        factory(\App\Models\Menu::class)->create([
            'name'=>'删除角色',
            'icons'=>'',
            'prefix'=>'',
            'url'=>'/admin/role/destroy',
            'method'=>2,
            'description' => '删除角色',
            'parent_id'=>22,
            'status'=>2
        ]);

        //新建假数据3条
        //factory(\App\Models\Menu::class,3)->create();
    }
}
