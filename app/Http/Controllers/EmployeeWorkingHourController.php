<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeWorkingHourController extends Controller
{
    public function index()
    {
        return auth()->user()->with('workingHours')->get();
    }
}
