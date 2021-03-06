<?php

define('ROOT', dirname(__DIR__));
define('CONFIG', __DIR__ . DS . 'config' . DS);

require ROOT . DS . 'vendor' . DS . 'autoload.php';

use Cake\Core\Configure;
use Cake\Core\Configure\Engine\PhpConfig;

Configure::config('default', new PhpConfig());
Configure::load('test', 'default', false);
