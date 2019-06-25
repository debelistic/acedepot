<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;



use Illuminate\Http\Request;

class RegisterController extends Controller
{
    

    use RegistersUsers;

    
    protected function redirectTo()
    {
       if(Auth::guard()->check() === true){
        $role = auth()->user()->role;

        if ($role === 'candidate') {
            return route('candidateRegForm');
        }else if ($role === 'employer') {
            return redirect('home');
        }else if ($role === 'contractor') {
            return redirect('home');;
        }
       }
        return redirect('register');;
    }

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    
    protected function create(array $data)
    {
        try {

            // $this->validate($data, [
            //     'first_name' => ['required', 'string', 'max:255'],
            //     'last_name' => ['required', 'string', 'max:255'],
            //     'role' => [
            //         'required',
            //         Rule::in(['candidate', 'employer', 'contractor'])
            //     ],
            //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            //     'password' => ['required', 'string', 'min:8', 'confirmed'],
            // ]);


            $user = User::create([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'role' => $data['role'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);
            //Auth::login();
            //return $this->redirectTo();
            return $user;
        } catch (\Illuminate\Database\QueryException $th) {
            return redirect('register')->withError($th->getMessage())->withInput();
        }
    }
}
