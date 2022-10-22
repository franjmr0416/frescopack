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
use Illuminate\Support\Facades\DB;

class MayoristasController extends Controller
{
    public function index()
    {
        return view('table');
    }

    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $user = new User([
                'Name' => $request->nombre,
                'LastName' => '',
                'Company' => $request->empresa,
                'Email' => $request->email,
                'Password' => '',
                'Phone' => $request->telefono,
                'Discount' => $request->descuento,
                'BusinessName' => $request->razon,
                'Cfdi' => $request->cfdi,
                'Rfc' => $request->rfc,
                'Type' => 'Moral',
                'Location' => 'Tienda',
                'Role' => 'Mayorista',
                'Status' => 1
            ]);
            $user->save();
            /*
            $address = new Address();
            $address->save();

            $billingdata = new Billingsdata();
            $billingdata->save();
*/
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }
}
