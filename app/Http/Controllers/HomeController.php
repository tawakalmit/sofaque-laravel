<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CardModel;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $mycard = CardModel::all();
        return view('homepage', compact('mycard'));
    }


}
