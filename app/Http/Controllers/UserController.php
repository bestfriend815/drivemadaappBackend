<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $currentUser = User::where('id', 1)->first();
        
        // return response()->json([
        //     'email' => 'test@test.com',
        //     'password'  => '123456',
        //     'phoneNumber' => '33333333',
        //     ], 200);
        return response()->json([
            'email' => $currentUser->email,
            'password'  => $currentUser->password,
            'phoneNumber' => $currentUser->phoneNumber,
            ], 200);

    }

    public function show($email, $password, $phoneNumber)
    {
        $currentUser = User::where('id', 1)->first();
        $currentUser->email = $email;
        $currentUser->password = $password;
        $currentUser->phoneNumber = $phoneNumber;
        $currentUser->save();
        return response()->json([
            'email' => $email,
            'password'  => $password,
            'phoneNumber' => $phoneNumber,
            ], 200);
    }
    public function editAccount(Request $request)
    {
        return response()->json([
            'email' => $currentUser->email,
            'password'  => $currentUser->password,
            'phoneNumber' => $currentUser->phoneNumber,
            ], 200);
        // $currentUser = User::where('id', 1)->first();
        // $currentUser->email = $request->email;
        // $currentUser->password = $request->password;
        // $currentUser->phoneNumber = $request->phoneNumber;
        // $currentUser->save();
    }
}
