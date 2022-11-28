<?php
declare(strict_types=1);


//exit if accessed directly 
if (!defined('ABSPATH')) {
	exit;
}

require_once __DIR__ . '/vendor/autoload.php';

$theme = new CBD\CBDTheme();

$theme->run();