<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CardModel;

class CardController extends Controller
{
    public function index() {
        return view('card');
    }
}
