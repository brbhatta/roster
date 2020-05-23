<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Language;
use Illuminate\Http\Response;

class LanguageController extends Controller
{

    public function index(Language $language)
    {
        return view('admin.language.index', [ 'languages' => $language->latest()->get()]);
    }

    public function create()
    {
        return view('admin.language.add');
    }

    public function store(Request $request, Language $language)
    {
        $language->fill($request->only('name', 'iso_code'));
        $language->save();

        return redirect()->route('languages.index');
    }


    public function show($id)
    {
        //
    }


    public function edit(Language $language)
    {
        return view('admin.language.edit', [ 'language' => $language]);
    }

    public function update(Request $request, Language $language)
    {

        $language->fill($request->only('name', 'iso_code'));
        $language->save();

        return redirect()->route('languages.index');
    }

    public function destroy($id)
    {
        //
    }
}
