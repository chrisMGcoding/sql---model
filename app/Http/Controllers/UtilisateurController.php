<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UsersController extends Controller
{
    public function index() {
        $data = UsersController::all();
        return view('users', compact('data'));
    }
}
