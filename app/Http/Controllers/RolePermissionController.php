<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionController extends Controller
{
    public function rolePermissionPage(){

    	$permissions = Permission::all();

    	return view('back-end.role-permission.create',[
    			'permissions'	=>	$permissions
    	]);
    }
    
    public function roleSave(Request $request){

    	$request->validate([
 			'name'	=> 'required|unique:roles'
    	],[
    		'name.required' => 'give a role name'
    	]);

       $role = Role::create(['name' => $request->name,'guard_name' => 'admin']);
       $permissions = $request->permission;

       if(!empty($permissions)){
       	$role->syncPermissions($permissions);
       }
        
        return redirect()->back();
    }

    public function permissionSave(Request $request){

    	Permission::create(['name'	=>	$request->name,'guard_name' => 'admin']);

    	return redirect()->back();

    }

}
