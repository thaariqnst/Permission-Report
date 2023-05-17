<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PermitLetter;


class PermitLetterController extends Controller
{
    public function index()
    {
       $permitletter = PermitLetter::all();
       return view('input');
    }

    public function store(Request $request)
    {
        //$input = $request->all();
        PermitLetter::create([
            'name' => $request->name,
            'class' => $request->class,
            'reason' => $request->reason,
            'pic_name' => $request->pic_name

        ]);
        return back();
    }
}
