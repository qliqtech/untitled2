<?php


namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\Database\Eloquentuse;
use Illuminate\Support\Facades\Input;
use Hash;
use Illuminate\Support\Str;



class RegisterationController extends Controller
{
    public function SignUp(Request $request){

       $user = new User();

        $user->name = $request->name;
        $user->dob  = $request->dob;
        $user->is_active = 1;
        $user->is_deleted = 0;
       // $user->deleted_on;
        $user->email = $request->email;
      //  $user->email_verified_at = $request->email
        $user -> password = Hash::make($request->password);
        $user -> api_token = Str::random(10);

       $user -> save();


    }

}
