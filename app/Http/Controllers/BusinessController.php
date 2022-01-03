<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $business = Business::latest()->paginate(20);
        return view('user.business', compact('business'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $business = Business::latest()->paginate(10);
        return view('admin.services.business', compact('business'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Business();
        $data->title = $request->input('title');
        $data->details = $request->input('details');
        $data->location = $request->input('location');
        $data->phone = $request->input('phone');
        $data->email = $request->input('email');

        // uploda image

        if ($request->hasFile('image')) {
            $dir = 'public/images/business';
            $path = $request->file('image')->store($dir);
            $fileName = str_replace($dir, '', $path);
            $data->image = $fileName;
        }

        $data->save();

        return redirect()->back()->with('success', 'Business has been saved');
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
        $business = Business::find($id);
        return view('admin.services.businessEdit', compact('business'));
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
        $data = Business::find($id);
        $data->title = $request->input('title');
        $data->details = $request->input('details');
        $data->location = $request->input('location');
        $data->phone = $request->input('phone');
        $data->email = $request->input('email');

        // update image

        if (request()->hasFile('image') && request('image') != '') {
            $dir = 'public/images/business';

            if (File::exists($dir)) {
                unlink($dir);
            }

            $path =  $request->file('image')->store($dir);
            $fileName = str_replace($dir, '', $path);
            $data->image = $fileName;
        }

        $data->update();

        return redirect('business')->with('success', 'Business updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Business::find($id);
        $data->delete($id);

        return redirect()->back()->with('success', 'Business has been deleted');
    }
}
