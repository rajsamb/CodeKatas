<?php

require_once '../../../vendor/autoload.php';

$directoryPath = __DIR__ . '/lessons';

$getFileNames = new \CodeKatas\Services\GetFileNames();
$fileNames = $getFileNames->inDirectory($directoryPath);

foreach ($fileNames as $fileName) {
    echo "<a href='/lessons/{$fileName}'>{$fileName}</a><br>";
}
