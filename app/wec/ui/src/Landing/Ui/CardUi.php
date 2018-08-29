<?php
namespace Wec\Ui\Landing\Ui;

use Gap\Http\Response;

class CardUi extends UiBase
{
    public function show(): Response
    {
        return $this->view('page/landing/cardUi');
    }
}
