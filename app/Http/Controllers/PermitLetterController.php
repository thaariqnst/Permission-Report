<?php

namespace App\Http\Controllers;

use App\Models\PermitLetter;
use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\User;

class PermitLetterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     //? menjalankan middleware via controller
    //  public function __construct()
    //  {
    //      $this->middleware('auth');
    //  }
     
    public function index()
    {
        $permitletter = PermitLetter::all();

        

        
        return view('permit.index', compact('permitletter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permitletter = PermitLetter::all();
        $kelas = Kelas::all();
        $user = User::all();
        return view('permit.create', compact('kelas','permitletter','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        PermitLetter::create($input);
        return back();
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
        $permitletter = PermitLetter::all();
        return view('permit.incoming', compact('permitletter'));
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

    public function accept($id)
    {
        $permitletter = PermitLetter::findOrFail($id);
        
        $permitletter->fill(['status' => 'accepted']);
        $permitletter->save();

        return redirect()->back()->with('success', 'Letter accepted successfully.');
    }

    public function reject($id)
    {
        $permitletter = PermitLetter::findOrFail($id);
        
        $permitletter->fill(['status' => 'rejected']);
        $permitletter->save();

        return redirect()->back()->with('success', 'Letter Rejected.');
    }
}
