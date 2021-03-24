<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GameModel;
class DashboardController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $game
     * @return \Illuminate\Http\Response
     */
    public function show(GameModel $game)
    {
        //
    }
}
