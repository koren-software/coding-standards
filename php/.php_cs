<?php
$finder = Symfony\Component\Finder\Finder::create()
    ->notPath('vendor')
    ->notPath('docs')
    // Add directories based on project
    //->in(__DIR__.'/app')
    ->name('*.php');

return PhpCsFixer\Config::create()
    ->setRules([
        '@PSR2' => true,
        'array_syntax' => ['syntax' => 'short'],
        'ordered_imports' => ['sortAlgorithm' => 'alpha'],
        'no_unused_imports' => true,
    ])
    ->setUsingCache(false)
    ->setFinder($finder);
