<?php

include __DIR__ . '/vendor/sharoff45/library-cs-fixer/config.php';

$finder = PhpCsFixer\Finder::create()
    ->exclude('tests/TestAsset')
    ->in(__DIR__)
;

$config = getConfig($finder);

return $config;
