<?php
namespace App\Services;
use Auth;
use App\User;
use App\Models\Role;
use App\Models\Role_User;
use App\Models\Role_Menu;
use App\Models\Menu;
use redirect;
use Smenu;
use App\Models\Admin;

class Backend
{

    #----------------------------------------#
    #       Quản lý và phân quyền admin      #
    #       không tùy tiện thay đổi          #
    #----------------------------------------#
    public function role($module, $id )
    {
        return Role::where('status',STATUS_PUBLIC)
                    ->where('id',$id)
                    ->where('module',$module)
                    ->first();

    }

    public function roles($filters = array(),$count = false)
    {
        if (isset($filters)) {
            $roles = Role::where('status',STATUS_PUBLIC);
                if (isset($filters['id'])) {
                    $roles->where('id',$filters['id']);
                }
                if (isset($filters['module'])) {
                    $roles->where('module',$filters['module']);
                }
                $roles->get();
                $roles->toArray();
            return $roles;
        }
        return Role::all();
    }

    public function userHasRole($user_id)
    {
        return Role_User::where('user_id',$user_id)
                        ->first();
    }

    public function RoleHasManyMenu($role_id)
    {
        return Role_Menu::where('role_id', $role_id)
                            ->get()->toArray();
    }

    public function getAllMenuByRole($module = MODULE_CMS,$parent_id, $idIn)
    {
        $menus = Menu::where('module',$module)
                       ->where('parent_id',$parent_id)
                       ->whereIn('id',$idIn)
                       ->where('status',STATUS_PUBLIC)
                       ->orderBy('sort_order','ASC')
                       ->get()->toArray();
        return $menus;
    }

    public function checkRoleMenuByLink($module = MODULE_CMS,$permission)
    {
        $menu = Menu::where('module',$module)
                       ->where('permission',$permission)
                       ->where('status',STATUS_PUBLIC)
                       ->first();
        return $menu;
    }

    public function checkRole($permission)
    {

        $roleUser = Backend::userHasRole(Auth::id());
        if (!$roleUser) {
            abort(401, "You don't have permissions to access this area");
        }
        $role = Backend::role($module = MODULE_CMS ,$id = $roleUser->role_id);
        if (!$role) {
            abort(401, "You don't have permissions to access this area");
        }
        $roleMenu = Backend::RoleHasManyMenu($role->id);
        if (!$roleMenu) {
            abort(401, "You don't have permissions to access this area");
        }
        $menuIdArray = array_column($roleMenu, 'menu_id');
        $menuCheck = Backend::checkRoleMenuByLink(MODULE_CMS,$permission);
        if (!$menuCheck) {
            abort(401, "Trang bạn truy cập không tồn tại");
        }
        if (!in_array($menuCheck->id, $menuIdArray)) {
            abort(401, "You don't have permissions to access this area");
        }


    }

    public function menuRole()
    {
        $roleUser = Backend::userHasRole(Auth::id());
        $roleMenu = Backend::RoleHasManyMenu($roleUser->role_id);
        $menuIdArray = array_column($roleMenu, 'menu_id');
        $menuList = Backend::getAllMenuByRole(MODULE_CMS,0,$menuIdArray);
        if ($menuList) {
            foreach ($menuList as $k => $value) {
                $menuList[$k]['child'] =  Backend::getAllMenuByRole(MODULE_CMS,$value['id'],$menuIdArray);
            }
        }
        return $menuList;
    }

    public function breadcrumbs($module, $permission)
    {
        $modulePath = array('cms.menu','cms.menu.create','cms.menu.edit','cms.role','cms.role.create','cms.role.edit');
        $menu = Backend::checkRoleMenuByLink($module = MODULE_CMS,$permission);
        if ($menu && in_array($permission, $modulePath)) {
            $link = '<a href="'.url('/'.ADMIN_PATH.$menu->link).'">'.$menu->name.'</a>';
            return $link;
        }
        return null;
    }

    public function isAdmin()
    {
        if (Admin::where('module',1)->where('user_id',Auth::id())->first()) {
            return true;
        }
        return false;
    }

#========================== end Role permission =====================================#

}
