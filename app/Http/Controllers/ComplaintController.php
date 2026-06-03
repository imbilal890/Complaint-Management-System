<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;

class AdminController extends Controller
{
    public function dashboard()
    {
        $complaints = Complaint::orderBy('id', 'desc')->get();

        return view('admin.dashboard', compact('complaints'));
    }
}