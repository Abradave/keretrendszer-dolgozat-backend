<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePublicTransportRequest;
use App\Models\PublicTransport;
use Illuminate\Http\Request;

class TransportControl extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return PublicTransport::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePublicTransportRequest $request)
    {
        $transport = new PublicTransport();
        $transport -> fill($request->all());
        $transport -> save();
        return response()->json($transport, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
