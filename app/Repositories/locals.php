<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class Locals
{
    public function getPromo()
    {
        $retorno = DB::table('carrosel_home')->first();
        return $retorno;
    }

    public function getPromociones()
    {
        $retorno = DB::table('carrosel_home')->get();
        return $retorno;
    }
    public function postPromoAdm($data)
    {
        \DB::table('carrosel_home')
            ->update([
                'titulo' => $data->titulo,
                'promocion' => $data->promocion,
                'descripcion' => $data->descripcion,
            ]);
    }
}
