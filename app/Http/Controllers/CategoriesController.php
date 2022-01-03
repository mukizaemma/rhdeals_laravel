<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Support\Facades\File;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categories::all();
        return view('admin.services.categories', compact('categories'));
    }

    public function showCat()
    {
        $categories = Categories::all();
        return view('user.layouts.categories', compact('categories'));
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
        $data = new Categories;
        $data->title = $request->title;
        $data->link = $request->link;
        $data->desc = $request->desc;

        // Save an image

        if ($request->hasFile('image')) {

            $dir = 'public/images/categories/';
            $path = $request->file('image')->store($dir);

            $fileName = str_replace($dir, '', $path);
            $data->image = $fileName;
        }

        $data->save();
        return redirect()->back()->with('success', 'Category has added successfully!');
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
        $cat = Categories::find($id);
        return view('admin.services.cateEdit', compact('cat'));
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
        $data = Categories::find($id);
        $data->title = $request->input('title');
        $data->link = $request->input('link');
        $data->desc = $request->input('desc');

        // update image

        if (request()->hasFile('image') && request('image') != '') {
            $dir = 'public/images/categories';

            if (File::exists($dir)) {
                unlink($dir);
            }

            $path =  $request->file('image')->store($dir);
            $fileName = str_replace($dir, '', $path);
            $data->image = $fileName;
        }

        $data->update();

        return redirect('Categories')->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Categories::find($id);
        $data->delete($id);

        return redirect('Categories')->with('success', 'Category has been deleted');
    }
}
