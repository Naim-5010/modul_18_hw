<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class domocontroller extends Controller
{
    function hello(){
        $result = DB::table('categories')->get();
        return $result;
    }
}
