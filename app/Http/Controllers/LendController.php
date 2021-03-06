<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lend;
use App\Models\User;
use App\Models\Book;
use App\Models\Review;

class LendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lends=Lend::with(['book','user'])->paginate();
        return view('lends.index', compact('lends'));
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $books = Book::pluck('title','description','date_publication', 'id');
        $users = User::pluck('name', 'id');
        return view('lends.create', compact('books','users'));
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
            'date_from' => 'required|unique:lends|max:30',
            'date_to' => 'required|unique:lends|max:30',
            
        ]);
        $lend = Lend::create($validated);
        return view('lends.show', compact('lends'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lend=Lend::with(['book','user'])->findOrFail($id);
        return view('lends.show', compact('lend'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $books = Book::pluck('title','description','date_publication' ,'id');
        $users = User::pluck('name','id');
        $lend = Lend::findOrFail($id);
        return view('lends.edit',
            compact('books', 'users', 'lend')
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
            'date_from' => 'required|unique:lends|max:40',
            'date_to' => 'required|unique:lends|max:40',
            'book_id' => 'required',
            'user_id' => 'required',
        ]);

        $lend = Lend::findOrFail($id);
        $lend->fill($validated);
        $lend->save();

        return redirect()->route('lends.show', ['lend' => $lend->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Lend::destroy($id);
        return redirect()->route('lends.index');
    }
}
