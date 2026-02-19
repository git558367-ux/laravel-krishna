<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin.index');
    }

    public function dashboard()
    {
        return view('admin.index');
    }

    public function profile()
    {
        return view('admin.profile'); // update form page
    }
    public function edit(){
        $user =Auth::user();
        return view('admin.profile-edit');
    }


    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => ['required', 'string', 'max:255'],

            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($user->id),
            ],

            'employee_id' => [
                'required',
                'string',
                'max:50',
                Rule::unique('users')->ignore($user->id),
            ],

            'join_date' => ['required', 'date'],
            'phone' => ['required', 'string', 'max:20'],
            'birthday' => ['required', 'date'],
            'gender' => ['required', 'in:male,female,other'],
            'address' => ['required', 'string', 'max:500'],

            'password' => ['nullable', 'confirmed', 'min:8'],
        ]);

        // Update user data
        $user->update([
            'name'        => $request->name,
            'email'       => $request->email,
            'employee_id' => $request->employee_id,
            'join_date'   => $request->join_date,
            'phone'       => $request->phone,
            'birthday'    => $request->birthday,
            'gender'      => $request->gender,
            'address'     => $request->address,
        ]);

        // Update password if entered
        if ($request->filled('password')) {
            $user->update([
                'password' => Hash::make($request->password),
            ]);
        }

        return redirect()->route('admin.profile');
    }

    public function AddProduct()
    {
        return view('admin.add-product');
    }

    public function ProductList()
    {
        return view('admin.product-list');
    }
}

