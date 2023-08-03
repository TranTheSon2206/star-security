<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all(); // Lấy danh sách tất cả dịch vụ từ model Service

        return view('front.site.service', compact('services')); // Truyền dữ liệu sang giao diện Blade
    }
}
