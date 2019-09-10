<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\User;
use Laravel\Socialite\Facades\Socialite;

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
    use Socialite;
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

    public function redirectToProvider($provider){
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        try{
          $user = Socialite::driver($provider)->user();
        } catch (Exception $e) {
          return redirect('/login');
        }

        $authUser = $this->findOrCreateUser($user, $provider);

        Auth::login($authUser, true);
        return redirect('/');
    }

    public function findOrCreateUser($socialUser, $provider)
    {
      $socialAccount = SocialAccount::where('provider_id', $socialUser->getId())
                      ->where('provider_name', $provider)
                      ->first();
      if($socialAccount){
          return $socialAccount->user;
      } else {
        $user = User::where('email', $socialUser->getEmail())->first();

        if(! $user) {
          $user = User::create([
            'name' => $socialUser->getName(),
            'email'=> $socialUser->getEmail()
          ]);
        }

        $user->socialAccounts()->create([
          'provider_id' => $socialUser->getId(),
          'provider_name' => $provider
        ]);

        return $user;

      }

    }


}
