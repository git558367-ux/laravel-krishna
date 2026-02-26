<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function show()
    {
        return view('profile');
    }

    public function edit()
    {
        return view('profile.edit');
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->birthday = $request->birthday;
        $user->gender = $request->gender;
        $user->address = $request->address;

        // Image Upload
        // Image Upload
        if ($request->hasFile('image')) {

            if ($user->image && File::exists(public_path('upload/user/' . $user->image))) {
                File::delete(public_path('upload/user/' . $user->image));
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload/user'), $imageName);

            $user->image = $imageName;
        }

        $user->save();
        return redirect()->route('user.profile')
            ->with('success', 'Profile updated successfully!');
    }
}
