<?php
namespace Wec\Ui\Landing\Ui;

use Gap\Http\Response;

class BoxUi extends UiBase
{
    public function show(): Response
    {
        return $this->view('page/landing/boxUi');
    }
}
