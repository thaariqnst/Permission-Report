<?php

namespace App\Http\Controllers;

use App\Models\PermitLetter;
use App\Models\Kelas;
use App\Models\User;
use Illuminate\Http\Request;

class SubmitLetterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permitletter = PermitLetter::all();
        $kelas = Kelas::all();
        $user = User::all();
        return view('permit.create', compact('kelas','permitletter','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PermitLetter  $permitLetter
     * @return \Illuminate\Http\Response
     */
    public function show(PermitLetter $permitLetter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PermitLetter  $permitLetter
     * @return \Illuminate\Http\Response
     */
    public function edit(PermitLetter $permitLetter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PermitLetter  $permitLetter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PermitLetter $permitLetter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PermitLetter  $permitLetter
     * @return \Illuminate\Http\Response
     */
    public function destroy(PermitLetter $permitLetter)
    {
        //
    }
}
