<?php
namespace Wec\Ui\Landing\Ui;

use Gap\Http\Response;

class FontUi extends UiBase
{
    public function show(): Response
    {
        return $this->view('page/landing/fontUi');
    }
}
