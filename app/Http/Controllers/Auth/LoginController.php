<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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


    public function login(Request $request)
    {   
        $input = $request->all();
     
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);
     
        if(auth()->attempt(array('username' => $input['username'], 'password' => $input['password'])))
        {
            if (auth()->user()->role == 'admin') 
            {
              return redirect()->route('admin.home');
            }
            else if (auth()->user()->role == 'darab') 
            {
              return redirect()->route('darab.home');
            }
            else if (auth()->user()->role == 'legal') 
            {
              return redirect()->route('legal.home');
            }
            else if (auth()->user()->role == 'records') 
            {
              return redirect()->route('records.home');
            }
            else if (auth()->user()->role == 'personnel') 
            {
              return redirect()->route('personnel.home');
            }
            else if (auth()->user()->role == 'planning') 
            {
              return redirect()->route('planning.home');
            }
            else if (auth()->user()->role == 'gsu') 
            {
              return redirect()->route('gsu.home');
            }
            else if (auth()->user()->role == 'cashering') 
            {
              return redirect()->route('cashering.home');
            }
            else if (auth()->user()->role == 'budget') 
            {
              return redirect()->route('budget.home');
            }
            else if (auth()->user()->role == 'accounting') 
            {
              return redirect()->route('accounting.home');
            }
            else
            {
              return redirect()->route('home');
            }
        }
        else
        {
            return redirect()
            ->route('login')
            ->with('error','Username or Password doesnt match');
        }
    }


}
