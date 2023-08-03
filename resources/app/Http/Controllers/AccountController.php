<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Repositories\UserRepositoryInterface;

class AccountController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function login(){
        return view('front.account.login');
    }

    public function checklogin(Request $request)
    {
        // Lấy thông tin đăng nhập từ request
        $email = $request->input('email');
        $password = $request->input('password');
        $remember = $request->input('remember'); // Thêm thông tin remember từ form
    
        // Kiểm tra xác thực
        $credentials = [
            "email" => $email,
            "password" => $password,
        ];
    
        if (Auth::attempt($credentials, $remember)) {
            // Xử lý khi đăng nhập thành công
            return redirect()->intended('/')->with('success', 'Login successful');
        } else {
            // Xử lý khi đăng nhập không thành công
            return redirect()->route('account.login')->with('error', 'Invalid credentials');
        }
    }
    

    public function logout()
    {
        Auth::logout();
        return redirect()->route('front.index');
    }
}
