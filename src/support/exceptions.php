<?php

namespace antal\Support;

use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

$whoops_run     = new Run();
$error_page_handler = new PrettyPageHandler();

$whoops_run->pushHandler($error_page_handler);
$whoops_run->register();