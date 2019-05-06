<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Room;
use App\Http\Controllers\RoomController;

class SearchController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // dd($request);
        $search_word = $request->input('search');
        $rooms = Room::where('title','like',"%$search_word%")->get();
        return view('index',['rooms' => $rooms]);
    }
}
