<?php

require '../vendor/autoload.php';

use App\Controllers\ContactController;

$controller = new ContactController();
$controller->index();