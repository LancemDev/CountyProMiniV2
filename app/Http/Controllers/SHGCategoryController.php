<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShgCategory;

class SHGCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ShgCategory = ShgCategory::latest()->paginate(5);

        return view('shg_category.index', compact('ShgCategory'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('shg_category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'category_name' => 'required',
        //     'description' => 'required',
        // ]);

        // This is how you can insert data into database
        // If successfull, it will echo "SHG Category created successfully."
        ShgCategory::create($request->all());

        return redirect()->route('shg_category.index')->with('success', 'SHG Category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ShgCategory $shg_category)
    {
        return view('shg_category.show', compact('shg_category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ShgCategory $shg_category)
    {
        return view('shg_category.edit', compact('shg_category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ShgCategory $shg_category)
    {
        $request->validate([
            'category_name' => 'required',
            'description' => 'required',
        ]);
        
        $shg_category->update($request->all());

        return redirect()->route('shg_category.index')->with('success', 'SHG Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ShgCategory $shg_category)
    {
        $shg_category->delete();

        return redirect()->route('shg_category.index')->with('success', 'SHG Category deleted successfully.');
    }
}
