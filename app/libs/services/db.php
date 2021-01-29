<?php

namespace App\libs\services;

use App\libs\retreiver;
use App\transactions;

class db implements retreiver{

    public function retreive(){
        return response()->json(transactions::get());
    }
}
