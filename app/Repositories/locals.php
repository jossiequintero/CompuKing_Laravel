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
}
