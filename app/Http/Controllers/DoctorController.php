<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        return response()->json(Doctor::with('specialist')->get(), 200);
    }

    public function store(Request $request)
    {
        $doctor = Doctor::create($request->all());
        return response()->json($doctor, 201);
    }

    public function show($id)
    {
        $doctor = Doctor::with('specialist')->findOrFail($id);
        return response()->json($doctor, 200);
    }

    public function update(Request $request, $id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->update($request->all());
        return response()->json($doctor, 200);
    }

    public function destroy($id)
    {
        Doctor::findOrFail($id)->delete();
        return response()->json(['message' => 'Deleted'], 200);
    }
}