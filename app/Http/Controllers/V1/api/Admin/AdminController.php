<?php

namespace App\Http\Controllers\V1\api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use App\Trait\ResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
   use ResponseTrait;
   public function loginBlade(){
     return view('admin.auth.login');
   }
   public function login(LoginRequest $loginRequest){
    $user = User::where('email',$loginRequest->email)->firstOrFail();
    if(Hash::check($loginRequest->password,$user->password)){
    }
    return redirect()->route('manager.courses');
   }
}
