<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PaysController extends Controller
{
    public function documentation(){

        return View('index');


    }
    
    public function index()
    {
        $json = file_get_contents( __DIR__."/pays.json") ;
        $pays=json_decode($json);
        return View('pays',['pays' => $pays]);

        
    }
    public function show($name)
    {

        $json = file_get_contents(__DIR__."/pays.json");
        $array=json_decode($json);
        foreach ($array as $obj) 
        {
            if ( strtoupper($obj->name)  == strtoupper($name) ) {
            return response()->json(['name' => $obj->name, 'currency' => $obj->currency]);

            } 
            
        }
         return abort(404);
    }

}
