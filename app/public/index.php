<?php
require_once '../vendor/autoload.php';

use App\BusinessLogic;

$logic = new BusinessLogic();
echo $logic->process();
