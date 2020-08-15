<?php

namespace App\Services;

/**
 * AuthorsServiceClient Service.
 */
class AuthorsServiceClient extends AbstractServiceClient
{
    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct(config('services.authors.base_uri'));
    }

    /**
     * Gets the authors from the service.
     *
     * @return array
     */
    public function getAuthors()
    {
        return $this->request(
            'GET',
            '/authors'
        );
    }

    /**
     * Gets an author from the service.
     *
     * @param int $author
     *
     * @return array
     */
    public function getAuthor(int $author)
    {
        return $this->request(
            'GET',
            '/authors/'.$author
        );
    }

    /**
     * Creates a new author.
     *
     * @param array $data
     *
     * @return void
     */
    public function createAuthor(array $data)
    {
        return $this->request(
            'POST',
            '/authors',
            ['json' => $data]
        );
    }

    /**
     * Updates an author.
     *
     * @param int   $author
     * @param array $data
     *
     * @return array
     */
    public function updateAuthor(int $author, array $data)
    {
        return $this->request(
            'PATCH',
            '/authors/'.$author,
            ['json' => $data]
        );
    }

    /**
     * Removes an author from the service.
     *
     * @param int $author
     *
     * @return array
     */
    public function destroyAuthor(int $author)
    {
        return $this->request(
            'DELETE',
            '/authors/'.$author
        );
    }
}
