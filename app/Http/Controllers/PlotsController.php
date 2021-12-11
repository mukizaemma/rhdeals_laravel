<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plot;

class PlotsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = plot::all();
        return view('user.plots', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.plots');
    }

    public function plotsView()
    {
        $plots = plot::latest()->paginate(20);
        return view('admin.services.plotsView', compact('plots'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new plot;
        $data->pnum = $request->pnum;
        $data->location = $request->location;
        $data->size = $request->size;
        $data->price = $request->price;
        $data->details = $request->details;
        $data->contact = $request->contact;

        // upload image
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/plots/', $filename);
            $data->image = $filename;
        }
        return redirect()->back()->with('success', 'Plot has successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = plot::find($id);
        $data->delete();

        return redirect()->back();
    }
}
