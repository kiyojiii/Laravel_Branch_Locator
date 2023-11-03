<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Center_Point;

class CenterPointController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function AllCenterPoint() {
        $id = Auth::user()->id;
        $profileData = User::find($id);
    
        $centerPoints = Center_Point::orderBy('created_at', 'desc')->get(); // Fetch jobs in descending order of 'created_at'
        return view('CenterPoint.index', compact('centerPoints', 'profileData'));
    }

    public function index()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);

        // Fetch data from the center__points table
        $centerPoints = Center_Point::all();

        return view('CenterPoint.index', compact('profileData', 'centerPoints'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('CenterPoint.create', compact('profileData'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'coordinate' => 'required'
        ]);
        $centerPoints = Center_Point::all();
        $id = Auth::user()->id;
        $profileData = User::find($id);

        $centerPoint = new Center_Point;
        $centerPoint->coordinates = $request->input('coordinate');
        $centerPoint->save();

        $notification = array(
            'message' => 'Center Point Added Successfully',
            'alert-type' => 'success'
        );

        $enotification = array(
            'message' => 'Center Point Storing Error',
            'alert-type' => 'error'
        );

        if ($centerPoint) {
            return redirect()->route('all.centerpoint')->with($notification);
        } else {
           return redirect()->route('all.centerpoint')->with($enotification);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Center_Point $centrePoint)
    // {
    //     $centrePoint = Center_Point::findOrFail($centrePoint->id);
    //     return view('backend.CenterPoint.cpedit',['centrePoint' => $centrePoint]);
    // }

    public function EditCenterPoint($id){
        $profileData = User::find(Auth::user()->id);
    
        $centerpoint = Center_Point::findorFail($id);
    
        return view('CenterPoint.editcp', compact('centerpoint', 'profileData'));
    } // End Method

    public function UpdateCenterPoint(Request $request){

        $cpid = $request->id;

        Center_Point::findorFail($cpid)->update([
            'coordinates' => $request->coordinates,
        ]);
        $notification = array(
            'message' => 'CenterPoint Updated Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->route('all.centerpoint')->with($notification);
    } // End Method

    public function DeleteCenterPoint(Request $request){

        $cpid = $request->id;

        Center_Point::findOrFail($cpid)->delete();

        $notification = array(
            'message' => 'Center Point Deleted Successfully',
            'alert-type' => 'warning'
        );
    
        return redirect()->back()->with($notification);
    }// End Method
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
