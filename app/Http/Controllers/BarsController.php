<?php

namespace App\Http\Controllers;

use App\Models\BarsResto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class BarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = BarsResto::latest()->paginate(20);
        return view('user.barsResto', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bars = BarsResto::latest()->paginate(20);
        return view('admin.services.BarsResto', compact('bars'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new BarsResto();
        $data->name = $request->name;
        $data->location = $request->location;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->details = $request->details;

        // Uploading image
        if ($request->hasFile('image')) {
            $dir = 'public/images/barsResto';
            $path = $request->file('image')->store($dir);
            $fileName = str_replace($dir, '', $path);

            $data->image = $fileName;
        }

        $data->save();

        return redirect()->back()->with('success', 'Bar or Restaurant has added successfully');
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
        $bar = BarsResto::find($id);
        return view('admin.services.barEdit', compact('bar'));
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
        $data = BarsResto::find($id);
        $data->name = $request->input('name');
        $data->location = $request->input('location');
        $data->phone = $request->input('phone');
        $data->email = $request->input('email');
        $data->details = $request->input('details');

        // update image

        if (request()->hasFile('image') && request('image') != '') {

            $dir = 'public/images/barsResto';
            if (File::exists($dir)) {
                unlink($dir);
            }

            $path = $request->file('image')->store($dir);
            $fileName = str_replace($dir, '', $path);
            $data->image = $fileName;
        }

        $data->update();

        return redirect('barResto')->with('success', 'Restaurant has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = BarsResto::find($id);
        $data->delete();

        return redirect()->back();
    }
}
