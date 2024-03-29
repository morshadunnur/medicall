<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected function index() {
        $user = auth()->user();
//        $test = User::where('status',6)->first();
        return view('admin.index',compact('user'));
    }
    protected function doctorList() {
        $user = auth()->user();
        $users = User::where('status',4)->paginate();
        return view('admin.doctor-list',compact('user'),compact('users'));
    }
    protected function patientList() {
        $user = auth()->user();
        $users = User::where('status', 1)->paginate(10);
        return view('admin.patient-list',compact('user'), compact('users'));
    }

    protected function verify() {
        $user = auth()->user();
        return view('admin.doctor-verify',compact('user'));
    }
    protected function category() {
        $user = auth()->user();
        return view('admin.category',compact('user'));
    }
    protected function locations() {
        $user = auth()->user();
        return view('admin.location-list',compact('user'));
    }
    protected function hospitals() {
        $user = auth()->user();
        return view('admin.hospital-list',compact('user'));
    }


}
