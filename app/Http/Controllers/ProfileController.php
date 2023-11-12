<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use App\Models\User;

class ProfileController extends Controller
{
    public function UserDashboard(){
           
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('user.user_index',compact('profileData'));
    } // End Method

    public function UserProfile(){
        
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('user.user_profile_view',compact('profileData'));

    }// End Method

    public function UserUpdate(Request $request){
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
    
        if($request->file('photo')){
            $file = $request->file('photo');
            @unlink(public_path('upload/user_images/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName(); 
            $file->move(public_path('upload/user_images'),$filename);
            $data['photo'] = $filename;
        }
    
        $data->save();
    
        $notification = array(
            'message' => 'User Profile Updated Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->back()->with($notification);
    }
    

    public function UserChangePassword(){
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('user.user_change_password',compact('profileData'));


    }// End Method

    public function UserUpdatePassword(request $request){
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
    }// End Method

    public function UserLogin()
    {
        return view('user.login');
    } // End Method










    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function UserLogout(Request $request)
    {
        Auth::guard('web')->logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    } // End Method
}
