<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Role::create(['name'=>'writer']);
        
        // Permission::create(['name'=>'write post']);
        // $role = Role::findById(1);
        // $permission = Permission::findById(1);
        //add  another permission to the role 
        // $role = Role::findById(1);
        // $permission = Permission::findById(2);
        // $role->givePermissionTo($permission);
        // Permission::create(['name'=>'edit post']);
        //revoke or remove the permission from the role
        // $permission = Permission::findById(2);
        // $role = Role::findById(1);
        // $permission->removeRole($role);
        //revoke the permission
        //  $role = Role::findById(1);
        //  $permission = Permission::findById(1);
        //  $role->revokePermissionTo($permission);

        //assign permission to the auth user
        // auth()->user()->givePermissionTo('edit post');
        // auth()->user()->givePermissionTo('write post');
      

        // //assign role 
        // auth()->user()->assignRole('writer');

        //check which permission is assign to user 
        // return auth()->user()->permissions;

        // return User::role('writer')->get();
        // return auth()->user()->revokePermissionTo('write post') ;
        // return User::permission('write post')->get();
        //remove the auth role 
        // return auth()->user()->removeRole('writer');
        // Role::create(['name'=>'publisher']);
        // Permission::create(['name'=> 'publish post']);
        
        // $permission = Permission::findById(3);
        // $permission->assignRole('editor');
        // $permission->removeRole('writer');
        // $user = User::find(2);

        // // for the activity updated event
        // $user = User::find(10);
        // $user->update(['name'=>'Alexendar','email'=>'alexendar@gmail.com']);

        //for delete event 
        // $user->delete();
        

        // return Activity::all()->last();
         
        //return only the description of last activity
        // $activity = Activity::all()->last();
        // return $activity->description;
        // return $activity->changes;  // return only the change in attribute instead of id, log_name,description ,etc
        // return $activity->subject; // return the instance of that attribute was created
        // return $activity->description;

       


        

   
        // $user->assignRole('editor');
        return view('admin');
    }
}
