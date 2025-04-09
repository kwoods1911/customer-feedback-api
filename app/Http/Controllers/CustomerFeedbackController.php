<?php

namespace App\Http\Controllers;

use App\Models\CustomerFeedback;
use Illuminate\Http\Request;

class CustomerFeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = CustomerFeedback::query();

        if($request->has('rating')) $query->where('customer_rating', $request->query('rating'));    

        //retrieve only the 10 most recent entries directly from the database
        $feedback = $query->orderBy('created_at', 'desc')->limit(10)->get();
        return response()->json($feedback);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedFeedback = $request->validate([
            'customer_name' => 'required|string|max:50',
            'customer_message' => 'required|string|max:500',
            'customer_rating' => 'required|int|min:1|max:5'
        ]);

        $feedback = CustomerFeedback::create($validatedFeedback);
        return response()->json($feedback, 201);
    }

 
}
