<?php

namespace App\Http\Controllers;

use App\Models\shg_application_bills;
use Illuminate\Http\Request;

class SHG_application_bills_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shg_application_bills = shg_application_bills::with('shg_application_bills')->get();
        // return view('shg_application_bills.index');
        return view('shg_application_bills.index',
        [
            'shg_application_bills' => $shg_application_bills
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
    public function show(shg_application_bills $shg_application_bills)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(shg_application_bills $shg_application_bills)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, shg_application_bills $shg_application_bills)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(shg_application_bills $shg_application_bills)
    {
        //
    }
}
