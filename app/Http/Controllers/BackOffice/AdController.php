<?php

namespace App\Http\Controllers\BackOffice;

use App\Models\Ad;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $ads = Ad::all();
        return view('backoffice.ads.index', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('backoffice.ads.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        Ad::create($request->all());
        return redirect('/admin/ads');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ad $ad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id) {
        $ad = Ad::findOrFail($id);
        return view('backoffice.ads.edit', compact('ad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) {
        $ad = Ad::findOrFail($id);
        $ad->update($request->all());
        return redirect('/admin/ads');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {
        Ad::destroy($id);
        return redirect('/admin/ads');
    }



    public function toggle($id) {
        $ad = Ad::findOrFail($id);
        $ad->is_active = !$ad->is_active;
        $ad->save();
        return back();
    }



}
