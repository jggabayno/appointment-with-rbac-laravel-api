<?php

namespace App\Http\Controllers;

use App\Models\WorkingHour;
use App\Http\Requests\WorkingHourRequest;

class WorkingHourController extends Controller
{
    public function index()
    {
        return WorkingHour::with('employee')->whereNull('deleted_at')->latest()->get();
    }

    public function store(WorkingHourRequest $request)
    {
        $query = $request->user()->workingHours()->create($request->validated());
        return response()->json($query, 201);
    }

    public function update(WorkingHour $workinghour,WorkingHourRequest $request)
    {
        $query = $request->user()->workingHours()->where('id', $workinghour->id)->update($request->validated());
        return response()->json($query, 200);
    }

    public function destroy(WorkingHour $workinghour)
    {
        if (auth()->user()->workingHours()->where('id', $workinghour->id)) {
            $workinghour->delete();
            return response()->json($workinghour->id,200);
        }
    }
}
