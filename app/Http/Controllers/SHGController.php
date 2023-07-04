<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\shg_members;
// use App\Models\shg_applications;
// use App\Models\shg_application_bills;
// use App\Models\shg_docs;
use App\Models\shg;

class SHGController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shg = shg::with('shg')->get();
        // return view('shg.index');
        return view('shg.index',
        [
            'shg' => $shg
        ]);
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
