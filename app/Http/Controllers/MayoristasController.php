<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Billingsdata;
use App\Models\Address;
use App\Models\Ciudade;
use App\Models\CodigosPostale;
use App\Models\Estado;
use App\Models\Colonia;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class MayoristasController extends Controller
{
    public function __invoke(Request $request)
    {
        try {
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
