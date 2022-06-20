<?php

namespace CodeKatas\DesignPatterns\Adapter;

interface EReaderInterface
{
    public function switchOn(): void;
    public function clickNext(): void;
}
