<?php

namespace App\Http\Controllers;

use App\Models\Tender;
use Illuminate\Http\Request;

class TendersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = tender::query()->paginate(10);
        return view('user.tenders', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.tenders');
    }

    public function tendersView()
    {
        $tenders = tender::query()->paginate(10);
        return view('admin.services.tendersView', compact('tenders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new tender;

        $data->institution = $request->inst;
        $data->title = $request->title;
        $data->details = $request->details;
        $data->deadline = $request->deadline;
        // upload image
        if ($request->hasFile('image')) {

            $dir = 'public/images/tenders/';
            $path = $request->file('image')->store($dir);

            $fileName = str_replace($dir, '', $path);
            $data->image = $fileName;
        }
        $data->save();

        return redirect()->back()->with('success', 'Tender created successfully');
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
        //
    }
}
