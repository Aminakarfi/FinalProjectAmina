<?php

namespace App\Http\Controllers;

use App\Models\Exercice;
use Illuminate\Http\Request;

class ExerciceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $exercices = Exercice::all();
        return view('exercice', compact('exercices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        $events = Exercice::all();

        $events = $events->map(function ($e) {
            return [
                "start" => $e->start_time,
                "end" => $e->end_time,
                "color" => "#fcc102",
                "passed" => false,
                "title" => "teeeeeeeeeeeeeeest"
            ];
        });

        return response()->json([
            "events" => $events
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);


        $image = $request->image;

        $imageName = hash("sha256", file_get_contents($image)) . "." . $image->getClientOriginalExtension();

        $image->move(storage_path("app/public/images"), $imageName);

        Exercice::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imageName,
            'start_time' => $request->start_time .":00",
            'end_time' => $request->end_time .":00",
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Exercice $exercice)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Exercice $exercice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Exercice $exercice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exercice $exercice)
    {
        //
        $exercice->delete();
        return back();
    }
}
