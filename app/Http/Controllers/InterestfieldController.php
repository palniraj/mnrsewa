<?php

namespace App\Http\Controllers;

use App\Models\Interestfield;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InterestfieldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicecategory = ServiceCategory::all();
        // dd($servicecategory);
        $interestfield = Interestfield::where('user_id', Auth::id())->first();
        return view('vendor.interestfield')->with([
            'interestfield' => $interestfield,
            'servicecategory' => $servicecategory,
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['servicecategory_id'] = $request->input('servicecategory_id');
        // dd($input);
        return redirect(route('interestfield.index'))->with('success', 'Interestfield Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Interestfield  $interestfield
     * @return \Illuminate\Http\Response
     */
    public function show(Interestfield $interestfield)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Interestfield  $interestfield
     * @return \Illuminate\Http\Response
     */
    public function edit(Interestfield $interestfield)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Interestfield  $interestfield
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Interestfield $interestfield)
    {
        $input = $request->all();
        $input['service_id'] = $request->input('service_id');
        $interestfield->update($input);
        return redirect(route('interestfield.index'))->with('success', 'Interestfield Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Interestfield  $interestfield
     * @return \Illuminate\Http\Response
     */
    public function destroy(Interestfield $interestfield)
    {
        //
    }
}
