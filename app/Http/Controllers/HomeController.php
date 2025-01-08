<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;

class HomeController extends Controller
{
    // Phương thức hiển thị trang home sau khi đăng nhập
    public function index()
    {
        return view('home'); // Trang home
    }
}