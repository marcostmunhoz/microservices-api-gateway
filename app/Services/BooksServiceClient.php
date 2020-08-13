<?php

namespace App\Services;

/**
 * BooksServiceClient Service.
 */
class BooksServiceClient extends AbstractServiceClient
{
    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct(config('services.books.base_uri'));
    }
}
