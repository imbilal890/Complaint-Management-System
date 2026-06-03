<?php

namespace App\Http\Controllers;

use App\Models\Complaint;

class AdminController extends Controller
{
    public function dashboard()
    {
        $complaints = Complaint::orderBy('id', 'desc')->get();

        return view('admin.dashboard', compact('complaints'));
    }

    public function setProgress($id)
    {
        Complaint::where('id', $id)->update([
            'status' => 'In Progress'
        ]);

        return back();
    }

    public function setResolved($id)
    {
        Complaint::where('id', $id)->update([
            'status' => 'Resolved'
        ]);

        return back();
    }
}