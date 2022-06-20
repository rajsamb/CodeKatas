<?php

require_once '../vendor/autoload.php';

use CodeKatas\Greetings\Greetings;

//echo Greetings::sayHelloWorld();

const ROLE_ADMIN        = 0x00000001;
const ROLE_CLIENT       = 0x00000002;
const ROLE_SL1          = 0x00000010;
const ROLE_SL4          = 0x00000020;
const ROLE_SUBTENANT    = 0x00000040;
const ROLE_OWNER        = 0x00000080;

echo ROLE_ADMIN; echo '<br>';
echo ROLE_CLIENT; echo '<br>';
echo ROLE_SL1; echo '<br>';
echo ROLE_SL4; echo '<br>';
echo ROLE_SUBTENANT; echo '<br>';
echo ROLE_OWNER; echo '<br>';
echo ROLE_ADMIN | ROLE_SL4; echo '<br>';
echo ROLE_ADMIN | ROLE_SL1; echo '<br>';