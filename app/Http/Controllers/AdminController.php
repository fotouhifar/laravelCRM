<?php

namespace App\Http\Controllers;

use DB;

//use Illuminate\Http\Request;
//use App\Http\Requests;

class AdminController extends Controller {

    public function index() {
        $users = DB::table('users')->get();
        return view('admin/admin', compact('users'));
    }
}
