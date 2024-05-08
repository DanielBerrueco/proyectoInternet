<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Archivo;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'profile_photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = Auth::user();

        if($request->hasFile('profile_photo')){
            $imagePath = $request->file('profile_photo')->store('profile_photos', 'public');

            $user->update(['profile_photo_path' => $imagePath]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
}
