<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class PeopleController extends Controller
{
    public function createOne(Request $request): \Illuminate\Http\JsonResponse
    {
        $person = People::create($request->all());

        return response()->json($person);
    }

    public function getOne(int $id): \Illuminate\Http\JsonResponse
    {
        $person = People::find($id);

        if (!$person) {
            return response()->json([
                'message' => 'Person not found'
            ], 404);
        }

        return response()->json($person);
    }

    public function updateOne(Request $request, $id): \Illuminate\Http\JsonResponse
    {
        $person = People::find($id);

        if (!$person) {
            return response()->json([
                'message' => 'Person not found'
            ], 404);
        }

        $person->update($request->all());

        return response()->json($person);
    }

    public function deleteOne($id): \Illuminate\Http\JsonResponse
    {
        $person = People::find($id);

        if (!$person) {
            return response()->json([
                'message' => 'Person not found'
            ], 404);
        }
    
        $person->delete();
    
        return response()->json([
            'message' => 'Person deleted successfully'
        ]);
    }

    public function getAll(): \Illuminate\Http\JsonResponse
    {
        return response()->json(People::get());
    }

}