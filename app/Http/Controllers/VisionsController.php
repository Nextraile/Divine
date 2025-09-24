<?php

namespace App\Http\Controllers;

use App\Models\Visions;
use Illuminate\Http\Request;

class VisionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.visions');
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
    }

    /**
     * Display the specified resource.
     */
    public function show(Visions $visions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Visions $visions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Visions $visions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Visions $visions)
    {
        //
    }
}
