<?php

namespace App\Http\Controllers;

use App\Specialist;
use Illuminate\Http\Request;

class SpecialistController extends Controller
{
    public function index()
    {
        return response()->json(Specialist::all(), 200);
    }

    public function store(Request $request)
    {
        $specialist = Specialist::create($request->all());
        return response()->json($specialist, 201);
    }

    public function show($id)
    {
        $specialist = Specialist::findOrFail($id);
        return response()->json($specialist, 200);
    }

    public function update(Request $request, $id)
    {
        $specialist = Specialist::findOrFail($id);
        $specialist->update($request->all());
        return response()->json($specialist, 200);
    }

    public function destroy($id)
    {
        Specialist::findOrFail($id)->delete();
        return response()->json(['message' => 'Deleted'], 200);
    }
}