<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\shg_members;
use App\Models\shg_applications;
use App\Models\shg_application_bills;
use App\Models\shg_docs;

class SHGControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shg_members = shg_members::all();
        $shg_applications = shg_applications::all();
        $shg_application_bills = shg_application_bills::all();
        $shg_docs = shg_docs::all();
        // return view('shg.index');
        return view('shg.index',
        [
            'shg_members' => $shg_members,
            'shg_applications' => $shg_applications,
            'shg_application_bills' => $shg_application_bills,
            'shg_docs' => $shg_docs
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
