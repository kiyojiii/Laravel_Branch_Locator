<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\JobVacancy;
use App\Models\User;

class JobVacancyController extends Controller
{
    public function AllJobs(){
        $id = Auth::user()->id;
        $profileData = User::find($id);


        $jobs = JobVacancy::latest()->get();
        return view('backend.job.all_jobs',compact('jobs','profileData'));

    } // End Method

    public function AddJob(){
        $id = Auth::user()->id;
        $profileData = User::find($id);

        
        return view('backend.job.add_job',compact('profileData'));
    } // End Method

    public function StoreJob(Request $request) {
        // Validation
        $request->validate([
            'slots' => 'required',
            'position' => 'required',
            'department' => 'required',
            'branchloc' => 'required',
            'status' => 'required',
        ]);
    
        JobVacancy::create([
            'slots' => $request->slots,
            'position' => $request->position,
            'branchloc' => $request->branchloc,
            'department' => $request->department,
            'status' => $request->status,
        ]);
    
        $notification = array(
            'message' => 'Job Listing Added Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->route('all.jobs')->with($notification);
    }
    
}
