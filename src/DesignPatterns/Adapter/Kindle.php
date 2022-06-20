<?php
declare(strict_types=1);

namespace CodeKatas\DesignPatterns\Adapter;

class Kindle implements EReaderInterface
{
    public function switchOn(): void
    {
        var_dump('switch on Kindle');
    }

    public function clickNext(): void
    {
        var_dump('Click on Next Arrow');
    }
}
