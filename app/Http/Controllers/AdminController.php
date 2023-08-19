<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
//        $owner = Role::create([
//            'name' => 'owner',
//            'display_name' => 'Project Owner', // optional
//            'description' => 'User is the owner of a given project', // optional
//        ]);
//
//        $admin = Role::create([
//            'name' => 'admin',
//            'display_name' => 'User Administrator', // optional
//            'description' => 'User is allowed to manage and edit other users', // optional
//        ]);

//        $createPost = Permission::create([
//            'name' => 'create-job',
//            'display_name' => 'Create jobs', // optional
//            'description' => 'create new job', // optional
//        ]);
//
//        $editUser = Permission::create([
//            'name' => 'create-user',
//            'display_name' => 'Create Users', // optional
//            'description' => 'create new  users', // optional
//        ]);

//               givePermissions() , ->permissions()->sync()
        /*
        $job_id = 3;
        $user_id = 4;
        $permission_create_job = Permission::query()->where('id',$job_id)->first();
        $permission_create_user = Permission::query()->where('id',$user_id)->first();
        $owner = User::query()->where('name','Admin')->first();

        $owner->givePermissions([$permission_create_job->id, $permission_create_user->id]);
                    extra tips for assigning
        $admin->givePermission($createPost); // parameter can be a Permission object, array or id
        equivalent to $admin->permissions()->attach([$createPost->id]);

        $owner->givePermissions([$createPost, $editUser]); // parameter can be a Permission object, array or id
        equivalent to $owner->permissions()->attach([$createPost->id, $editUser->id]);

        $owner->syncPermissions([$createPost, $editUser]); // parameter can be a Permission object, array or id
        equivalent to $owner->permissions()->sync([$createPost->id, $editUser->id]);
        */






//     removePermission() , removePermissions()
        /*
        $job_id = 3;
        $user_id = 4;
        $permission_create_job = Permission::query()->where('id',$job_id)->first();
        $permission_create_user = Permission::query()->where('id',$user_id)->first();
        $owner = User::query()->where('name','Admin')->first();
        $owner->removePermissions([$permission_create_job->id, $permission_create_user->id]);


        $admin->removePermission($createPost); // parameter can be a Permission object, array or id
        equivalent to $admin->permissions()->detach([$createPost->id]);

        $owner->removePermissions([$createPost, $editUser]); // parameter can be a Permission object, array or id
        equivalent to $owner->permissions()->detach([$createPost->id, $editUser->id]);

        */




        // role user
/*
        $user = User::query()->where('name','Owner')->first();
        $owner = Role::query()->where('name','owner')->first();
        $user->addRole($owner->id);

        $user->addRole($admin); // parameter can be a Role object, BackedEnum, array, id or the role string name
        equivalent to $user->roles()->attach([$admin->id]);

        $user->addRoles([$admin, $owner]); // parameter can be a Role object, BackedEnum, array, id or the role string name
        equivalent to $user->roles()->attach([$admin->id, $owner->id]);

        $user->syncRoles([$admin->id, $owner->id]);
        equivalent to $user->roles()->sync([$admin->id, $owner->id]);

        $user->syncRolesWithoutDetaching([$admin->id, $owner->id]);
        equivalent to $user->roles()->syncWithoutDetaching([$admin->id, $owner->id]);
       */

        // checking assignment
        /*
        $user = User::query()->where('name','Owner')->first();
        echo $user->hasRole('owner');

        $user->hasRole('owner');   // false
        $user->hasRole('admin');   // true
        $user->hasPermission('edit-user');   // false
        $user->isAbleTo('edit-user');   // false
        $user->hasPermission('create-post'); // true
        $user->isAbleTo('create-post'); // true

        */
        $user = User::query()->where('name','Owner')->first();
        echo $user->ability(['admin'], ['create-post', 'delete-user']);
    }
}
