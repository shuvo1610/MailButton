<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TeacherController extends Controller
{
    public function create()
    {
        return view('teacher.registration');
    }

    public function store(Request $request)
    {
        $data=Teacher::create($request->all());
        $data=User::create($request->all());
        $details = [
            'title'=>'Verified Your Mail '
        ];
        Mail::to('16103358@gmail.com')->send(new \App\Mail\Teacher($details));
        return back();
    }
}
