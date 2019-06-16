<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //public $redirectTo = '/home';
    protected function redirectTo()
    {
        $role = auth()->user()->role;
        dd($role);
        // if ($role === 'candidate') {
        //     return '/candidate-register';
        // }else if ($role === 'employer') {
        //     return '/employer_dashboard';
        // }else if ($role === 'contractor') {
        //     return '/contractor_dashboard';
        // }
        // return '/register';
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validator(array $data)
    {
        try {
            return Validator::make($data, [
                'first_name' => ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:255'],
                'role' => ['required', 'string', 'max:50'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);
        } catch (Illuminate\Database\QueryException  $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $data)
    {
        //$this->validator($data, []);
        try {
            User::create([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'role' => $data['role'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);
            //return $this->redirectTo();
            $role = $data['role'];
            if ($role == 'candidate') {
                return redirect( '/candidate-register');
            }
            //else if ($role == 'employer') {
            //     return redirect('/employer_dashboard');
            // }else if ($role == 'contractor') {
            //     return redirect('/contractor_dashboard');
            // }else{
            //     return redirect('some/url');
            // }
            //return '/register';
            //return redirect('login');
            return redirect('/about');
        } catch (\Illuminate\Database\QueryException $th) {
            //dd($th->getMessage());
            return redirect('/register')->withError($th->getMessage())->withInput();
        }
    }

    /**
     * Redirect to dashboard if success
     */
    protected function authenticated(Request $request, $user) {
        if ($user->role == 'candidate') {
            return redirect('/candidate-register');
        } else if ($user->role == 'employer') {
            return redirect('/employer-dashboard');
        } else if ($user->role == 'contractor') {
            return redirect('/contractor-dashboard');
        }
   }
}
