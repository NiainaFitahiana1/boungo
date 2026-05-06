<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use App\Models\AdImage;
use Illuminate\Http\Request;

class AdImageController extends Controller
{
    public function index()
    {
        return response()->json(AdImage::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'ads_id' => 'required|exists:ads,id',
            'url' => 'required|url',
        ]);

        $image = AdImage::create($data);
        return response()->json($image, 201);
    }

    public function show(AdImage $adImage)
    {
        return response()->json($adImage);
    }

    public function update(Request $request, AdImage $adImage)
    {
        $data = $request->validate([
            'url' => 'sometimes|required|url',
        ]);

        $adImage->update($data);
        return response()->json($adImage);
    }

    public function destroy(AdImage $adImage)
    {
        $adImage->delete();
        return response()->json(null, 204);
    }
}
