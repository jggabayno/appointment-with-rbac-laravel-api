<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class EmployeeController extends Controller
{
    public function index() {
        return User::where('access_id', 2)->whereNull('deleted_at')->latest()->get();
    }
}
