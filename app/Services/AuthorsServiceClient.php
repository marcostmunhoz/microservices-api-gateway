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
}
