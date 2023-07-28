<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Admin_users;

class Admin_usersController extends Controller
{
    public function getlist()
   {
   		$data = Admin_users::paginate(10);
    	return view('backEnd.admin_mem.list',['data'=>$data]);
   }

   public function create(Request $request)
   {
       return view('backEnd.admin_mem.create');
   }

   public function store(Request $request)
   {
       $request = $request->all();
       Admin_users::create([
           'name' => $request['name'],
           'email' => $request['email'],
           'password' => bcrypt($request['password']),
           'level' => '1',
       ]);
       return redirect()->route('getnv');
   }
   public function getdel($id)
   {
       dd($id);
   }

}
