<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Suggestion;
use App\Models\User;
use Illuminate\Http\Request;
use function Laravel\Prompts\suggest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $usersCount = User::count();
        $feedbackCount = Feedback::count();
        $suggestionCount = Suggestion::count();
        $suggestionPending = Suggestion::where('status', 'pending')->count();
        $suggestionReviewed = Suggestion::where('status', 'reviewed')->count();
        $suggestionImplemented = Suggestion::where('status', 'implemented')->count();

        return view('home', [
            'usersCount' => $usersCount,
            'suggestionCount' => $suggestionCount,
            'suggestionPending' => $suggestionPending,
            'suggestionReviewed' => $suggestionReviewed,
            'suggestionImplemented' => $suggestionImplemented,
            'feedbackCount' => $feedbackCount,
        ]);
    }
}
