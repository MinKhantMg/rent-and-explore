<?php

namespace App\Http\Controllers\Car;

use App\Http\Controllers\Controller;

class ReviewController extends Controller
{
    public function create()
    {
        $review = new Review;
        $review->review_feedback = request()->review_feedback;
        $review->book_id = request()->book_id;
        $review->user_id = auth()->user()->id;
        $review->save();
        return back();
    }

    public function delete($id)
    {
        $review = review::find($id);
        if (Gate::denies('review-delete', $review)) {
            return back()->with('error', 'Unauthorize User');
        }
        $review->delete();
        return back()->with('info', 'Review Deleted');

    }
}
