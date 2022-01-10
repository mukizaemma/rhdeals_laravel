<?php

namespace App\Http\Controllers;

use App\Models\Funds;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FundsController extends Controller
{
    public function index()
    {
        $data = Funds::latest()->paginate(10);
        return view('user.funds', compact('data'));
        // ->with('i', (request()->input('page', 1) -1) * 5);
    }

    public function fundsView()
    {
        $data = Funds::latest()->paginate(20);
        return view('admin.services.fundsView', compact('data'));
        // ->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.funds');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Funds();
        $data->institution = $request->institution;
        $data->title = $request->title;
        $data->details = $request->details;
        $data->deadline = $request->deadline;
        $data->contact = $request->contact;


        // Uploading image
        if ($request->hasFile('image')) {
            $dir = 'public/images/funds';
            $path = $request->file('image')->store($dir);
            $fileName = str_replace($dir, '', $path);

            $data->image = $fileName;
        }

        $data->save();
        return redirect()->back()->with('success', 'Fund has successfully added');
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
        $fund = Funds::find($id);
        return view('admin.services.fundEdit', compact('fund'));
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
        $data = Funds::find($id);
        $data->institution = $request->input('institution');
        $data->title = $request->input('title');
        $data->details = $request->input('details');
        $data->deadline = $request->input('deadline');
        $data->contact = $request->input('contact');

        if (request()->hasFile('image') && request('image') != '') {
            $dir = 'public/images/funds';
            if (File::exists($dir)) {
                unlink($dir);
            }
            $path = $request->file('image')->store($dir);
            $fileName = str_replace($dir, '', $path);

            $data->image = $fileName;
        }

        $data->update();

        return redirect('fundsView')->with('success', 'FUnd has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Funds::find($id);
        $data->delete();

        return redirect()->back()->with('success', 'Fund has been deleted');
    }
}
