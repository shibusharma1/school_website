<?php

namespace App\Http\Controllers;

use App\Models\SchoolInfo;
use Illuminate\Http\Request;

class SchoolInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin/school details/details');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SchoolInfo $schoolInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SchoolInfo $schoolInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SchoolInfo $schoolInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SchoolInfo $schoolInfo)
    {
        //
    }
}
