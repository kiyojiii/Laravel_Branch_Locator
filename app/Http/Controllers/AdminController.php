<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\JobVacancy;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;


class AdminController extends Controller
{
    public function AdminDashboard(Request $request)
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
    
        // Check if the login was successful
        if (Auth::check()) {
            $firstName = $request->user()->firstname;
            $lastName = $request->user()->lastname;
            Alert::success('Login Successful', 'Welcome Back Admin, ' . $firstName . ' ' . $lastName);
        }

        // Chart
        $jobs = JobVacancy::selectRaw('MONTH(created_at) as month, COUNT(*) as count, status')
        ->whereYear('created_at', date('Y'))
        ->groupBy('month', 'status')
        ->orderBy('month')
        ->get();

    $labels = [];
    $openJobsData = [];
    $closedJobsData = [];

    $jobcolors = ['#00FF00', '#FF0000']; 

    for ($i = 1; $i <= 12; $i++) {
        $month = date('F', mktime(0, 0, 0, $i, 1));
        $openCount = 0;
        $closedCount = 0;

        foreach ($jobs as $job) {
            if ($job->month == $i) {
                if ($job->status == 'Open') {
                    $openCount = $job->count;
                } elseif ($job->status == 'Closed') {
                    $closedCount = $job->count;
                }
            }
        }

        array_push($labels, $month);
        array_push($openJobsData, $openCount);
        array_push($closedJobsData, $closedCount);
    }

    $datasets = [
        [
            'label' => 'Open Jobs',
            'data' => $openJobsData,
            'backgroundColor' => $jobcolors[0],
        ],
        [
            'label' => 'Closed Jobs',
            'data' => $closedJobsData,
            'backgroundColor' => $jobcolors[1],
        ],
    ];

        // Chart
        $users = User::selectRaw('role, COUNT(*) as count')
        ->groupBy('role')
        ->get();

        $userlabels = $users->pluck('role')->toArray();
        $userdata = $users->pluck('count')->toArray();

        $usercolors = ['#36A2EB', '#FF6384']; // You can customize these colors

        return view('admin.index', compact('profileData','datasets','labels', 'userlabels', 'userdata', 'usercolors'));
    }    

    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    } // End Method

    public function AdminLogin()
    {

        return view('admin.admin_login');
    } // End Method

    public function AdminProfile()
    {

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_profile_view', compact('profileData'));
    } // End Method

    public function AdminUpdate(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);

        // Validate the request data
        $request->validate([
            'username' => 'required|string|unique:users,username,' . $id,
            'email' => 'required|email|unique:users,email,' . $id,
            'phone' => 'required|string|unique:users,phone,' . $id,
            // Add other validation rules for other fields
        ]);

        $data->username = $request->username;
        $data->firstname = $request->firstname;
        $data->lastname = $request->lastname;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->address = $request->address;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/user_images/' . $data->photo));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/user_images'), $filename);
            $data['photo'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Admin Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } // End Method

    public function AdminChangePassword()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_change_password', compact('profileData'));
    } // End Method

    public function AdminUpdatePassword(request $request)
    {
        // Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => [
                'required',
                'string',
                'min:8',
                'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#$%^&*])/',
                'confirmed',
            ],
        ]);

        /// Match The Old Password

        if (!Hash::check($request->old_password, auth::user()->password)) {

            $notification = array(
                'message' => 'Old Password Does Not Match',
                'alert-type' => 'error'
            );

            return back()->with($notification);
        }
        /// Update The New Password

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        $notification = array(
            'message' => 'Password Changed Successfully',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    } // End Method
}
