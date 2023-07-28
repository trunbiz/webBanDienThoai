<?php

namespace App\Http\Controllers;

use App\Admin_users;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UsersController extends Controller
{
   public function getlist()
   {
   		$data = User::paginate(10);
    	return view('backEnd.users.list',['data'=>$data]);
   }
   public function getedit($id)
   {
   		$data = User::where('id',$id)->first();
   		return view('backEnd.users.edit',['data'=>$data]);
   }
    public function getdel($id)
    {
        $userId = User::find($id);
        $userId->delete();
        $admin = Admin_users::find($id);
        $admin->delete();
        return back();
    }
}
