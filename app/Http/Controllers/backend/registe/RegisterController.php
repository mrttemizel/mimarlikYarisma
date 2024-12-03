<?php

namespace App\Http\Controllers\backend\registe;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        $data = Member::all();
        return view('backend.register.index', compact('data'));
    }

}
