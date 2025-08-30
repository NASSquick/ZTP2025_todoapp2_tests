<?php

$finder = (new PhpCsFixer\Finder())
    ->in(__DIR__)
    ->exclude('var');

return (new PhpCsFixer\Config())
    ->setRules([
        '@Symfony' => true,
        // Disable rules that remove docblocks or return tags
        'no_superfluous_phpdoc_tags' => false,
        'phpdoc_trim' => false,
        'phpdoc_to_comment' => false,
        'phpdoc_annotation_without_dot' => false,
    ])
    ->setFinder($finder);
