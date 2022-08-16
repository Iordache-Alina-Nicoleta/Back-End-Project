<?php

namespace App\Http\Controllers;

use App\General\Concretes\CategStatus;
use App\Http\Requests\AddLocationRackRequest;
use App\Http\Requests\EditLocationRackRequest;
use App\Models\LocationRack;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Location;

class LocationRackController extends Controller
{
    public function index () {
        $location = LocationRack::all();
        $location = LocationRack::orderBy('Location_Rack')->get();
        return view("pages.locationRack.index", [
            "location"=> $location
        ]);
    }

    public function search(Request $request)
    {
        if($request->isMethod("post")) 
        {
            $name =$request->post("name");
            $location= LocationRack::where ("Location_Rack", "LIKE", "%".$name."%")->get();
        }
        return view("pages.locationRack.index", compact("location"));
     
    }

    public function Add() {
        $statuss =CategStatus::getEnumm();
        return view("pages.locationRack.add", [
            "statuss" => $statuss
        ]);
    }

    public function store (AddLocationRackRequest $request) {
        if($request ->validated()){
            $args = $request -> only([
                "Location_Rack", 
                "Status", 
                "Created_On", 
                "Updated_On"
            ]);
    
            $location = new LocationRack($args);
    
                if ($location ->save()) {
                    return redirect()->route("add-location-page") -> with("success", "Location Rack added!");
            }
        }
        return redirect()-> route("add-location-page")->with("failed", "We have a problem!");
    
    }
    public function view(LocationRack $location) {
        return view("pages.locationRack.view", [
            "location"=>$location
        ]);
    }

    public function destroy (LocationRack $location) {
        if($location->delete()){
            return redirect()->route("LocationRack")->with ("success", "Location Rack deleted succesfully!");
        }
    }

    public function edit(LocationRack $location){
        $statuss =CategStatus::getEnumm();
        return view("pages.locationRack.edit", [
            "location"=>$location,
            "statuss" => $statuss
        ]);
    }
    public function update (EditLocationRackRequest $request, LocationRack $location)
    {      
        if($request ->validated()){
            $args = $request -> only([
                "Location_Rack", "Status", "Created_On", "Updated_On"
            ]);

        if ($location ->update($args)) {
            return redirect()->route("add-location-page", $location->id) -> with("success", "Location Rack updated");
            }
        }
            else {
                return redirect()-> route("add-location-page", $location->id)->with("failed", "Oops, we have an error!"); 
        }
   
    }
}
