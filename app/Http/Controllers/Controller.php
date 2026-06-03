<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;

class ComplaintController extends Controller
{
    // show form
    public function create()
    {
        return view('complaint');
    }

    // save complaint
    public function store(Request $request)
    {
        // validation (important)
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'address' => 'required',
            'description' => 'required',
        ]);

        // generate CMP ID
        $code = "CMP" . rand(1000, 9999);

        // save to database
        Complaint::create([
            'complaint_code' => $code,
            'name' => $request->name,
            'category' => $request->category,
            'address' => $request->address,
            'description' => $request->description,
            'status' => 'Pending'
        ]);

        // return success message
        return back()->with('success', "Complaint Submitted! Your ID: " . $code);
    }
}