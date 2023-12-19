<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\project;

class ProjectController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Perform the search using your model and return the results
        $results = project::where('name', 'like', '%' . $query . '%')
                       ->orWhere('desc', 'like', '%' . $query . '%')
                       ->orWhere('cost', 'like', '%' . $query . '%')
                       ->orWhere('duration', 'like', '%' . $query . '%')
                       ->orWhere('city', 'like', '%' . $query . '%')
                       ->get();

        return response()->json(['results' => $results]);
    }
}
