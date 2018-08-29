<?php
$collection = new \Gap\Config\ConfigCollection();
$collection
    ->set("app", [
        "Wec\Ui" => [
            "dir" => "app/wec/ui",
        ],
    ]);
return $collection;
