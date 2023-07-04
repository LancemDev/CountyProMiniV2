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
        $shg_category = shg_category::latest()->paginate(5);

        return view('shg_category.index', compact('shg_category'))->with('i', (request()->input('page', 1) - 1) * 5);
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
        $request->validate([
            'category_name' => 'required',
            'description' => 'required',
        ]);

        // This is how you can insert data into database
        // If successfull, it will echo "SHG Category created successfully."
        if (shg_category::create($request->all())) {
            return redirect()->route('shg-category.index')->with('success', 'SHG Category created successfully.');
        }else {
            return redirect()->route('shg-category.index')->with('error', 'SHG Category created successfully.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(shg_category $shg_category)
    {
        return view('shg_category.show', compact('shg_category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(shg_category $shg_category)
    {
        return view('shg_category.edit', compact('shg_category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, shg_category $shg_category)
    {
        $request->validate([
            'category_name' => 'required',
            'category_description' => 'required',
        ]);
        
        $shg_category->update($request->all());

        return redirect()->route('shg-category.index')->with('success', 'SHG Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(shg_category $shg_category)
    {
        $shg_category->delete();

        return redirect()->route('shg-category.index')->with('success', 'SHG Category deleted successfully.');
    }
}
