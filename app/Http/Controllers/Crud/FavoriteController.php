<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function index()
    {
        return response()->json(Favorite::with('ad')->get());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required|exists:users,id',
            'ads_id' => 'required|exists:ads,id',
        ]);

        $fav = Favorite::create($data);
        return response()->json($fav, 201);
    }

    public function show(Favorite $favorite)
    {
        return response()->json($favorite);
    }

    public function destroy(Favorite $favorite)
    {
        $favorite->delete();
        return response()->json(null, 204);
    }
}
