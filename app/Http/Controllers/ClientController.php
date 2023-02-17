<?php

namespace App\Http\Controllers;

use App\ClientModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    public function create()
    {
        try {
            return view('Client.create');
        } catch (\Exception $e) {

            return $e->getMessage();
        }
    }


    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'first_name' => 'required',
                'last_name' => 'required',
                'contact' => 'required',
                'email' => 'required',
                'gender' => 'required',
                'dob' => 'required',
                'street_no' => 'required',
                'street_address' => 'required',
                'city' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->getMessageBag()->toArray()], 200);
            }

            $client = new ClientModel();
            $client->first_name = $request->first_name;
            $client->last_name = $request->last_name;
            $client->contact = $request->contact;
            $client->email = $request->email;
            $client->gender = $request->gender;
            $client->dob = $request->dob;
            $client->street_no = $request->street_no;
            $client->street_address = $request->street_address;
            $client->city = $request->city;
            $client->status =  $request->has("status");
            $client->save();

            return redirect('/Client');
        } catch (\Exception $e) {

            return $e->getMessage();
        }
    }
}
