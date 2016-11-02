<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Country;
use Illuminate\Support\Facades\Input;

class CountryController extends Controller {

    public function autocomplete($query) {
        $respons_result = Country::autocomplet($query);
        return response($respons_result);
    }

}
