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

        $data = DB::table('addresses')
            ->join('users', 'addresses.IdAddress', '=', 'users.IdUser')
            ->join('billingsdatas', 'users.IdUser', '=', 'billingsdatas.IdBillingdata')
            ->selectRaw('users.IdUser, users.Name, users.Company, users.Email, users.Phone, users.Discount, count(addresses.IdAddress) as cotizaciones, count(billingsdatas.IdBillingdata) as ordenes,addresses.Status, count(addresses.Status) as solicitudes')
            ->groupBy('users.IdUser')
            ->get();
        $solicitudes = DB::table('addresses')
            ->join('users', 'addresses.IdAddress', '=', 'users.IdUser')
            ->join('billingsdatas', 'users.IdUser', '=', 'billingsdatas.IdBillingdata')
            ->selectRaw('users.IdUser,addresses.Status, count(addresses.Status) as solicitudes')
            ->groupBy('users.IdUser')
            ->get();



        $arrStatus = [];
        foreach ($solicitudes as $item) {
            array_push($arrStatus, $item->Status);
        }

        $i = 0;
        foreach ($data as $item) {

            $item->NoSolicitudes = $arrStatus[$i];
            $i++;
        }

        return view('table', compact('data'));
    }

    public function create()
    {

        $estados = DB::table('estados')->get();
        $ciudades = DB::table('ciudades')->get();
        $colonias = DB::table('colonias')->get();

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

            if ($request->nombreContacto != '') {
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
            }


            DB::commit();
            return view('table');
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }
}
