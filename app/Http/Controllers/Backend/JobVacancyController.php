<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\JobVacancy;
use App\Models\User;

class JobVacancyController extends Controller
{
    public function AllJobs() {
        $id = Auth::user()->id;
        $profileData = User::find($id);
    
        $jobs = JobVacancy::orderBy('created_at', 'desc')->get(); // Fetch jobs in descending order of 'created_at'
        return view('backend.job.all_jobs', compact('jobs', 'profileData'));
    }
    
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
        ]);
    
        JobVacancy::create([
            'slots' => $request->slots,
            'position' => $request->position,
            'branchloc' => $request->branchloc,
            'department' => $request->department,
            'status' => $request->status, // Will be "Open" or "Closed"
        ]);
    
        $notification = array(
            'message' => 'Job Listing Added Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->route('all.jobs')->with($notification);
    }
    
    
    // public function EditJob($id){
    //     $id = Auth::user()->id;
    //     $profileData = User::find($id);

    //     $jobs = JobVacancy::findorFail($id);
    //     return view('backend.job.edit_job',compact('jobs', 'profileData'));
        
    // } // End Method

    public function EditJob($id){
        $profileData = User::find(Auth::user()->id);
    
        $jobs = JobVacancy::findorFail($id);
    
        return view('backend.job.edit_job', compact('jobs', 'profileData'));
    } // End Method
    

    public function UpdateJob(Request $request){

        $jid = $request->id;

        JobVacancy::findorFail($jid)->update([
            'slots' => $request->slots,
            'position' => $request->position,
            'branchloc' => $request->branchloc,
            'department' => $request->department,
            'status' => $request->status,
        ]);
        $notification = array(
            'message' => 'Job Updated Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->route('all.jobs')->with($notification);
    } // End Method

    public function DeleteJob(Request $request){

        $jid = $request->id;

        JobVacancy::findOrFail($jid)->delete();

        $notification = array(
            'message' => 'Job Deleted Successfully',
            'alert-type' => 'warning'
        );
    
        return redirect()->back()->with($notification);
    }// End Method
    
    public function updateJobStatus(Request $request, $id)
{
    $job = JobVacancy::find($id);

    if (!$job) {
        return response()->json(['error' => 'Job not found'], 404);
    }

    // Update the status
    $job->status = $request->status;
    $job->save();

    return response()->json(['success' => true]);
}

    // USER DISPLAY
    public function DisplayAllJobs()
    {
        $jobs = JobVacancy::orderBy('created_at', 'desc')->get(); // Fetch jobs in descending order of 'created_at'
        
        return view('backend.userjob.job-vacancies', compact('jobs'));
    }

    public function UserHome(){
        return view('backend.userjob.whitesands');
    }
    public function UserAllJobs() {
        $id = Auth::user()->id;
        $profileData = User::find($id);
    
        $jobs = JobVacancy::orderBy('created_at', 'desc')->get(); // Fetch jobs in descending order of 'created_at'
        return view('backend.userjob.user_all_jobs', compact('jobs', 'profileData'));
    }
}
// return view('backend.job.all_jobs', compact('jobs', 'profileData'));