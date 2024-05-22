<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Suggestion;
use Illuminate\Http\Request;
use Auth;

class SuggestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suggestions = Suggestion::orderBy('id', 'desc')->get();
        return view('suggestions.index', compact('suggestions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('suggestions.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the input data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required',
        ]);

        // Create a new Suggestion instance
        $suggestion = new Suggestion();
        $suggestion->title = $validatedData['title'];
        $suggestion->description = $validatedData['description'];
        $suggestion->category = $validatedData['category'];
        $suggestion->user_id =Auth::user()->id;

        // Save the Suggestion
        $suggestion->save();

        // Redirect the user to the appropriate page
        return redirect()->route('suggestions.index')
            ->with('success', 'Suggestion created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $suggestion = Suggestion::findOrFail($id);
        $feedbacks = Feedback::where('suggestion_id', $suggestion->id)->get();

        return view('suggestions.show', compact('suggestion', 'feedbacks'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Suggestion $suggestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Suggestion $suggestion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Suggestion $suggestion)
    {
        //
    }
}
