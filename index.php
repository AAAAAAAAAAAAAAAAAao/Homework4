<?php

require 'vendor/autoload.php';

use Jenssegers\Agent\Agent;

// Створюємо екземпляр
$agent = new Agent();

// Приклади використання
echo "Пристрій: " . ($agent->isMobile() ? 'Мобільний' : 'Не мобільний') . "\n";
echo "Браузер: " . $agent->browser() . "\n";
echo "ОС: " . $agent->platform() . "\n";
