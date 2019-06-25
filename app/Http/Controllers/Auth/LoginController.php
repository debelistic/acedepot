<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Candidate;
use Illuminate\Database\Eloquent\Model;
use Lang;

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
    public function redirectTo()
    {
        $role = Auth::user()->role;
        if ($role === 'candidate') {
            return 'candidate-register';
        }else if ($role === 'employer') {
            return 'employer-dashboard';
        }else if ($role === 'contractor') {
            return 'contractor-dashboard';
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Redirect if failed
     */
    protected function sendFailedLoginResponse(Request $request)
    {
        return redirect()->to('/login')
            ->withInput($request->only($this->username(), 'remember'))
            ->withErrors([
                $this->username() => Lang::get('auth.failed'),
            ]);
    }

    /**
     * Redirect to dashboard if success
     */
    protected function authenticated(Request $request, $user) {
        $id = auth()->user()->id;
        $candidate = Candidate::where('candidate_id', $id)->get();
        if ($user->role == 'candidate') {
            if($candidate == null){
                return route('candidateRegForm');
            }
            return redirect('candidateDashboard');
        } else if ($user->role == 'employer') {
            return route('home');
        } else if ($user->role == 'contractor') {
            return route('home');
        }
   }
}
