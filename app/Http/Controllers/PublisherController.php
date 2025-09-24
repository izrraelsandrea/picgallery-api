<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{

    public function index()
    {
        return Publisher::with('galleries.pictures')->get();
    }
    public function galleries($id)
    {
        $publisher = Publisher::with('galleries.pictures')->findOrFail($id);
        return $publisher;
    }


}
