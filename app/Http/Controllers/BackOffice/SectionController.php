<?php

namespace App\Http\Controllers\BackOffice;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $sections = Section::orderBy('position')->get();
        return view('backoffice.sections.index', compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('backoffice.sections.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        Section::create($request->all());
        return redirect('/admin/sections');
    }

    /**
     * Display the specified resource.
     */
    public function show(Section $section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id) {
        $section = Section::findOrFail($id);
        return view('backoffice.sections.edit', compact('section'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $section = Section::findOrFail($id);
        $section->update($request->all());
        return redirect('/admin/sections');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {
        Section::destroy($id);
        return redirect('/admin/sections');
    }



    public function toggle($id) {
        $section = Section::findOrFail($id);
        $section->is_visible = !$section->is_visible;
        $section->save();
        return back();
    }



    public function move($id, Request $request) {
        $section = Section::findOrFail($id);
        $direction = $request->input('direction');

        if ($direction === 'up') $section->position--;
        if ($direction === 'down') $section->position++;
        $section->save();

        return back();
    }


}


