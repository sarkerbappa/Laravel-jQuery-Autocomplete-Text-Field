<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Country extends Model
{
    static function autocomplet($query){
        $auto_complete_result = DB::table('countries')
                ->select('country_id','country_name')
                ->where('country_name', 'like','%'.$query.'%')
                ->get();
        return $auto_complete_result;
    }
}
