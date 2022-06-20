<?php

require_once '../../../vendor/autoload.php';

use CodeKatas\DesignPatterns\Adapter\EReaderAdapter;
use CodeKatas\DesignPatterns\Adapter\Kindle;
use CodeKatas\DesignPatterns\Adapter\Person;
use CodeKatas\DesignPatterns\Adapter\Book;

$person = new Person(new Book);
$person->read();


$person = new Person(new EReaderAdapter(new Kindle()));
$person->read();