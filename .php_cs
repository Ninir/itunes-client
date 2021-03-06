<?php

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->notName('LICENSE')
    ->notName('readme.md')
    ->notName('.php_cs')
    ->notName('.travis.yml')
    ->notName('composer.*')
    ->notName('phpunit.xml*')
    ->exclude('vendor')
    ->exclude('tests')
    ->exclude('.DS_STORE')
    ->exclude('.idea')
    ->exclude('bin')
    ->in(__DIR__)
;

return Symfony\CS\Config\Config::create()
    ->finder($finder)
;
