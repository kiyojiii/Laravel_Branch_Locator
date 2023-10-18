<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\JobVacancy;
use App\Models\User;
use App\Models\Branches;

class BranchController extends Controller
{
    public function AllBranches() {
        $id = Auth::user()->id;
        $profileData = User::find($id);
    
        return view('backend.branches.all_branches', compact('profileData'));
    }
    
}
