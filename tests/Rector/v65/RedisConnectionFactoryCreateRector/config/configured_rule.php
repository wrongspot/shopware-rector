<?php

declare(strict_types=1);

use Frosh\Rector\Rule\v65\RedisConnectionFactoryCreateRector;
use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->import(__DIR__ . '/../../../../../config/config_test.php');
    $rectorConfig->rule(RedisConnectionFactoryCreateRector::class);
};
