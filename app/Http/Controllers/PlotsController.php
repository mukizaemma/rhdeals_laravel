<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plot;
use Illuminate\Support\Facades\File;

class PlotsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = plot::latest()->paginate(20);
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
        $plots = plot::all();
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
        if ($request->hasFile('image')) {
            $dir = 'public/images/plots';
            $path = $request->file('image')->store($dir);
            $fileName = str_replace($dir, '', $path);

            $data->image = $fileName;
        }
        $data->save();
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
        $plot = Plot::find($id);
        return view('admin.services.plotEdit', compact('plot'));
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
        $data = Plot::find($id);
        $data->pnum = $request->input('pnum');
        $data->location = $request->input('location');
        $data->price = $request->input('price');
        $data->details = $request->input('details');
        $data->contact = $request->input('contact');

        if (request()->hasFile('image') && request('image') != '') {
            $dir = 'public/images/plots';
            if (File::exists($dir)) {
                unlink($dir);
            }

            $path = $request->file('image')->store($dir);
            $filename = str_replace($dir, '', $path);
            $data->image = $filename;
        }

        $data->update();

        return redirect('plotsView')->with('success', 'Plot has been updated');
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

        return redirect()->back()->with('success', 'Plot has deleted successfyll');
    }
}
