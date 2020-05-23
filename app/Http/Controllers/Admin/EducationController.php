<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{

    public function index(Education $education)
    {
        return view('admin.education.index', [ 'education' => $education->latest()->paginate(25)]);
    }

    public function create()
    {
        return view('admin.education.add');
    }

    public function store(Request $request, Education $education)
    {
        $education->fill($request->only(['name', 'category', 'sub_category']));
        $education->save();

        return redirect()->route('education.index');
    }


    public function show($id)
    {
        //
    }


    public function edit(Education $education)
    {
        return view('admin.education.edit', [ 'education' => $education]);
    }

    public function update(Request $request, Education $education)
    {

        $education->fill($request->only(['name', 'category', 'sub_category']));
        $education->save();

        return redirect()->route('education.index');
    }

    public function destroy($id)
    {
        //
    }
}
