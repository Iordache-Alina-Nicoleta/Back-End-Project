<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddClientRequest;
use App\Http\Requests\EditClientRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index (){
        $client = Client:: all();
        $client = Client::orderBy('Client_Name')->get();
        return view("pages.client.index", [
            "client" => $client
        ]);
    }

    public function search(Request $request)
    {
        if($request->isMethod("post")) 
        {
            $name =$request->post("name");
            $client = Client::where ("Client_Name", "LIKE", "%".$name."%")->get();
        }
        return view("pages.client.index", compact("client"));
     
    }

    public function Add() {
       
        return view("pages.client.add");
    }

    public function store (AddClientRequest $request) {
        if($request ->validated()){
            $args = $request -> only([
                "client_name", "email_address","contact_no","address"
            ]);

            $client = new Client($args);

            if ($client ->save()) {
                return redirect()->route("Client") -> with("success", "Client added!");
            }
        }
            return redirect()-> route("Client")->with("failed", "We have a problem!");
    }

    public function edit(Client $client) {
      
        return view("pages.client.edit", [
           "client" => $client
        ]);
    }

    public function update (EditClientRequest $request, Client $client)
    {      
        if($request ->validated()){
            $args = $request -> only([
                "client_name", "email_address","contact_no","address"
            ]);

        if ($client ->update($args)) {
            return redirect()->route("Client", $client->id) -> with("success", "Client updated");
            }
        }
            else {
                return redirect()-> route("Client", $client->id)->with("failed", "Oops, we have an error!"); 
        }
   
    }

    public function destroy (Client $client) {
        if($client->delete()){
            return redirect()->route("Client")->with ("success", "Client deleted succesfully!");
        }
    }
}
