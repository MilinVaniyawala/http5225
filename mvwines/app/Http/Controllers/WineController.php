<?php

namespace App\Http\Controllers;

use App\Models\Wine;
use App\Models\Winetype;
use App\Models\Vineyard;
use App\Http\Requests\StoreWineRequest;
use App\Http\Requests\UpdateWineRequest;

use Illuminate\Support\Facades\Session;

class WineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $wines = Wine::with('vineyard', 'winetype')->get();
        return view('wines.index', ['wines' => $wines]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $winetypes = Winetype::all();
        $vineyards = Vineyard::all();
        return view('wines.create', compact('winetypes', 'vineyards'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWineRequest $request)
    {
        //
        Wine::create($request->validated());

        Session::flash('Succeess', "Wine data added successfully");
        return redirect()->route('wines.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Wine $wine)
    {
        //
        $winetypes = Winetype::all();
        $vineyards = Vineyard::all();
        return view('wines.show', compact('wine', 'winetypes', 'vineyards'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wine $wine)
    {
        //
        $winetypes = Winetype::all();
        $vineyards = Vineyard::all();
        return view('wines.edit', compact('wine', 'winetypes', 'vineyards'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWineRequest $request, Wine $wine)
    {
        //
        $wine->update($request->validated());
    }

    public function trash($id)
    {
        Wine::Destroy($id);
        Session::Flash('Success', 'Wine trashed Successfully!!');
        return redirect()->route('wines.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $wine = Wine::withTrashed()->where('id', $id)->first();
        $wine->forceDelete();
        Session::Flash('Success', 'Wine deleted Successfully');
        return redirect()->route('wines.index');
    }

    public function restore($id)
    {
        $wine = Wine::withTrashed()->where('id', $id)->first();
        $wine->restore();
        Session::Flash('Success', 'Wine restored Successfully');
        return redirect()->route('wines.trashed');
    }
}
