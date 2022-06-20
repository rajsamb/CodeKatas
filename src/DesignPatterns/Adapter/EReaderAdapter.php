<?php
declare(strict_types=1);

namespace CodeKatas\DesignPatterns\Adapter;

class EReaderAdapter implements BookInterface
{
    /** @var EReaderInterface */
    private $eReader;

    public function __construct(EReaderInterface $eReader)
    {
        $this->eReader = $eReader;
    }

    public function openBook(): void
    {
        $this->eReader->switchOn();
    }

    public function turnPage(): void
    {
        $this->eReader->clickNext();
    }
}
