<?php
namespace Wec\Ui\Landing\Ui;

use Gap\Http\Response;

class ButtonUi extends UiBase
{
    public function show(): Response
    {
        return $this->view('page/landing/buttonUi');
    }
}
