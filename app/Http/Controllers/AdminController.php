<?php

namespace App\Http\Controllers;
use App\Models\song;
use App\Models\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminDashboard(){
        $data = song::all()->toArray();
        $scnddata = User::all()->toArray();
        return view('admin.admindash', compact('data','scnddata'));
    }
    public function music(){
        $data = song::all()->toArray();
        return view('admin.music', compact('data'));
    }
    public function musiccreate(){
        $data = song::all()->toArray();
        return view('admin.musicreate',compact('data'));
    }
}
