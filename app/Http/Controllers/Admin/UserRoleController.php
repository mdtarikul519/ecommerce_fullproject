<?php

namespace App\Http\Controllers\Admin;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserRoleController extends Controller
{
   public function create(){
      return view('admin.user_role.create');
   }
}
