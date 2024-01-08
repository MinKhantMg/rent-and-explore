<?php

namespace App\Http\Controllers\Car;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Support\Facades\Gate;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $validator = validator(request()->all(), [
            "review_feedback" => "required",
            "car_id" => "required",
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator);
        }

        $review = new Review;
        $review->review_feedback = request()->review_feedback;
        $review->car_id = request()->car_id;
        $review->user_id = auth()->user()->id;
        $review->save();

        return back();
    }

    public function delete($id)
    {
        $review = review::find($id);

        if(Gate::allows('delete-review', $review)) {
            $review->delete();
            return back();
        }
        return back()->with('info', 'Unauthorized');

    }
}
