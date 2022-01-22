<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::latest()->paginate(10);
        return view('admin.services.companies', compact('company'));
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
        $data = new Company();
        $data->name = $request->name;
        $data->activities = $request->activities;
        $data->contact = $request->contact;
        $data->email = $request->email;

        // Save an image

        if ($request->hasFile('image')) {

            $dir = 'public/images/companies/';
            $path = $request->file('image')->store($dir);

            $fileName = str_replace($dir, '', $path);
            $data->image = $fileName;
        }

        $data->save();
        return redirect()->back()->with('success', 'Company has been added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $company = Company::latest()->paginate(20);
        return view('user.companies', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::find($id);
        return view('admin.services.companyEdit', compact('company'));
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
        $data = Company::find($id);
        $data->name = $request->input('name');
        $data->contact = $request->input('contact');
        $data->email = $request->input('email');
        $data->activities = $request->input('activities');

        // update image

        if (request()->hasFile('image') && request('image') != '') {
            $dir = 'public/images/companies';

            if (File::exists($dir)) {
                unlink($dir);
            }

            $path = $request->file('image')->store($dir);
            $fileName = str_replace($dir, '', $path);
            $data->image = $fileName;
        }
        $data->update();

        return redirect('companies')->with('success', 'Company has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Company::find($id);
        $data->delete($id);
        return redirect()->back()->with('success', 'Company has been deleted');
    }
}
