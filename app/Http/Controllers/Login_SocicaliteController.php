<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use Auth;
use Socialite;

class Login_SocicaliteController extends Controller
{
    public function redirectProvider($social){
        return Socialite::driver($social)->redirect();
    }
    public function handleProviderCallback($social){
        $user=Socialite::driver($social)->user();
        $authUser = $this->findOrCreateUser($user);
        Auth::login($authUser);
        return redirect()->back();
    }
    public function findOrCreateUser($user){
        $authUser = User::where('social_id',$user->id)->first();
        if ($authUser) {
            return $authUser;
        }
        else {
           return User::create([
                'name'=>$user->name,
                'email'=>$user->email,
                'password'=>'',
                'social_id'=>$user->id,
                'rules'=>0,
            ]);
        }
    }
}
