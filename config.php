<?php
$dir = __DIR__ . '/app';

$iterator = Symfony\Component\Finder\Finder::create()
    ->files()
    ->name('*.php')
    ->exclude('build')
    ->exclude('tests')
    ->in($dir);

$options = [
    'theme'                => 'default',
    'title'                => 'Documentation',
    'build_dir'            => __DIR__ . '/laravel',
    'cache_dir'            => __DIR__ . '/cache',
];

$sami = new Sami\Sami($iterator, $options);

return $sami;

?>
