<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\JobVacancy;
use App\Models\User;
use App\Models\Spot;
use App\Models\Center_Point;

class JobVacancyController extends Controller
{
    public function AllJobs() {
        $id = Auth::user()->id;
        $profileData = User::find($id);
    
        $jobs = JobVacancy::orderBy('created_at', 'desc')->get(); // Fetch jobs in descending order of 'created_at'
        return view('backend.job.all_jobs', compact('jobs', 'profileData'));
    }
    
    public function AddJob(){
        $centerPoint = Center_Point::get()->first();
        $spot = Spot::get();
        $branch = Spot::orderBy('created_at', 'desc')->get(); 

        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('backend.job.add_job', [
            'centerPoint' => $centerPoint,
            'spot' => $spot,
            'branch' => $branch
        ], compact('profileData'));
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
        $centerPoint = Center_Point::get()->first();
        $spot = Spot::get();
        $branch = Spot::orderBy('created_at', 'desc')->get(); 

        $profileData = User::find(Auth::user()->id);
        $jobs = JobVacancy::findorFail($id);
    
        return view('backend.job.edit_job',[
            'centerPoint' => $centerPoint,
            'spot' => $spot,
            'branch' => $branch
        ], compact('jobs', 'profileData'));
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
        $jobs2 = JobVacancy::orderBy('created_at', 'desc')->get(); // Fetch jobs in descending order of 'created_at'
       
        $jobs2 = $jobs2->where('status', 'Open')->sortByDesc('created_at');
  
        return view('backend.userjob.job-vacancies', compact('jobs','jobs2'));
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

    public function ApplyJob(){
        if (auth()->check()) {
            $id = Auth::user()->id;
            $profileData = User::find($id);
    
            return view('backend.userjob.apply-job', compact('profileData'));
    }
    }
}
// return view('backend.job.all_jobs', compact('jobs', 'profileData'));