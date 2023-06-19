<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //ini adalah methode
    public function index()
    {
        return view('register.index');
    }
    // methode
    public function store(Request $request)
    {
        //validasi form agar tidak kosong dan agar tidak sama dengan yang sudah ada!
        $validatedData = $request->validate([
            'nim' => 'required|min:7|max:12|unique:users',
            'name' => ['required', 'min:3', 'max:255'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // meng hashing password agar password tidak tiketahui
        // // $validatedData['password'] = bcrypt_($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);
        
        User::create($validatedData);

        // Notifikasi
        // $request->session()->flash('success', 'Registration Successfull!! Please Login!!');

        return redirect('/login')->with('success', 'Registration Successfull!! Please Login!!');;
    }
}
