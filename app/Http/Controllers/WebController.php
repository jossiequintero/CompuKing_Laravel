<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Locals;

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

    public function obtenerPromociones()
    {
        // $template = 'welcome';
        $result = $this->_locals->getPromociones();
        return view('administracion.master')
            ->with('carrosel_home_items', $result);
    }

    public function GuardarPromoAdm(Request $req)
    {
        $data = (object)
        [
            'titulo' => $req->input('Titulo'),
            'promocion' => $req->input('Promocion'),
            'descripcion' => $req->input('Descripcion'),
        ];
        $this->_locals->postPromoAdm($data);
    }
}
