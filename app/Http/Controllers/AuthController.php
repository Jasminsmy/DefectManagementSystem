<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;
use App\Models\User;
use App\Models\defectfile;
use Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function registration()
    {
        return view('register');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email'=> 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email','password');
        if (Auth::attempt($credentials))
        {
            return redirect()->intended('dashboard')
                            ->withSuccess('You have successfully logged in');
        }

        return redirect("login")->withSuccess('You have entered invalid credentials');
    }

    public function postRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'usertype' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("clientpage");
    }

    public function dashboard()
    {
        if(Auth::check()){

            $typeuser=Auth::user()->usertype;

                if($typeuser=='0')
                {
                    return view('client.homepage');
                }

                if($typeuser=='1')
                {
                    $data=defectfile::all();

                    return view('newdev.hompage', ['data'=>$data]);
                }

                if($typeuser=='2')
                {
                    $user=Auth::user();
                    $data=defectfile::all();
                    return view('cont.homepage', ['data'=>$data, 'user'=>$user]);
                }  
        }
        return redirect("login")->withSuccess('Opps! You have entered invalid email or password');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'usertype' => $data['usertype'],
        'password' => Hash::make($data['password']),
        'address' => $data['address'],
        'phone' => $data['phone']
      ]);
    }

    public function logout() {
        Session::flush();
        Auth::logout();
  
        return view('index');
    }

    

    function modifypassword(Request $request)
    {
        if (!(Hash::check($request->get('old_password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your old password does not matches with the password you provided. Please try again.");
        }

        if(strcmp($request->get('old_password'), $request->get('password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = $request->validate([
            'old_password' => 'required',
            'password' => 'required',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('password'));
        $user->save();

        return redirect()->back()->with("success","Password changed successfully !");
    }
}
