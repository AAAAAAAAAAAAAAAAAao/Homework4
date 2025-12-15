<?php

require 'vendor/autoload.php';

use Jenssegers\Agent\Agent;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('user_agent');
$log->pushHandler(new StreamHandler (__DIR__ . '/agent.log', Logger::INFO));

$agent = new Agent();

dump($agent);

// Приклади використання
echo "Пристрій: " . ($agent->isMobile() ? 'Мобільний' : 'Не мобільний') . "\n";
echo "Браузер: " . $agent->browser() . "\n";
echo "ОС: " . $agent->platform() . "\n";
