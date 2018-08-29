<?php
$collection = new \Gap\Config\ConfigCollection();

if (file_exists(__DIR__ . '/setting.local.php')) {
    $collection->requireFile(__DIR__ . '/setting.local.php');
}
if (file_exists(__DIR__ . '/setting.app.php')) {
    $collection->requireFile(__DIR__ . '/setting.app.php');
}
$collection->requireDir(__DIR__ . '/system');
$collection->requireDir(__DIR__ . '/local');

return $collection;
