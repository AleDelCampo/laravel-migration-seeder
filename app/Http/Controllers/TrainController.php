<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;

class TrainController extends Controller
{
    public function index()
{
    $today = Carbon::now()->toDateString();
    $trains = Train::whereDate('orario_partenza', '=', $today)->get();
    return view('homepage', ['trains' => $trains]);
}
};
