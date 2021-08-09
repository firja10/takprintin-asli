<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
// use App\Http\Controllers\Auth\User;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function showLoginForm()
    {
        return view('pages.auth.login');
    }







    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (auth()->user()->is_admin == 1) {
                return redirect()->route('admin.home');
            }else{
                return redirect()->route('home');
            }
        }else{
            return redirect()->route('login')
                ->with('error','Email / Password anda salah.');
        }

    }
    
    
    
    
    
        public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    
    
    public function handleGoogleCallback()
    {
        try{
            $user = Socialite::driver('google')->user();
        }catch (Exception $e) {
            return redirect('auth/google');
        }

        $authUser = $this->CreateUser($user);
        Auth::login($authUser, true);
        // return redirect()->route('home');
        return redirect('/');
    }




 public function facebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
 
    public function facebook_callback()
    {
        // try {
     
        //     $user = Socialite::driver('facebook')->stateless()->user();
 
        //     /// lakukan pengecekan apakah facebook id nya sudah ada apa belum
        //     $isUser = User::where('facebook_id', $user->id)->first();
             
        //     /// jika sudah ada, langsung login
        //     if($isUser){
                 
        //         Auth::login($isUser);
        //         return redirect('/home');
 
        //     } 
            
            
        //     else { /// jika belum ada, register baru
 
        //         $createUser = new User;
        //         $createUser->name =  $user->getName();
 
        //         /// mendapatkan email dari facebook
        //         if($user->getEmail() != null){
        //             $createUser->email = $user->getEmail();
        //             $createUser->email_verified_at = \Carbon\Carbon::now();
        //         }  
                 
        //         /// tambahkan facebook id
        //         $createUser->facebook_id = $user->getId();
 
        //         /// membuat random password
        //         $rand = rand(111111,999999);
        //         $createUser->password = Hash::make($user->getName().$rand);
 
        //         /// save
        //         $createUser->save();
                 
        //         /// login
        //         Auth::login($createUser);
        //         return redirect('/');
        //     }
     
        // } catch (Exception $exception) {
        //     dd($exception->getMessage());
        // }

        try{
            $user = Socialite::driver('facebook')->user();
        }catch (Exception $e) {
            return redirect('auth/facebook');
        }

        $authUser = $this->CreateUser($user);
        Auth::login($authUser, true);
        // return redirect()->route('home');
        return redirect('/');





    }




        public function Github()
    {
        return Socialite::driver('github')->redirect();
    }
    
    
    

  public function handleGithubCallback()
    {
        try{
            $user = Socialite::driver('github')->user();
        }catch (Exception $e) {
            return redirect('auth/github');
        }

        $authUser = $this->CreateUser($user);
        Auth::login($authUser, true);
        // return redirect()->route('home');
        return redirect('/');
    }








    public function CreateUser($user)
    {
        $authUser = User::where('email', $user->email)->first();
        if ($authUser) {
            return $authUser;

        }
        return User::create([
            'name'     => $user->name,
            'email'    => $user->email,
            'google_id'=>$user->id,
            'facebook_id'=>$user->id,
            'github_id'=>$user->id,
            'password'=>bcrypt('12345678'),
        ]);
    }

    
    
    
    
    







}
