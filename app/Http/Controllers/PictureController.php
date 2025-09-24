<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use App\Models\Gallery;
use Illuminate\Http\Request;

class PictureController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);

        $validated = $request->validate([
            'url' => 'required|url'
        ]);

        $picture = $gallery->pictures()->create($validated);

        return response()->json([
            'message' => 'Picture added successfully',
            'picture' => $picture,
            'gallery' => $gallery->load('pictures')
        ], 201);
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
     $picture = Picture::findOrFail($id);
     $picture->delete();

     return response()->json([
        'message'=> 'Picture delete successfully'
     ], 200);
    }
}
