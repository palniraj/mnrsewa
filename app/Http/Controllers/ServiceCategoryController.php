<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use Illuminate\Support\Facades\Storage;

class ServiceCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.servicecategory.index')->with([
            'servicecategorys' => ServiceCategory::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.servicecategory.create')->with([
            'servicecategories' => ServiceCategory::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'parent_id' => 'required',
            'order' => 'required',
            'description' => 'sometimes',
            'is_featured' => 'sometimes',
        ]);
        ServiceCategory::create($request->all());
        return redirect(route('servicecategory.index'))->with('success', 'ServiceCategory Added Successfully');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceCategory  $serviceCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceCategory $serviceCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceCategory  $serviceCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceCategory $servicecategory)
    {

        return view('admin.servicecategory.edit')->with([
            'servicecategories' => ServiceCategory::all(),
            'servicecategory' => $servicecategory,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceCategory  $serviceCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceCategory $servicecategory)
    {
        $request->validate([
            'name' => 'required',
            'parent_id' => 'required',
            'order' => 'required',
            'description' => 'sometimes',
            'is_featured' => 'sometimes',
        ]);
        $servicecategory->update($request->all());
        return redirect(route('servicecategory.index'))->with('success', 'ServiceCategory Added Successfully');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceCategory  $serviceCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceCategory $servicecategory)
    {
        $servicecategory->delete();
        // Storage::delete($serviceCategory->image);
        return redirect(route('servicecategory.index'))->with('success', 'ServiceCategory Deleted Successfully');
    
    }
}
