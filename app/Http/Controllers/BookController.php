<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = book::latest()->paginate(5);
        return view('books.index',compact('books'))->with('i',
                (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'authorid' => 'required',
            'title' => 'required',
            'ISBN' => 'required',
            'pub_year' => 'required',
            'available' => 'required',
        ]);

        book::create($request->all());
        return redirect()->route('books.index')->with('success',
                                                                'Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(book $book)
    {
        return view('books.show',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(book $book)
    {
        return view('books.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, book $book)
    {
        $request->validate([
            'authorid' => 'required',
            'title' => 'required',
            'ISBN' => 'required',
            'pub_year' => 'required',
            'available' => 'required',
        ]);

        $book->update($request->all());
        return redirect()->route('books.index')->with('success',
                                                                'Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success',
                        'Book deleted successfully.');
    }

    public function search() {
        $search_text = $_GET['query'];
        $books = Book::where('title', 'LIKE', '%'.$search_text.'%')->get();

        return view('books.search', compact('books'));
    }
}
