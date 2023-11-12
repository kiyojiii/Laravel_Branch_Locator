<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobVacancy; 
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DisplayJobVacancyController extends Controller
{
    public function AllJobs()
    {
        $jobVacancies = JobVacancy::all(); // Retrieve job vacancies from the database
    
        return view('job.userjob.job-vacancies', compact('jobVacancies'));
    }
    public function UserAllJobs() {
        $id = Auth::user()->id;
        $profileData = User::find($id);
    
        $jobs = JobVacancy::orderBy('created_at', 'desc')->get(); // Fetch jobs in descending order of 'created_at'
        return view('job.userjob.user_all_jobs', compact('jobs', 'profileData'));
    }

    public function ApplyJob(){
        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('userjob.apply.job', compact('profileData'));
    }
}
