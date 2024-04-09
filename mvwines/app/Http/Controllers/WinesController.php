<?php

namespace App\Http\Controllers;

use App\Models\Wines;
use App\Http\Requests\StoreWinesRequest;
use App\Http\Requests\UpdateWinesRequest;

class WinesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreWinesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Wines $wines)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wines $wines)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWinesRequest $request, Wines $wines)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wines $wines)
    {
        //
    }
}
