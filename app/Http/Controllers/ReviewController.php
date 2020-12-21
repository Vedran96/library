<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews=Review::with(['book','user'])->paginate();
        return view('reviews.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_comment' => 'required|unique:reviews|max:50',
            'user_rating' => 'required|unique:reviews|max:2',
        ]);
        $review = Review::create($validated);
        return view('reviews.show', compact('review'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reviews=Review::with(['book','user'])->findOrFail($id);
        return view('reviews.show', compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $review = Review::findOrFail($id);
        $books = Book::pluck('title','description','date_publication' ,'id');
        $users = User::pluck('name','address','phone_number','username','id');
        return view('reviews.edit',
            compact('review', 'books', 'users')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'user_comment' => 'required|unique:reviews|max:50',
            'user_rating' => 'required|unique:reviews|max:2',
            'book_id' => 'required',
            'user_id' => 'required'
        ]);

        $review = Review::findOrFail($id);
        $review->fill($validated);
        $review->save();

        return view('reviews.show', compact('review'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Review::destroy($id);
        return redirect()->route('reviews.index');
    }
}
