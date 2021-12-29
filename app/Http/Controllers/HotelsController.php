<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HotelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Hotel::latest()->paginate(20);
        return view('user.hotels', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hotels = Hotel::latest()->paginate(20);
        return view('admin.services.hotels', compact('hotels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Hotel();
        $data->hotel = $request->hotel;
        $data->location = $request->location;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->details = $request->details;

        // Uploading image
        if ($request->hasFile('image')) {
            $dir = 'public/images/hotels';
            $path = $request->file('image')->store($dir);
            $fileName = str_replace($dir, '', $path);

            $data->image = $fileName;
        }

        $data->save();

        return redirect()->back()->with('success', 'Hotel has added successfully');
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
        $hotel = Hotel::find($id);
        return view('admin.services.hotelEdit', compact('hotel'));
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
        $data = Hotel::find($id);
        $data->hotel = $request->input('hotel');
        $data->location = $request->input('location');
        $data->phone = $request->input('phone');
        $data->email = $request->input('email');
        $data->details = $request->input('details');

        // update image
        if (request()->hasFile('image') && request('image') != '') {

            $dir = 'public/images/hotels';
            if (File::exists($dir)) {
                unlink($dir);
            }

            $path = $request->file('image')->store($dir);
            $fileName = str_replace($dir, '', $path);
            $data->image = $fileName;
        }

        $data->update();

        return redirect('hotels')->with('success', 'Hotel has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Hotel::find($id);
        $data->delete();

        return redirect()->back();
    }
}
