<?php

namespace App\Http\Controllers\Auth;

use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\User;

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
    protected $redirectTo = '/';

    public function __construct(Request $request)
    {
        $this->middleware('guest', ['except' => ['logout', 'userLogout']]);

        $this->request = $request;
    }

    public function userLogout()
    {
        Auth::guard('web')->logout();
        return redirect('/');
    }

    public function redirectTo()
    {
        if ($this->request->has('previous')) {
            $this->redirectTo = $this->request->get('previous');
        }
        return $this->redirectTo ?? '/';
    }

    // Social Login

    public function redirectToProvider(){
        return Socialite::driver('google')->redirect();
    }
    public function redirectToFacebook(){
        return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->user();

        $dbUser = User::where('email', $user->email)->first();

        if($dbUser){
          \Auth::login($dbUser);
          return redirect('/');
        } else {
          // register new user
          $user = new User;
          $user->name = $user->name;
          $user->email = $user->email;
          $user->password = bcrypt('password');
          $user->save();

          \Auth::login($user);
          return redirect('/');
        }
    }
    public function facebookCallback()
    {
        $user = Socialite::driver('facebook')->user();

        $dbUser = User::where('email', $user->email)->first();

        if($dbUser){
          \Auth::login($dbUser);
          return redirect('/');
        } else {
          // register new user
          $user = new User;
          $user->name = $user->name;
          $user->email = $user->email;
          $user->password = bcrypt('password');
          $user->save();

          \Auth::login($user);
          return redirect('/');
        }
    }


}
