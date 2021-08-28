<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    function login (Request $req)
    {
        //return $req->input(); 
        
        $user= User::where(['email'=>$req->email])->first();
        if(!$user ||!Hash::check($req->password,$user->password)) //check func takes 2 params, one req coming from using and other user which is getting password from DB
        {
            return "User name or password is not matched";
        }
        else
        {
            $req->session()->put('user',$user);
            return redirect ('/product');
            //return response()->json($req);
            //return json_decode($req->getBody(), true)['access_token'];
           
        }
    }
function register(Request $req)
{

//return $req->input();

$user=new User;
$user->name=$req->name;
$user->email=$req->email;
$user->password=Hash::make($req->password);
$user->save();
return response()->json($user);
return redirect('/login');


}


}
