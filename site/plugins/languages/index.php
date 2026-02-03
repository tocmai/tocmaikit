<?php

use Kirby\Data\Yaml;
use Kirby\Filesystem\F;

Kirby::plugin('tocmaikit/languages', [
    'translations' => [
        'ro' => Yaml::decode(F::read(__DIR__ . "/vars/ro.yml")),
        'en' => Yaml::decode(F::read(__DIR__ . "/vars/en.yml"))
    ]
]);