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

        $estados = DB::table('estados')->get();
        $ciudades = DB::table('ciudades')->get();
        $colonias = DB::table('colonias')->get();
        //$colonias = Colonia::pluck('CCodigoPostal', 'CNombreAsentamiento');
        return view('form', compact('estados', 'ciudades', 'colonias'));
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
            $lastId = $user->IdUser;

            $address = new Address([
                'FK_IdUser' => $lastId,
                'ContactName' => $request->nombreContacto,
                'Address' => $request->direccion,
                'PostalCode' => $request->cp,
                'Neighborhood' => $request->colonia,
                'City' => $request->ciudad,
                'State' => $request->estado,
                'Email' => $request->correoEnvio,
                'Phone' => $request->telefonoEnvio,
                'Type' => 'Default',
                'Status' => 1
            ]);
            $address->save();

            $billingdata = new Billingsdata([
                'FK_IdUser' => $lastId,
                'IqualAddress' => $request->igualAdress,
                'ContactName' => $request->nombreContactoF,
                'Address' => $request->direccionF,
                'PostalCode' => $request->cpF,
                'Neighborhood' => $request->coloniaF,
                'City' => $request->ciudadF,
                'State' => $request->estadoF,
                'Email' => $request->correoEnvioF,
                'Phone' => $request->telefonoEnvioF,
                'Type' => 'Default',
                'Status' => 1
            ]);
            $billingdata->save();

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }
}
