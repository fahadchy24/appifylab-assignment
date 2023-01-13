<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        return 'Hello World';
    }

    public function getUserId(Request $request)
    {
        $user = $request->id;

        if ($user % 2 == 0) {
            return response()->json([
                'msg' => 'It is a even number'
            ]);
        } else {
            return response()->json([
                'msg' => 'It is a odd number'
            ]);
        }
    }

    public function getUserEmail(Request $request)
    {
        $userEmail = $request->email;

        if ($userEmail) {
            return 'true';
        } else {
            return 'false';
        }
    }
}
