<?php
namespace Wec\Ui\Landing\Ui;

use Gap\Http\Response;

class FormUi extends UiBase
{
    public function show(): Response
    {
        return $this->view('page/landing/formUi');
    }
}
