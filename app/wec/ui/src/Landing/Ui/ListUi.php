<?php
namespace Wec\Ui\Landing\Ui;

use Gap\Http\Response;

class ListUi extends UiBase
{
    public function show(): Response
    {
        return $this->view('page/landing/listUi');
    }
}
