<?php

namespace CodeKatas\DesignPatterns\Adapter;

interface BookInterface
{
    public function openBook(): void;
    public function turnPage(): void;
}
