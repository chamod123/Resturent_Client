<?php

namespace App\Http\Controllers;

use App\ClientModel;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        try {
            $clients = ClientModel::all();

            return view('Client.index',
                ['clients' => $clients
                ]);
        } catch (\Exception $e) {

            return $e->getMessage();
        }
    }
}
