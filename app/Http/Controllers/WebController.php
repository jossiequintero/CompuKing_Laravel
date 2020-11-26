<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\locals;

class WebController extends Controller
{
    private $_locals;
    function __construct(Locals $locals)
    {
        $this->_locals = $locals;
    }
    public function obtenerPromo()
    {
        $template = 'layout.template-home';
        $result = $this->_locals->getPromo();
        return \View::make('layout.master')
            ->with('promo', $result)
            ->with('template', $template);
    }
}
