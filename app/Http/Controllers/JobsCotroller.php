<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use BaconQrCode\Renderer\RendererStyle\Fill;
use Illuminate\Support\Facades\File;

class JobsCotroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::latest()->paginate(20);
        return view('admin.services.jobs', compact('jobs'));
    }

    public function josVIew()
    {
        $data = Job::latest()->paginate(20);
        return view('user.jobs', compact('data'));
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
        $data = new Job;
        $data->institution = $request->institution;
        $data->title = $request->title;
        $data->deadline = $request->deadline;
        $data->details = $request->details;

        // Uploading image
        if ($request->hasFile('image')) {
            $dir = 'public/images/jobs';
            $path = $request->file('image')->store($dir);
            $fileName = str_replace($dir, '', $path);

            $data->image = $fileName;
        }

        $data->save();

        return redirect()->back()->with('success', 'Job has added successfully');
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
        $job = Job::find($id);
        return view('admin.services.jobEdit', compact('job'));
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
        $data = Job::find($id);
        $data->institution = $request->input('institution');
        $data->title = $request->input('title');
        $data->deadline = $request->input('deadline');
        $data->details = $request->input('details');

        // update image

        if (request()->hasFile('image') && request('image') != '') {
            $dir = 'public/images/jobs';

            if (File::exists($dir)) {
                unlink($dir);
            }

            $path = $request->file('image')->store($dir);
            $fileName = str_replace($dir, '', $path);
            $data->image = $fileName;

            $data->update();

            return redirect('jobs')->with('success', 'Job has been updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Job::find($id);
        $data->delete();

        return redirect()->back()->with('success', 'JOb has been deleted ');
    }
}
