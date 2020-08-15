<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponserTrait;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * Authors Controller.
 */
class AuthorsController extends Controller
{
    use ApiResponserTrait;

    /**
     * The HTTP service client instance.
     *
     * @var \App\Services\AuthorsServiceClient
     */
    protected $client;

    /**
     * Constructor.
     *
     * @param \App\Services\AuthorsServiceClient $client
     *
     * @return void
     */
    public function __construct(\App\Services\AuthorsServiceClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the list of authors.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->successResponse($this->client->getAuthors());
    }

    /**
     * Shows a given author.
     *
     * @param int $author
     *
     * @return \Illuminate\Http\Response
     */
    public function show(int $author)
    {
        return $this->successResponse($this->client->getAuthor($author));
    }

    /**
     * Creates a new author.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->successResponse(
            $this->client->createAuthor($request->all()),
            Response::HTTP_CREATED
        );
    }

    /**
     * Updates a given author.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $author
     *
     * @return void
     */
    public function update(Request $request, int $author)
    {
        return $this->successResponse(
            $this->client->updateAuthor(
                $author,
                $request->all()
            )
        );
    }

    /**
     * Deletes a given author.
     *
     * @param int $author
     *
     * @return void
     */
    public function destroy(int $author)
    {
        return $this->successResponse($this->client->destroyAuthor($author));
    }
}
