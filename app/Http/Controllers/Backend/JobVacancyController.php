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
}
