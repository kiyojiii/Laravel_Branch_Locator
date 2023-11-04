<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\JobVacancy;
use App\Models\User;
use App\Models\Branches;
use App\Models\Center_Point;
use App\Models\Spot;

class BranchController extends Controller
{
    // public function AllBranches() {
    //     $id = Auth::user()->id;
    //     $profileData = User::find($id);
    
    //     return view('backend.branches.all_branches', compact('profileData'));
    // }

    public function Markers()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('backend.branches.markers', compact('profileData'));
    }
    
    public function Circles()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('backend.branches.circles', compact('profileData'));
    }
    public function Polygon()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('backend.branches.polygons', compact('profileData'));
    }

    public function Layer(){
        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('backend.branches.layers', compact('profileData'));
    }

    public function LayerGroup(){
        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('backend.branches.layergroup', compact('profileData'));
    }

    public function GetCoordinates(){
        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('backend.branches.getcoordinate', compact('profileData'));
    }
    
    public function spots(){
        $id = Auth::user()->id;
        $profileData = User::find($id);
        $centerPoint = Center_Point::get()->first();
        $spot = Spot::get();

        return view('backend.branches.all_branches', [
            'centerPoint' => $centerPoint,
            'spot' => $spot
        ], compact('profileData'));
    }

    public function detailSpot($slug)
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        $spot = Spot::where('slug',$slug)->first();
        return view('backend.branches.branch_detail',[
            'spot' => $spot
        ], compact('profileData'));
    }
}
