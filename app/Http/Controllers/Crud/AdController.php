<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function index()
    {
        $ads = Ad::with('images')->paginate(12);
        return response()->json($ads);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'type' => 'required|in:location,colocation',
            'city' => 'nullable|string|max:120',
            'address' => 'nullable|string|max:255',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'status' => 'nullable|in:active,rented,archived',
            'user_id' => 'required|exists:users,id',
        ]);

        $ad = Ad::create($data);

        return response()->json($ad->load('images'), 201);
    }

    public function show(Ad $ad)
    {
        return response()->json($ad->load('images'));
    }

    public function update(Request $request, Ad $ad)
    {
        $data = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'sometimes|required|numeric|min:0',
            'type' => 'sometimes|required|in:location,colocation',
            'city' => 'nullable|string|max:120',
            'address' => 'nullable|string|max:255',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'status' => 'nullable|in:active,rented,archived',
        ]);

        $ad->update($data);

        return response()->json($ad->refresh()->load('images'));
    }

    public function destroy(Ad $ad)
    {
        $ad->delete();

        return response()->json(null, 204);
    }
}
