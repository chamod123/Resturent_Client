<?php

namespace App\Http\Controllers;

use App\ClientModel;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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
            $client->status = $request->has("status");
            $client->save();

            //create random password
            $password = substr(md5(mt_rand()), 0, 10);

            $userClient = new User();
            $userClient->email = $request->email;
            $userClient->mobile = $request->get("email");
            $userClient->password = Hash::make($password);
            $userClient->save();

            //send mail
            $data = ['client' => $client,'password' => $password];

            Mail::send('registered_mail', $data, function($message) {
                $message->to('chamodwijesena77@gmail.com', 'Restaurant')->subject
                ('You have registered to the Restaurant');
                $message->from('sample@gmail.com','Restaurant');
            });

            return redirect('/Client');
        } catch (\Exception $e) {

            return $e->getMessage();
        }
    }

    //view edit client screen
    public function view_edit($client_no)
    {
        try {
            $client = ClientModel::find($client_no);
            return view('Client.edit',
                ['client' => $client
                ]);
        } catch (\Exception $e) {

            return $e->getMessage();
        }
    }

    //update client
    public function edit(Request $request)
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

            $client = ClientModel::find($request->client_no);

            $client->first_name = $request->first_name;
            $client->last_name = $request->last_name;
            $client->contact = $request->contact;
            $client->email = $request->email;
            $client->gender = $request->gender;
            $client->dob = $request->dob;
            $client->street_no = $request->street_no;
            $client->street_address = $request->street_address;
            $client->city = $request->city;
            $client->status = $request->has("status");
            $client->save();


            return redirect('/Client');
        } catch (\Exception $e) {

            return $e->getMessage();
        }
    }

    //delete client
    public function delete($client_no)
    {
        try {
            $client = ClientModel::find($client_no);
            $client->delete();
            return 'sucess';
        } catch (\Exception $e) {

            return $e->getMessage();
        }
    }

    //view client details
    public function view_data($client_no)
    {
        try {
            $client = ClientModel::find($client_no);
            return $client;
        } catch (\Exception $e) {

            return $e->getMessage();
        }
    }




}
