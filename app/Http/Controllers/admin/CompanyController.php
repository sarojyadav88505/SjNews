<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::first();
        // return $company;
        return View('backend.company.index',compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $company = Company::first();
        if(!empty($company)){
            return redirect()->route('webcompany.index');
        }
        return View('backend.company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $company = new Company();
        $company->name = $request->name;
        $company->address = $request->address;
        $company->contact = $request->contact;
        $company->email = $request->email;
        $company->regno = $request->regno;

        // if($request->hasFile('logo')){
        //     $file = $request->logo;
        //     $newName = time(). "." .$file->getClientOriginalExtension();
        //     $file->move('images',$newName);
        //     $company->logo = "images/$newName";
        // }
        uploadImage($request,$company,'logo'); //this is a helper function which is in the helper folder
        $company->save();
        return redirect()->route('webcompany.index');
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
        $company = Company::find($id);
        return view('Backend.company.edit',compact('company'));
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
        $company = Company::find($id);
        $company->name = $request->name;
        $company->address = $request->address;
        $company->contact = $request->contact;
        $company->email = $request->email;
        $company->regno = $request->regno;

        uploadImage($request,$company,'logo'); //this is a helper function which is in the helper folder
        $company->update();
        return redirect()->route('webcompany.index');
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
