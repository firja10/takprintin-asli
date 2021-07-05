<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    //
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }


public function handleGoogleCallback()
{
    # code...
    try {
        $user = Socialite::driver('google')->user();
        // dd($user);
        $finduser = User::where('google_id',$user->getId())->first();
        // dd($user->id);
        // dd($user);
        if($finduser){
            Auth::login($finduser);
            return redirect()->intended('dashboard');
        }
        else {
            // dd($user->id);
            $newUser = User::create([
                // 'name' => $user->getName(),
                // 'username' =>$user->getEmail(),
                // 'email' => $user->getEmail(),
                // 'google_id'=>$user->getId(),
                // 'password'=>bcrypt('12345678'),
                'name' => $user->name,
                'username' =>$user->email,
                'email' => $user->email,
                'google_id'=>$user->id,
                'password'=>bcrypt('12345678'),
            ]);
            Auth::login($newUser);
            // return redirect()->intended('dashboard');
            return redirect('/');
        }

    } catch (\Throwable $th) {
        //throw $th;
    }
}
}
