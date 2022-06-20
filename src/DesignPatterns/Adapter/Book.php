<?php
declare(strict_types=1);

namespace CodeKatas\DesignPatterns\Adapter;

class Book implements BookInterface
{
    public function openBook(): void
    {
        var_dump('open book');
    }

    public function turnPage(): void
    {
        var_dump('turn page');
    }
}