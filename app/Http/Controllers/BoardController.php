<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Board;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$id)
    {
        if ($request->input('password') !== Room::find($id)->password) {
          die("パスワードが間違っています");
        }
        return view('board.index', ["room" => Room::find($id), "boards" => Board::where('room_id',$id)->get(), 'id' => 0]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $board = new Board;
      // 太という文字で囲まれているものは太字にする
      $board->message = preg_replace('|(太)(.*)(太)|','<b>$2</b>',htmlentities($request->input('message')));
      $board->room_id = $request->input('id');
      $board->save();
      return view('board.index', ["room" => Room::find($board->room_id), "boards" => Board::where('room_id',$board->room_id)->get(), 'id' => 0]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
