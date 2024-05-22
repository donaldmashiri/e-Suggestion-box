<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Suggestion;
use Illuminate\Http\Request;
use Auth;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suggestions = Suggestion::orderBy('id', 'desc')->get();
        return view('feedbacks.index', compact('suggestions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $feed  = Feedback::create([
            'suggestion_id' => $request->suggestion_id,
            'notes' => $request->notes,
            'user_id' => Auth::user()->id
        ]);

        $suggestion = Suggestion::findOrFail($request->input('suggestion_id'));
        $suggestion->status = $request->input('status');
        $suggestion->save();

        return back()
            ->with('success', 'Suggestion created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $suggestion = Suggestion::findOrFail($id);
        $feedbacks = Feedback::where('suggestion_id', $suggestion->id)->get();

        return view('feedbacks.show', compact('suggestion', 'feedbacks'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feedback $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Feedback $feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $feedback = Feedback::findOrFail($id);
        $suggestion_id = $feedback->suggestion_id;
        $feedback->delete();

        return redirect()->route('feedbacks.show', $suggestion_id)->with('success', 'Feedback deleted successfully.');
    }
}
