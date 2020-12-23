<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lend;
use App\Models\User;
use App\Models\Book;
class LendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lends=Lend::paginate();
        return view('lends.index', compact('lends'));
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lends.create');
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
        $lends=Lend::with(['book','user'])->findOrFail($id);
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
        $users = User::pluck('name','address','phone_number','username','id');
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
            'book_id' => 'required',
            'user_id' => 'required',
            'user_comment' => 'required|unique:lends|max:10',
            'user_rating' => 'required|unique:lends|max:10'
            
        ]);

        $lend = Lend::findOrFail($id);
        $lend->fill($validated);
        $lend->save();

        return view('lends.show', compact('lend'));
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
