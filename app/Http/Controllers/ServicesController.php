<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::latest()->paginate(20);

        return view('admin.services.services', compact('services'));
    }

    public function viewService()
    {
        $services = Service::latest()->paginate(20);

        return view('user.services', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::all();
        return view('admin.services.services', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Service();
        $data->title = $request->input('title');
        $data->details = $request->input('details');
        $data->phone = $request->input('phone');
        $data->email = $request->input('email');
        $data->provider = $request->input('provider');

        // upload image

        if ($request->hasFile('image')) {
            $dir = 'public/images/services';
            $path = $request->file('image')->store($dir);
            $fileName = str_replace($dir, '', $path);

            $data->image = $fileName;
        }

        $data->save();
        return redirect()->back()->with('success', 'Service has added successfully!');
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
        $services = Service::find($id);
        return view('admin.services.serviceEdit', compact('services'));
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
        $data = Service::find($id);
        $data->title = $request->input('title');
        $data->provider = $request->input('provider');
        $data->details = $request->input('details');
        $data->phone = $request->input('phone');
        $data->email = $request->input('email');

        if (request()->hasFile('image')) {
            $dir = 'public/images/services';
            if (File::exists($dir)) {
                unlink($dir);
            }

            $path = $request->file('image')->store($dir);
            $filename = str_replace($dir, '', $path);
            $data->image = $filename;
        }

        $data->update();

        return redirect('services')->with('success', 'Service has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Service::find($id);
        $data->delete($id);

        return redirect()->back()->with('success', 'Service has been deleted');
    }
}
