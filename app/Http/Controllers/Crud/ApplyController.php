<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use App\Models\Apply;
use Illuminate\Http\Request;

class ApplyController extends Controller
{
    public function index()
    {
        return response()->json(Apply::with('user')->get());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required|exists:users,id',
            'ads_id' => 'required|exists:ads,id',
            'message' => 'nullable|string',
            'status' => 'nullable|in:pending,accepted,rejected',
        ]);

        $a = Apply::create($data);
        return response()->json($a, 201);
    }

    public function show(Apply $apply)
    {
        return response()->json($apply);
    }

    public function update(Request $request, Apply $apply)
    {
        $data = $request->validate([
            'status' => 'required|in:pending,accepted,rejected',
        ]);

        $apply->update($data);
        return response()->json($apply);
    }

    public function destroy(Apply $apply)
    {
        $apply->delete();
        return response()->json(null, 204);
    }
}
