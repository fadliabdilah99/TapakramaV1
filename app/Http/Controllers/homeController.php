<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class homeController extends Controller
{   // fungsi index admin
    public function index()
    {
        return view('admin.index');
    }




    public function home()
    {
        $data['totalanggota'] = User::where('role', 'user')->count();
        return view('user.index')->with($data);
    }
}
