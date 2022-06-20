<?php
declare(strict_types=1);

namespace CodeKatas\DesignPatterns\Adapter;

class Person
{
    /** @var BookInterface */
    private $book;

    public function __construct(BookInterface $book)
    {
        $this->book = $book;
    }

    public function read(): void
    {
        $this->book->openBook();
        $this->book->turnPage();
    }
}