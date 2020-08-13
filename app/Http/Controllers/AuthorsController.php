<?php

namespace App\Http\Controllers;

use App\Book;
use App\Traits\ApiResponserTrait;
use Illuminate\Http\Request;

/**
 * Authors Controller.
 */
class AuthorsController extends Controller
{
    use ApiResponserTrait;

    /**
     * Returns the list of books.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Shows a given book.
     *
     * @param int $book
     *
     * @return \Illuminate\Http\Response
     */
    public function show(int $book)
    {
    }

    /**
     * Creates a new book.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Updates a given book.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $book
     *
     * @return void
     */
    public function update(Request $request, int $book)
    {
    }

    /**
     * Deletes a given book.
     *
     * @param int $book
     *
     * @return void
     */
    public function destroy(int $book)
    {
    }
}
