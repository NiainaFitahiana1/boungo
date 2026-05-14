<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function index(Request $request)
    {
        $query = Ad::with('images');

        // Filtrer par recherche (titre, description, ville, adresse)
        if ($request->has('search') && $request->search) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%$search%")
                  ->orWhere('description', 'like', "%$search%")
                  ->orWhere('city', 'like', "%$search%")
                  ->orWhere('address', 'like', "%$search%");
            });
        }

        // Filtrer par type (location ou colocation)
        if ($request->has('type') && $request->type) {
            $query->where('type', $request->type);
        }

        // Filtrer par statut (active, rented, archived)
        if ($request->has('status') && $request->status) {
            $query->where('status', $request->status);
        }

        // Tri par prix
        if ($request->has('sort') && $request->sort === 'price') {
            $order = $request->has('order') && $request->order === 'desc' ? 'desc' : 'asc';
            $query->orderBy('price', $order);
        } else {
            // Tri par défaut: plus récent d'abord
            $query->orderBy('created_at', 'desc');
        }

        $ads = $query->paginate(12);
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
