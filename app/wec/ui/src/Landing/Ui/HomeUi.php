<?php
namespace Wec\Ui\Landing\Ui;

use Gap\Http\Response;

class HomeUi extends UiBase
{
    public function show(): Response
    {
        return $this->view('page/landing/home');
    }
}
