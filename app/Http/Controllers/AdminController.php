<?php

namespace App\Http\Controllers;
use App\Models\song;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminDashboard(){
        return view('admin.admindash');
    }
    public function music(){
        $data = song::all()->toArray();
        return view('admin.music', compact('data'));
    }
    public function musiccreate(){
        return view('admin.musicreate');
    }
}
