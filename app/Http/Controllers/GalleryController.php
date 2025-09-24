<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'publisher_id' =>'required|exists:publishers,id',
            'name' => 'required|string|max:255',
            'link' => 'required|string|max:255',
        ]);
        $gallery =Gallery::create($validated);

        return response()->json([
            'message' => 'Gallery Created Successfully',
            'gallery' =>$gallery
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $gallery = Gallery::with(['publisher','pictures'])->findOrFail($id);
        return $gallery;
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
