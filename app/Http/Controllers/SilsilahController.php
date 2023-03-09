<?php

namespace App\Http\Controllers;

use App\Models\Silsilah;
use Illuminate\Http\Request;

class SilsilahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'error' => false,
            'error_message' => '',
            'data' => Silsilah::paginate(10)
        ]);
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
        $validate = $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'ayah_id' => 'required',
        ]);

        $silsilah = Silsilah::create($validate);
        if ($silsilah) {
            return response()->json([
                'error' => false,
                'error_message' => '',
                'data' => $silsilah
            ], 200);
        }

        return response()->json([
            'error' => false,
            'error_message' => 'Failed to create',
        ], 500);
    }

    /**
     * Display the specified resource.
     */
    public function show(Silsilah $silsilah)
    {
        return response()->json([
            'error' => false,
            'error_message' => '',
            'data' => $silsilah
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Silsilah $silsilah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Silsilah $silsilah)
    {
        $validate = $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'ayah_id' => 'required',
        ]);

        if ($silsilah->update($validate)) {
            return response()->json([
                'error' => false,
                'error_message' => '',
                'data' => $silsilah
            ], 200);
        }

        return response()->json([
            'error' => false,
            'error_message' => 'Failed to update'
        ], 500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Silsilah $silsilah)
    {
        if ($silsilah->delete()) {
            return response()->json([
                'error' => false,
                'error_message' => ''
            ]);
        }

        return response()->json([
            'error' => false,
            'error_message' => 'Failed to update'
        ], 500);
    }
}
