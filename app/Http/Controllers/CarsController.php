<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Support\Facades\File;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Car::latest()->paginate(10);
        return view('user.cars', compact('data'));
    }

    public function CarsView()
    {
        $cars = Car::all();
        return view('admin.services.cars', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('admin.services.cars');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new car;

        $data->title = $request->title;
        $data->price = $request->price;
        $data->type = $request->type;
        $data->details = $request->details;
        $data->contact = $request->contact;

        // upload image
        if ($request->hasFile('image')) {
            $dir = 'public/images/cars';
            $path = $request->file('image')->store($dir);
            $fileName = str_replace($dir, '', $path);

            $data->image = $fileName;
        }

        $data->save();

        return redirect()->back()->with('success', 'A New Car has been added successfuly');
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
        $car = Car::find($id);
        return view('admin.services.carEdit', compact('car'));
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
        $data = Car::find($id);
        $data->title = $request->input('title');
        $data->price = $request->input('price');
        $data->details = $request->input('details');
        $data->type = $request->input('type');
        $data->contact = $request->input('contact');

        // upload image
        if (request()->hasFile('image') && request('image') != '') {
            $dir = 'public/images/cars';
            if (File::exists($dir)) {
                unlink($dir);
            }
            $path = $request->file('image')->store($dir);
            $fileName = str_replace($dir, '', $path);

            $data->image = $fileName;
        }

        $data->save();

        return redirect('cars')->with('success', 'A car has been updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Car::find($id);
        $data->delete($id);

        return redirect()->back()->with('success', 'Cars has been deleted');
    }
}
