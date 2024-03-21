<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PredictController extends Controller
{
    public function predictResult(Request $request) {
        dd($request);
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $data_customer['name'] = $request->name;
        $data_customer['dob'] = $request->dob;
        $data_customer['phone'] = $request->phone;
        $data_customer['sex'] = $request->sex;
        $data_customer['leg'] = $request->leg;
        $data_customer['height'] = $request->height;
        $data_customer['weight'] = $request->weight;


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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
