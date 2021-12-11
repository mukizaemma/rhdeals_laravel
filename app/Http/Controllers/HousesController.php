<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Houses;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class HousesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.services.houses');
    }

    public function housesView()
    {
        $data = houses::latest()->paginate(20);
        return view('admin.services.housesView', compact('data'));
    }

    public function houseTable()
    {
        $data = houses::latest()->paginate(10);
        return view('user.houses', compact('data'));
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
        $data = new houses;
        $data->title = $request->title;
        $data->location = $request->location;
        $data->type = $request->type;
        $data->beds = $request->beds;
        $data->baths = $request->baths;
        $data->price = $request->price;
        $data->details = $request->details;
        $data->contact = $request->contact;

        // Save an image

        // if ($request->hasFile('image')) {

        //     $dir = 'public/images/houses/';
        //     $path = $request->file('image')->store($dir);

        //     $fileName = str_replace($dir, '', $path);
        //     $data->image = $fileName;
        // }

        if ($request->hasFile('image')) {
            $dir = 'public/images/houses';
            $path = $request->file('image')->store($dir);
            $fileName = str_replace($dir, '', $path);

            $data->image = $fileName;
        }

        $data->save();
        return redirect()->back()->with('success', 'House has added successfully!');
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
        $data = houses::find($id);
        $data->delete();

        return redirect()->back();
    }
}
