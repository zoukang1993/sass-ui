<?php
$collection = new \Gap\Routing\RouteCollection();
/*
$collection
    ->site('www') 
    ->access('public')

    ->get('/get/pattern', 'routeName', 'Wec\Ui\LandUi\Ui\Entity@show')
    ->post('/post/patter', 'routeName', 'Wec\Ui\LandUi\Ui\Entity@post')
    ->getRest('/get-rest/patter', 'routeName', 'Wec\Ui\LandUi\Rest\Entity@getRest')
    ->postRest('/post-rest/patter', 'routeName', 'Wec\Ui\LandUi\Rest\Entity@postRest')
    ->getOpen('/get-open/patter', 'routeName', 'Wec\Ui\LandUi\Open\Entity@getOpen')
    ->postOpen('/post-open/patter', 'routeName', 'Wec\Ui\LandUi\Open\Entity@postOpen');
*/

$collection
    ->site('default')
    ->access('public')

    ->get('/', 'home', 'Wec\Ui\Landing\Ui\HomeUi@show')
    
    ->get('/logo', 'logo', 'Wec\Ui\Landing\Ui\LogoUi@show')
    ->get('/font', 'font', 'Wec\Ui\Landing\Ui\FontUi@show')
    ->get('/box', 'box', 'Wec\Ui\Landing\Ui\BoxUi@show')
    ->get('/border', 'border', 'Wec\Ui\Landing\Ui\BorderUi@show')
    ->get('/list', 'list', 'Wec\Ui\Landing\Ui\ListUi@show')
    ->get('/color', 'color', 'Wec\Ui\Landing\Ui\ColorUi@show')
    ->get('/form', 'form', 'Wec\Ui\Landing\Ui\FormUi@show')
    ->get('/button', 'button', 'Wec\Ui\Landing\Ui\ButtonUi@show')
    ->get('/flex', 'flex', 'Wec\Ui\Landing\Ui\FlexUi@show')
    ->get('/card', 'card', 'Wec\Ui\Landing\Ui\CardUi@show')
    ->get('/grid', 'grid', 'Wec\Ui\Landing\Ui\GridUi@show')
    ->get('/component', 'component', 'Wec\Ui\Landing\Ui\ComponentUi@show')
    ->get('/other', 'other', 'Wec\Ui\Landing\Ui\OtherUi@show');

return $collection;
