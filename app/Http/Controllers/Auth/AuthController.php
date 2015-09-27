<?php

namespace App\Http\Controllers\Auth;

use App\User; 
use App\Model\UserRegister; // add 
use App\Model\FbUserRegister; // add
use App\Http\Requests;
use Request; //add
use App\Http\Middleware; // add
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Laravel\Socialite\Facades\Socialite;




class AuthController extends Controller
{
    
    
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;
 
    protected $redirectAfterLogout = '/auth/login';
    private $redirectTo = '/';
    private $maxLoginAttempts = 5;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return UserRegister::create([
            'name' => $data['name'],
            'email' => $data['email'],  
            'password' => bcrypt($data['password']),
        ]);
        
    }

    
    // User Register
    public function getRegister()
    {
        return view('auth.register');
    }

    public function postRegister()
    {
        $input = Request::all();
        
        $this->create($input);
          
        return redirect('login');
        
    }

    // User Login
    public function getLogin()
    {
        return view('auth.login');
    }

    

// Fb LoginAuthentication

   

    public function redirectToProvider()
    {   
        return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback()
    {   
       
        try {

            $user = Socialite::driver('facebook')->user();

        } catch (Exception $e) {

            return redirect('auth/login');
        }

        $authUser = $this->findOrCreateUser($user);

        Auth::login($authUser, true);

        return redirect('login');
    }

    private function findOrCreateUser($FbUser)
    {
        if ($authUser = FbUserRegister::where('email', $FbUser->email)->first()) {
            return $authUser;
        }

        return FbUserRegister::create([
            // 'fb_id' => $FbUser->id,
            'name' => $FbUser->name,
            'email' => $FbUser->email,          
            'avatar' => $FbUser->avatar
        ]);
    }

}


