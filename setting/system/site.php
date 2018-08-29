<?php
$collection = new \Gap\Config\ConfigCollection();

$collection
    ->set('site', [
        'default' => [
            'host' => 'ui.%baseHost%',
        ],
        'static' => [
            'host' => 'ui-static.%baseHost%',
            'dir' => '%baseDir%/site/static',
        ],
    ]);

return $collection;
