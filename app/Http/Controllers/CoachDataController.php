<?php

namespace App\Http\Controllers;

use App\Models\CoachData;
use Illuminate\Http\Request;

class CoachDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        request()->validate([
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
        ]);

        CoachData::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(CoachData $coachData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CoachData $coachData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CoachData $coachData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CoachData $coachData)
    {
        //
    }
}
