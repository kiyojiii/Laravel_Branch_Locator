<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobVacancy; 

class DisplayJobVacancyController extends Controller
{
    public function AllJobs()
    {
        $jobVacancies = JobVacancy::all(); // Retrieve job vacancies from the database
    
        return view('job.userjob.job-vacancies', compact('jobVacancies'));
    }
    
}
