<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\ViewErrorBag;
use Illuminate\Support\MessageBag;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('login')->except('register');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        if($this->hasTooManyLoginAttempts($request)) {
            return back()->with(['error' => ['email' => 'Too Many Attempts.']]);
        }



        $attempts = $request->session()->get('attempts');
        $request->session()->put('attempts', $attempts ? $attempts + 1 : 1);


        $user = User::where('email', $request->email)->first();


        if(hash_check($request->password, $user->password)) {
            \Auth::login($user);
            $request->session()->put('attempts', null);
            return back();
        }


        return back();
    }


    protected function hasTooManyLoginAttempts(Request $request) {
        return $request->session()->get('attempts') > 3;
    }

    public function register(Request $request)
    {
        
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed'
        ]);

        $user = $this->create($request->all());

        \Auth::login($user);

        return redirect('/dashboard');
    }

    public function create(array $data)
    {
       return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => \Hash::make($data['password']),
        ]);
    }
}
