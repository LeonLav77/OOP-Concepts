<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\DatabaseContract;

class DBController extends Controller
{
    public function index(DatabaseContract $db){
        dd($db->add('Leon',15));
    }
}
