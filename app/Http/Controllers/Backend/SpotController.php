<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Center_Point;
use App\Models\Spot;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;



class SpotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('Spot.index', compact('profileData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);

        $centerPoint = Center_Point::get()->first();
        return view('Spot.create', ['centerPoint' => $centerPoint], compact('profileData'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);

        $this->validate($request, [
            'coordinate' => 'required',
            'name' => 'required',
            'description' => 'required',
            'image' => 'file|image|mimes:png,jpg,jpeg'
        ]);

        $spot = new Spot;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $uploadFile = $file->hashName();
            $file->move('upload/spots/', $uploadFile);
            $spot->image = $uploadFile;
        }

        $spot->name = $request->input('name');
        $spot->slug = Str::slug($request->name, '-');
        $spot->description = $request->input('description');
        $spot->coordinates = $request->input('coordinate');
        $spot->save();

        if ($spot) {
            return to_route('spot.index')->with('success', 'Data Success');
        } else {
            return to_route('spot.index')->with('error', 'Data Error');
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
    public function edit(Spot $spot)
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);

        $centerPoint = Center_Point::get()->first();
        return view('Spot.edit', [
            'centerPoint' => $centerPoint,
            'spot' => $spot,
            'profileData' => $profileData

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Spot $spot)
    {
        $this->validate($request, [
            'coordinate' => 'required',
            'name' => 'required',
            'description' => 'required',
            'image' => 'file|image|mimes:png,jpg,jpeg'
        ]);

        if ($request->hasFile('image')) {
            if (File::exists('upload/spots/' . $spot->image)) {
                File::delete('upload/spots/' . $spot->image);
            }

            $file = $request->file('image');
            $uploadFile = $file->hashName();
            $file->move('upload/spots/', $uploadFile);
            $spot->image = $uploadFile;

            // Storage::disk('local')->delete('public/ImageSpots/' . ($spot->image));
            // $file = $request->file('image');
            // $file->storeAs('public/ImageSpots', $file->hashName());
            // $spot->image = $file->hasName();
        }

        $spot->name = $request->input('name');
        $spot->slug = Str::slug($request->name, '-');
        $spot->description = $request->input('description');
        $spot->coordinates = $request->input('coordinate');
        $spot->update();

        if ($spot) {
            return to_route('spot.index')->with('success', 'Data Updated Success');
        } else {
            return to_route('spot.index')->with('error', 'Data Error');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $spot = Spot::findOrFail($id);
        if (File::exists('upload/spots/' . $spot->image)) {
            File::delete('upload/spots/' . $spot->image);
        }

        //Storage::disk('local')->delete('public/ImageSpots/' . ($spot->image));
        $spot->delete();
        return view('Spot.index');
    }
}
