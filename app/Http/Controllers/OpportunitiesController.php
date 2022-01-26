<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Opportunity;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class OpportunitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Opportunity::latest()->paginate(20);
        return view('user.opportunities', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $opportunities = Opportunity::latest()->paginate(20);
        $provinces = Province::all();
        $districts = District::all();
        return view('admin.services.opportunities')->with(compact('opportunities', 'provinces', 'districts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Opportunity();
        $data->province = $request->province;
        $data->district = $request->district;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->details = $request->details;

        // Uploading image
        if ($request->hasFile('image')) {
            $dir = 'public/images/opportunities';
            $path = $request->file('image')->store($dir);
            $fileName = str_replace($dir, '', $path);

            $data->image = $fileName;
        }

        $data->save();

        return redirect()->back()->with('success', 'New opportunity has added successfully');
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

        $data = Opportunity::find($id);
        $provinces = Province::all();
        $districts = District::all();
        return view('admin.services.opportunityEdit')->with(compact('data', 'provinces', 'districts'));
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
        $data = Opportunity::find($id);
        $data->province = $request->input('name');
        $data->district = $request->input('district');
        $data->phone = $request->input('phone');
        $data->email = $request->input('email');
        $data->details = $request->input('details');

        // update image

        if (request()->hasFile('image') && request('image') != '') {

            $dir = 'public/images/opportunities';
            if (File::exists($dir)) {
                unlink($dir);
            }

            $path = $request->file('image')->store($dir);
            $fileName = str_replace($dir, '', $path);
            $data->image = $fileName;
        }

        $data->update();

        return redirect('barResto')->with('success', 'Opportunity has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Opportunity::findOrFail($id);
        $data->delete();

        return redirect()->back()->with('success', 'Item has been deleted');
    }
}
