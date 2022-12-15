<?php

namespace App\Http\Controllers;

use App\Models\Others;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class OthersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $others = Others::get();
        return view('user.others', compact('others'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $others = Others::paginate(10);
        return view('admin.services.others', compact('others'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Others();
        $data->title = $request->input('title');
        $data->details = $request->input('details');
        $data->price = $request->input('price');
        $data->phone = $request->input('phone');
        $data->email = $request->input('email');

        // uploda image

        if ($request->hasFile('image')) {
            $dir = 'public/images/others';
            $path = $request->file('image')->store($dir);
            $fileName = str_replace($dir, '', $path);
            $data->image = $fileName;
        }

        $data->save();

        return redirect()->back()->with('success', 'New deal has been saved');
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
        $others = Others::find($id);
        return view('admin.services.othersEdit', compact('others'));
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
        $data = Others::find($id);
        $data->title = $request->input('title');
        $data->details = $request->input('details');
        $data->phone = $request->input('phone');
        $data->email = $request->input('email');

        // update image

        if (request()->hasFile('image') && request('image') != '') {
            $dir = 'public/images/others/';

            if (File::exists($dir)) {
                unlink($dir);
            }

            $path =  $request->file('image')->store($dir);
            $fileName = str_replace($dir, '', $path);
            $data->image = $fileName;
        }

        $data->update();

        return redirect('business')->with('success', 'Service has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Others::find($id);
        $data->delete($id);

        return redirect()->back()->with('success', 'Service has been deleted');
    }
}
