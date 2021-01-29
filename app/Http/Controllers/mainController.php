<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class mainController extends Controller
{

    public function index(Request $request){
        try{
            App::bind('retreiver', 'App\libs\services\\'.$request->transactions);
            $d = App::make('retreiver');
        }
        catch (\Exception $c){
            return $c->getMessage();
        }
        return $d->retreive();

    }
}
