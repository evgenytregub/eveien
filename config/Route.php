<?php

namespace vendor\Route;

use vendor\Route\route;
use frontend\core\Builder;

route::get('/');
route::get('builder');
route::get('signin');
route::get('checkin');

$Builder = new Builder();
$Builder->builder();

