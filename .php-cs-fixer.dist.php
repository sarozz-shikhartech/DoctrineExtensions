<?php

$finder = PhpCsFixer\Finder::create()
    ->in([
        __DIR__ . '/example',
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ])
    ->exclude([
        __DIR__ . '/tests/temp',
    ]);

$config = new PhpCsFixer\Config();
return $config
    ->setRules([
        '@PSR2' => true,
        '@Symfony' => true,
        'array_syntax' => ['syntax' => 'short'],
        'is_null' => false,
        'list_syntax' => true,
        'modernize_types_casting' => true,
        'ordered_imports' => ['sort_algorithm' => 'alpha'],
        'phpdoc_summary' => false,
        'phpdoc_to_comment' => false,
        'ternary_to_null_coalescing' => true,
    ])
    ->setFinder($finder);