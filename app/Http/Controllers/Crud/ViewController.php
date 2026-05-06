<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use App\Models\View;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        return response()->json(View::with('ad')->get());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'nullable|exists:users,id',
            'ads_id' => 'required|exists:ads,id',
            'ip_address' => 'nullable|ip',
        ]);

        $v = View::create($data);
        return response()->json($v, 201);
    }

    public function show(View $view)
    {
        return response()->json($view);
    }

    public function destroy(View $view)
    {
        $view->delete();
        return response()->json(null, 204);
    }
}
