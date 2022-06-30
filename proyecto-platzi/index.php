<?php

require __DIR__ . '/vendor/autoload.php';

var_dump(App\Validate::email('i@rimorsoft.com'));
var_dump(App\Validate::email('i@@rimorsoft.com'));
var_dump(App\Validate::email('iq@rimorsoft.com'));
var_dump(App\Validate::email('it@rimorsoft.com'));
var_dump(App\Validate::email('iuik@microsoft.com'));
var_dump(App\Validate::email('i@rimorsoft.mx'));
var_dump(App\Validate::email('i@rimorsoft.com'));
