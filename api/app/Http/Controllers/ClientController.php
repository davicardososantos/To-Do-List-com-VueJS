<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;


class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return $clients;
    }
    public function show(string $id)
    {
        $client = Client::find($id);
        return $client;
    }
    public function store(Request $request)
    {
        $client = new Client;

        $client->name = $request->name;
        $client->instagram = $request->instagram;
        $client->email = $request->email;
        $client->tel = $request->tel;

        $client->save();
        return $client;
    }
    public function destroy(string $id)
    {
        $client = Client::find($id);
        $client->delete();
        // return response()->json([
        //     'name' => 'Teste'
        // ]);
        return $client;
    }
    public function edit(Request $request, string $id)
    {
        $client = Client::find($id);

        $client->name = $request->name;
        $client->instagram = $request->instagram;
        $client->email = $request->email;
        $client->tel = $request->tel;

        $client->save();

        return $client;
    }

    // $user = DB::table('users')->find(3);
    // $deleted = DB::table('users')->delete();
    // $flight = Flight::find(1);

    // $flight->name = 'Paris to London';

    // $flight->save();


}
