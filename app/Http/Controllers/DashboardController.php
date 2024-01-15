<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\UserDataTable;
use App\Models\User;
use Spatie\Permission\Models\Permission;

class DashboardController extends Controller
{
    public function dashboard() {
        $page = "dashboard";
        return view('dashboard', compact('page'));
    }

    public function user(UserDataTable $dataTable) {
        $page = "user";
        return $dataTable->render('user.index', compact('page'));
    }

    public function userCreate(Request $request) {
        $page = "user";
        if($request->password != $request->password_confirmation) {
            alert()->error('Password and password confirmation must be same', 'Error');
            return redirect()->route('user');
        }
        $user = new User();
        $user->kode = $request->kode;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->MM_Store_Code = $request->storeCode;
        if($user->MM_Store_Code == 'MM') {
            $user->MM_Store_Name = 'Maju Motor';
        } else {
            $user->MM_Store_Name = 'Maju Motor Oli';
        }
        $user->password = \Hash::make($request->password);
        $user->save();
        alert()->success('User created successfully', 'Success');
        return redirect()->route('user');
    }

    public function userEdit($id) {
        $page = "user";
        $user = User::find($id);
        $userPermissions = $user->getAllPermissions();
        $allPermissions = Permission::all();
        $permissions=[];

        foreach($allPermissions as $aPermission) {
            $permissions[$aPermission->name] = "";
            foreach($userPermissions as $rPermission) {
                if($aPermission->id == $rPermission->id) {
                    $permissions[$aPermission->name] = "checked";
                }
            }
        }
        return view('user.permission', compact('page', 'permissions', 'id', 'user'));
    }

    public function userSave(Request $request) {
        $page = "user";
        $user = User::find($request->user_id);
        $user->syncPermissions($request->permission);

        $user->name = $request->name;
        $user->MM_Store_Code = $request->storeCode;
        if($user->MM_Store_Code == 'MM') {
            $user->MM_Store_Name = 'Maju Motor';
        } else {
            $user->MM_Store_Name = 'Maju Motor Oli';
        }
        $user->save();
        alert()->success('User permission saved successfully', 'Success');
        return redirect()->route('user');
    }

}
