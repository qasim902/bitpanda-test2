<?php

namespace App\libs\services;

use App\libs\retreiver;

class csv implements retreiver{

    public function retreive(){
        {
            $file_n = storage_path('app\public\transactions.csv');
            $file = fopen($file_n, "r");
            $all_data = array();
            $array = array();
            while ( ($data = fgetcsv($file, 200, ",")) !==FALSE) {
                $all_data['id'] = $data[0];
                $all_data['code'] = $data[1];
                $all_data['amount'] = $data[2];
                $all_data['user_id'] = $data[3];
                $all_data['created_at'] = $data[4];
                $all_data['updated_at'] = $data[5];
//                $all_data = $id.",".$code.",".$amount.",".$user_id.",".$created_at.",".$updated_at;
                array_push($array, $all_data);
            }
            fclose($file);
            return response()->json($array);
        }
    }
}
