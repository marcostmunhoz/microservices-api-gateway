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
        parent::__construct(
            config('services.books.base_uri'),
            config('services.books.secret')
        );
    }

    /**
     * Gets the books from the service.
     *
     * @return array
     */
    public function getBooks()
    {
        return $this->request(
            'GET',
            '/books'
        );
    }

    /**
     * Gets an book from the service.
     *
     * @param int $book
     *
     * @return array
     */
    public function getBook(int $book)
    {
        return $this->request(
            'GET',
            '/books/'.$book
        );
    }

    /**
     * Creates a new book.
     *
     * @param array $data
     *
     * @return void
     */
    public function createBook(array $data)
    {
        return $this->request(
            'POST',
            '/books',
            ['json' => $data]
        );
    }

    /**
     * Updates an book.
     *
     * @param int   $book
     * @param array $data
     *
     * @return array
     */
    public function updateBook(int $book, array $data)
    {
        return $this->request(
            'PATCH',
            '/books/'.$book,
            ['json' => $data]
        );
    }

    /**
     * Removes an book from the service.
     *
     * @param int $book
     *
     * @return array
     */
    public function destroyBook(int $book)
    {
        return $this->request(
            'DELETE',
            '/books/'.$book
        );
    }
}
