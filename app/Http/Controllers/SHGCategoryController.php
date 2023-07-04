<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\shg_category;

class SHGCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('shg-category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('shg-category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'category_name' => 'required',
            'category_description' => 'required',
        ]);

        // This is how you can insert data into database
        // If successfull, it will echo "SHG Category created successfully."
        if (shg_category::create($data)) {
            return redirect()->route('shg-category.index')->with('success', 'SHG Category created successfully.');
        }else {
            return redirect()->route('shg-category.index')->with('error', 'SHG Category created successfully.');
        }

        return redirect()->route('shg-category.index')->with('success', 'SHG Category created successfully.');
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
