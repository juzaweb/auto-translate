<?php

namespace Juzaweb\AutoTranslate\Http\Controllers;

use Juzaweb\CMS\Http\Controllers\BackendController;

class AutoTranslateController extends BackendController
{
    public function index()
    {
        //

        return view(
            'juau::index',
            [
                'title' => 'Title Page',
            ]
        );
    }
}
