<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auctions;

class AuctionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Auctions::latest()->paginate(10);
        return view('user.auctions', compact('data'));
        // ->with('i', (request()->input('page', 1) -1) * 5);
    }

    public function auctionsView()
    {
        $data = auctions::latest()->paginate(20);
        return view('admin.services.auctionsView', compact('data'));
        // ->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.auctions');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new auctions;
        $data->institution = $request->institution;
        $data->title = $request->title;
        $data->details = $request->details;
        $data->date = $request->date;
        $data->contact = $request->contact;


        $data->save();
        return redirect()->back()->with('success', 'Auction has successfully added');
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
        $data = Auctions::find($id);
        $data->delete();

        return redirect()->back();
    }
}
