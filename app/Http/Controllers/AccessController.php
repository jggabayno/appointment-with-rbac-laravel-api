<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Requests\AccessRequest;
use App\Models\Access;

class AccessController extends Controller
{



    // public function store(WorkingHourRequest $request)
    // {
    //     $query = $request->user()->workingHours()->create($request->validated());
    //     return response()->json($query, 201);
    // }

    // public function update(WorkingHour $workinghour,WorkingHourRequest $request)
    // {
    //     $query = $request->user()->workingHours()->where('id', $workinghour->id)->update($request->validated());
    //     return response()->json($query, 200);
    // }

    // public function destroy(WorkingHour $workinghour)
    // {
    //     if (auth()->user()->workingHours()->where('id', $workinghour->id)) {
    //         $workinghour->delete();
    //         return response()->json($workinghour->id,200);
    //     }
    // }


    public function index()
    {
        return Access::whereNull('deleted_at')->latest()->get();
    }

    public function store(AccessRequest $request)
    {
        $query = Access::create($request->validated());

        if ($query) return response()->json($query);
    }

    public function update(Access $access, AccessRequest $request)
    {
        $query = $access->update($request->only('name', 'description', 'access'));
        return response()->json($query, 200);
    }

    // public function destroy($id) {
    //    $query =  Access::findOrFail($id)->delete();
    //     if ($query) return response()->json($id);
    // }

    public function destroy(Access $access)
    {
        if ($access) {
            $access->delete();
            return response()->json($access->id,200);
        }
    }

}
