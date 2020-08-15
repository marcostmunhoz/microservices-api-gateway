<?php

namespace App\Http\Controllers;

use App\Book;
use App\Traits\ApiResponserTrait;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * Books Controller.
 */
class BooksController extends Controller
{
    use ApiResponserTrait;

    /**
     * The HTTP service client instance.
     *
     * @var \App\Services\BooksServiceClient
     */
    protected $client;

    /**
     * Constructor.
     *
     * @param \App\Services\BooksServiceClient $client
     *
     * @return void
     */
    public function __construct(\App\Services\BooksServiceClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the list of books.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->successResponse($this->client->getBooks());
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
        return $this->successResponse($this->client->getBook($book));
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
        return $this->successResponse(
            $this->client->createBook($request->all()),
            Response::HTTP_CREATED
        );
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
        return $this->successResponse(
            $this->client->updateBook(
                $book,
                $request->all()
            )
        );
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
        return $this->successResponse($this->client->destroyBook($book));
    }
}
