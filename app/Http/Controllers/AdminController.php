<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;

class AdminController extends Controller
{
    // 🟢 DASHBOARD (SHOW ALL COMPLAINTS)
    public function dashboard()
    {
        $complaints = Complaint::orderBy('id', 'desc')->get();

        return view('admin.dashboard', compact('complaints'));
    }

    // 🟡 SET STATUS: PENDING
    public function setPending($id)
    {
        $complaint = Complaint::find($id);

        if ($complaint) {
            $complaint->update([
                'status' => 'Pending'
            ]);
        }

        return back();
    }

    // 🔵 SET STATUS: IN PROGRESS
    public function setProgress($id)
    {
        $complaint = Complaint::find($id);

        if ($complaint) {
            $complaint->update([
                'status' => 'In Progress'
            ]);
        }

        return back();
    }

    // 🟢 SET STATUS: RESOLVED
    public function setResolved($id)
    {
        $complaint = Complaint::find($id);

        if ($complaint) {
            $complaint->update([
                'status' => 'Resolved'
            ]);
        }

        return back();
    }
}