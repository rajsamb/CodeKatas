<?php

namespace CodeKatas\Services;

class GetFileNames
{
    public function inDirectory(string $dirPath): array
    {
        $dir = new \DirectoryIterator($dirPath);

        $fileNames = [];
        foreach ($dir as $fileInfo) {
            if ($fileInfo->isDot()) {
                continue;
            }

            $fileNames[] = $fileInfo->getFilename();
        }

        asort($fileNames);

        return $fileNames;
    }
}
